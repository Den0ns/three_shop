<?php
namespace app\admin\Controller;
use think\Controller;
use think\Request;   
use think\Db;
use app\admin\Controller\Common;
class Advert extends Common
{   
        //广告添加
    public function advert_add()
    {   
         if(request::instance()->isGet()){ 
            return view('advert_add');
        }
        
        if(request::instance()->isPost()){
            $advert = input('post.');
            $file   = request()->file('ad_img');
            $info   = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
         if($info){
            // 成功上传后 获取上传信息
            $advert['ad_img'] = $info->getSaveName();
            $res = DB::table('ad')->insert($advert);
            if($res)
            {
                $this->redirect('Advert/advert_list');
            }else{
                $this->redirect('Advert/advert_add');
            }
        }else{
            // 上传失败获取错误信息
            echo $file->getError();
             }
        }
        
    }
    // 广告列表
    public function advert_list()
    {
        $page  = input('get.page');
        $count = DB::table('ad')->count();
        $res   = Db::table('ad')->paginate(5,$count);
        $page_res  = $count-1;
        $page_size = isset($page)?$page:1;
        $this->assign('page_size',$page_size);
        $this->assign('page_res',$page_res);
        $this->assign('count',$count);
        $this->assign('res',$res);
        return view('advert_list');
    }

    public function del(){
        $id      = input('get.id');//获取商品id
        $ad_data = Db::table('ad')->where(['ad_id'=>$id])->find();  
        $old_img = './uploads/'.$ad_data['ad_img'];
        $res     = Db::table('ad')->delete($id);
        if($res){  
            unlink($old_img);
           $this->redirect('Advert/advert_list');
         }else
         {  
           return $this->error("删除失败",url('Advert/del'));
        }
    }
    public function up(){
        $id     = input('get.id');
        $up_res = Db::table('ad')->where('ad_id',$id)->find();
        return $this->fetch('advert_updata',['res'=>$up_res]);
    }
    public function updatas(){
        $ad_id  = input("post.ad_id");
        $old_img = './uploads/'.input("post.old_img");
        $post   = input('post.');
        unset($post['old_img']);
        $file   = request()->file('ad_img');
        $info   = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        if($info)
        {
            $post['ad_img'] = $info->getSaveName();
            $upd  = Db::table('ad')->where(['ad_id'=>$ad_id])->update($post);
            if($upd)
            {
                unlink($old_img);
                return $this->success('成功',url('advert_list'));
            }else{
                return $this->error('失败',url('up'));
            }
        }   
    }

} 