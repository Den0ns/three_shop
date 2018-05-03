<?php
namespace app\admin\Controller;
use think\Controller;
use think\Request;  
use think\Db;  
use think\Exception;
use app\admin\model\Brand;
use app\admin\model\Cat;
use app\admin\model\Goodstype;
use app\admin\model\Attr;
use app\admin\model\Goods as goods_model;
use app\admin\model\Goods_attr;
use app\admin\controller\Common;

class Goods extends Common
{
    public function goods_list()
    {
        $goods_model = new goods_model();
        $goods = $goods_model->all();
        return view('goods_list',['goods'=>$goods]);
    }
    
    public function goods_add()
    {
        if(Request()->isGet()){
            $cat_data = Cat::all()->toArray();
            $cat_data = $this->getflag($cat_data,0,1,'cat_id');
            $brand    = Brand::all()->toArray();
            $goodstype    = Goodstype::all()->toArray();
            return view('goods_add',['cat'=>$cat_data,'brand'=>$brand,'goodstype'=>$goodstype]);
        }
        if(request()->isPost()){
            $data = input("post.");

            $attr_value_list = isset($_POST['attr_value_list'])?$_POST['attr_value_list']:'';
            $attr_price_list = isset($_POST['attr_price_list'])?$_POST['attr_price_list']:'';
           
            //添加商品图片
            
            $data['goods_img'] = $data['goods_thumb'] = '';
            $goods_img   = request()->file('goods_img');
            $data['goods_img']   = $this->upload($goods_img);
            $data['goods_thumb'] = $this->upload_thumb($data['goods_img'],160,136);

            //生成货号
            if(input("post.goods_sn")==''){
               $data['goods_sn']= $this->create_sn();
            }
            $data['up_time']=$data['create_time']=time();
            

            Db::startTrans();
            try{
                //添加商品数据
                $goods = $this->checkfield("goods",$data);
                Db::name('goods')->insert($goods);
                $goods_id = Db::name('user')->getLastInsID();

                //添加商品属性
                $goods_attr = $this->goods_add_attr($attr_value_list,$attr_price_list,$goods_id);

                Db::name('goods_attr')->insertAll($goods_attr);

                //添加商品相册
                $photo_img = request()->file('photo_src');
                $photo_src =$this->upload_all($photo_img);
                foreach ($photo_src as $key => $value) {
                    $photo[$key]['goods_id'] = $goods_id;
                    $photo[$key]['photo_src'] = $value;
                    $photo[$key]['photo_thumb']=$this->upload_thumb($value,79,79);
                    $photo[$key]['photo_content'] = $data['photo_content'][$key];
                }
                Db::name('goods_photo')->insertAll($photo);
                $flag=true;
                //提交事务
                Db::commit();
            } catch (\Exception $e) {
                //添加商品失败,删除对应图片
                if($data['goods_img']!=''){
                    unlink('./uploads/'.$data['goods_img']);
                    if($data['goods_thumb']!=''){
                        unlink('./uploads/'.$data['goods_thumb']);
                    }
                }
                $flag = false;
                dump($e->getMessage());
                // 回滚事务
                Db::rollback();
            }
            die;
            if($flag==true){
                $this->success("添加成功",'Goods/goods_list');
            }else{
                $this->error("添加失败",'Goods/goods_list');
            }
            
        }
    }

    public function checkfield($table,$data)
    {
        $fields = Db::getTableInfo($table,'fields');
        foreach ($data as $key => $value) {
            if(!in_array($key,$fields)){
                unset($data[$key]);
            }
        }
        return $data;
    }

