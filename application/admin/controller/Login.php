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
            $admin_email = input("post.email");
            $admin_pwd   = md5(input("post.Password"));

            $admin_data = Admin::get(["admin_email" => "$admin_email","admin_pwd" => "$admin_pwd"])->toArray();
            if($admin_data){
                Session::set('admin_id',$admin_data['admin_id']);
                Session::set('admin_name',$admin_data['admin_name']);
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