<?php
namespace app\admin\controller;

use app\admin\model\Admin;
use think\Session;

class Login extends \think\Controller
{
    public function login()
    {
        if(request()->isGet()){
            return $this->fetch('login');
        }
        if(request()->isPost()){
            $admin_email = input("post.admin_email");
            $admin_pwd   = md5(input("post.admin_pwd"));

            $admin_data = Admin::get(["admin_email" => "$admin_email","admin_pwd" => "$admin_pwd","admin_status"=>0])->toArray();
            $data = input("post.");
            $data['admin_pwd']  = md5($data['admin_pwd']);
            $admin_data = db('admin')->where($data)->where('admin_status',0)->find();
            if($admin_data){
                $admin = new Admin;
                 $admin->save([
                    'admin_last_login'  => time()
                ],['admin_id' => $admin_data['admin_id']]);
                Session::set('admin_id',$admin_data['admin_id']);
                Session::set('admin_name',$admin_data['admin_name']);
                getlog("管理员".$admin_data['admin_name']."登录了");
                $this->success('登录成功', 'Index/index');
            }else{
                $this->error('登录失败', 'Login/login');
            }
        }
    }
    public function login_out()
    {
        Session::delete('admin_id');
        Session::delete('admin_name');
        $this->success('退出成功', 'login');
    }
}