    public function product()
    {
        $goods_id = Request::instance()->param('goods_id');
        $goods_model = new goods_model();
        $goods['goods_name'] = $goods_model->where('goods_id',$goods_id)->value('goods_name');
        $goods['goods_sn'] = $goods_model->where('goods_id',$goods_id)->value('goods_sn');

        $goods_attr = Goods_attr::all(["goods_id"=>$goods_id])->toArray();
        foreach ($goods_attr as $key => $value) {
            $goods_attr[$key]['attr_name']=Attr::where(['attr_id'=>$value['attr_id']])->where(['attr_type'=>2])->value('attr_name');
            if($goods_attr[$key]['attr_name']==null){
                unset($goods_attr[$key]);
            }
        }

        foreach ($goods_attr as $key => $value) {
            $product['attr_name'][$value['attr_id']]=$value['attr_name'];
            $product['attr_value'][$value['attr_id']][$value['goods_attr_id']]=$value['attr_value'];
        }
        dump($product);
        return view("product",['product'=>$product,'goods'=>$goods,'goods_id'=>$goods_id]);
    }

    public function product_add()
    {
        $goods_id = input("post.goods_id");
        $data = $_POST;
        foreach ($data['attr'] as $key => $value) {
            foreach ($value as $k => $v) {
                $product_value[$k][]=$v;
            }
        }
        foreach ($product_value as $key => $value) {
            $product[]=[
                'goods_id'=>$goods_id,
                'product_sn'=>$data['product_sn'][$key]?$data['product_sn'][$key]:$this->create_sn(),
                'product_number'=>$data['product_number'][$key],
                'product_value'=>implode(',',$value)
            ];
        }
        if(Db::name('product')->insertAll($product)){
                $this->success("添加成功",'Goods/goods_list');
            }else{
                $this->error("添加失败",'Goods/goods_list');
            }
    }

    public function gettype()
    {
        $type_id = input("post.type_id");
        $attr    = Attr::all(['type_id'=>$type_id])->toArray();
        foreach ($attr as $key => $value) {
            $attr[$key]['values'] = explode("\r\n",$value['attr_values']);
        }

        return view("goods_attr",["attr"=>$attr]);
    }

    public function goods_add_attr($attr_value_list,$attr_price_list,$goods_id)
    {
        foreach ($attr_value_list as $key => $value) {
            if(!$value){
                continue;
            }else{
                //如果是规格
                if(is_array($value)){
                    foreach ($value as $k => $v) {
                        if(!$v){
                            continue;
                        }else{
                            $arr[]=array(
                                'goods_id'=>$goods_id,
                                'attr_id'=>$key,
                                'attr_price'=>$attr_price_list[$key][$k],
                                'attr_value'=>$v
                            );
                        }
                    }
                }else{
                    //如果是属性
                    $arr[]=array(
                        'goods_id'=>$goods_id,
                        'attr_id'=>$key,
                        'attr_price'=>0,
                        'attr_value'=>$value
                    );
                }
            }
        }
        return $arr;
    }
    public function create_sn()
    {
        $goods_model = new goods_model();
        $sn = 'EC'.date('YmdHis').rand(1000,9999);
        if($sn){
            if($goods_model->get(['goods_sn'=>$sn])){
                $this->create_sn();
            }
        }
        return $sn;
    }

    public function upload($file){
    // 移动到框架应用根目录/public/uploads/ 目录下
        if($file){
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
                return $info->getSaveName();
            }else{
                // 上传失败获取错误信息
                echo $file->getError();die;
            }
        }
    }
    public function upload_thumb($img,$width,$height)
    {
        $thumb = pathinfo($img);
        $thumb_img = './uploads/'.$thumb['dirname'].'/'.$thumb['filename'].'_thumb.'.$thumb['extension'];
        $thumb = $thumb['dirname'].'/'.$thumb['filename'].'_thumb.'.$thumb['extension'];
        $img = './uploads/'.$img;
        $image = \think\Image::open($img);
        // 按照原图的比例生成一个缩略图
        if($image->thumb($width,$height)->save($thumb_img)){
            return $thumb;
        }
    }

    public function upload_all($photo_img){
        foreach($photo_img as $file){
            // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
                $photo_src[] = $info->getSaveName();
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }    
        }
        return $photo_src;
    }
}