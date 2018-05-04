<?php
namespace app\admin\Controller;
use think\Controller;
use think\Request;
use think\Paginator;
use think\Db;
use app\admin\Common;
use app\admin\model\Brand as Brand_Model;

class Brand extends Common
{
    public function brand_list()
    {
        $brand_data  = Db::name('brand')->where('is_show',1)->paginate(5);
        return view('brand_list',['brand'=>$brand_data]);
    }
    
    public function brand_add()
    {
        if(request()->isGet()){
            return view('brand_add');
        }
        if(request()->isPost()){
            $file = request()->file('brand_logo');
            if($file){
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if($info){
                    $brand_logo = $info->getSaveName();

                    $brand_model = new Brand_Model();
                    $brand_model->data([
                        'brand_name'       =>  input("post.brand_name"),
                        'site_url'         =>  input("post.site_url"),
                        'is_show'          =>  input("post.is_show"),
                        'brand_desc'       =>  input("post.brand_desc"),
                        'brand_logo'       =>  $brand_logo
                    ]);
                    if($brand_model->save()){
                        $this->success('添加成功', 'Brand/brand_list');
                    }else{
                        unlink('./uploads/'.$brand_logo);
                        $this->error('添加失败', 'Brand/brand_add');
                    }
                }else{
                    // 上传失败获取错误信息
                    $this->error($file->getError(), 'Brand/brand_add');
                }
            }
        }
    }
    public function brand_edit()
    {
        if(request()->isGet()){
            $brand_id = Request::instance()->param('brand_id');
            $brand_model = new Brand_Model();
            $this_brand  = $brand_model->find_brand($brand_id);
            return view('brand_edit',['brand'=>$this_brand]);
        }
        if(request()->isPost()){
            $old_img = input("post.old_img");
            $file = request()->file('brand_logo');

            if($file){
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if($info){
                    $brand_logo = $info->getSaveName();
                }
            }else{
                $brand_logo = $old_img;
            }
            
            $brand_model = new Brand_Model();

            if($brand_model->save([
                'brand_name'       =>  input("post.brand_name"),
                'site_url'         =>  input("post.site_url"),
                'is_show'          =>  input("post.is_show"),
                'brand_desc'       =>  input("post.brand_desc"),
                'brand_logo'       =>  $brand_logo
            ],['brand_id'=>input("post.brand_id")])){
                if($brand_logo!=$old_img){
                    unlink('./uploads/'.$old_img);
                }
                $this->success('修改成功', 'Brand/brand_list');
            }else{
                if($brand_logo!=$old_img){
                    unlink('./uploads/'.$brand_logo);
                }
                $this->error('修改失败', 'Brand/brand_edit');
            }
        }
    }
    public function brand_del() 
    { 
        $brand_id = Request::instance()->param('brand_id');
        $brand_model = new Brand_Model();
        $this_brand  = $brand_model->find_brand($brand_id);
        $old_img     = './uploads/'.$this_brand['brand_logo'];

        if($brand_model->destroy($brand_id)){
            unlink($old_img);
            $this->success('删除成功', 'Brand/brand_list');
        }else{
            $this->error('删除失败', 'Brand/brand_list');
        }
    }
}