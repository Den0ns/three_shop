<?php
namespace app\admin\Controller;
use think\Controller;
use think\Request;  
use think\Paginator;  
use app\admin\model\User_rank; 
use app\admin\model\User_model; 

class User extends Controller
{   
    //会员列表
    public function user_list()
    {
       // echo time();
         $user = new User_model();
        // $data = $user->select();
        $data = $user->paginate(3);

        foreach ($data as $key => $value) {
            $arr[] = $value->toArray();
        }
        $page = $data->render();
        $this->assign('page', $page);
        return view('user_list',['data'=>$arr]);
    }
    //会员添加
    public function user_add()
    {
         if(request()->isGet()){
            return view('user_add');
        }
        if(request()->isPost()){
            $request = Request::instance();
            $data = $request->post();
            $user = new User_model();
            $result = $user->insertData($data);
            if ($result) {
                $this->success('添加成功', 'User/user_list');
            } else {
                $this->error('添加失败','User/user_add');
            }
        }
    }
    //会员等级列表
     public function userrank_list()
    {
        $user = new User_rank();
        $data = $user->select();
        foreach ($data as $key => $value) {
            $arr[] = $value->toArray();
        }
        return view('userrank_list',['data'=>$arr]);
    }
    //会员等级添加
    public function userrank_add()
    {
        if(request()->isGet()){
            return view('userrank_add');
        }
        if(request()->isPost()){
            $request = Request::instance();
            $data = $request->post();
            $user_rank = new User_rank;
            $result = $user_rank->insertData($data);
            if ($result) {
                $this->success('添加成功', 'User/userrank_list');
            } else {
                $this->error('添加失败','User/userrank_add');
            }
        }
    }
    //会员等级删除
    public function userrank_del(){
        $rank_id = Request::instance()->param('rank_id');
        $user_rank = new User_rank;
        $result = $user_rank->deleteData($rank_id);
        if($result){
            $this->success('删除成功','User/userrank_list');
        }else{
            $this->error('删除失败');
        }
    }
    //会员等级修改页面
    public function userrank_update(){
        $rank_id = Request::instance()->param('rank_id');
        $user_rank = new User_rank;
        $result = $user_rank->findData($rank_id);
        return view('userrank_update',['result' =>$result]);
    }
    //会员等级修改数据
    public function userrank_save(){
        $rank_id = input('post.rank_id');
        // echo $rank_id;die;
        $data    = input("post."); 
        $user_rank = new User_rank;
        $result = $user_rank->updateData($data,$rank_id);
        if($result){
            $this->success('修改成功','User/userrank_list');
        }else{
            $this->error('修改失败','User/userrank_update');
        }
    }
    //会员删除
    public function user_del(){
        $user_id = Request::instance()->param('user_id');
        $user_model = new User_model();
        $result = $user_model->deleteData($user_id);
        if($result){
            $this->success('删除成功','User/user_list');
        }else{
            $this->error('删除失败');
        }
    }
    //会员修改页面
    public function user_update(){
        $user_id = Request::instance()->param('user_id');
        $user_model = new User_model();
        $result = $user_model->findData($user_id);
        return view('user_update',['result' =>$result]);
    }
    //会员修改数据
    public function user_save(){
        $user_id = input('post.user_id');
        // echo $user_id;die;
        $data    = input("post."); 
        $user_model = new User_model();
        $result = $user_model->updateData($data,$user_id);
        if($result){
            $this->success('修改成功','User/user_list');
        }else{
            $this->error('修改失败','User/user_update');
        }
    }
}
