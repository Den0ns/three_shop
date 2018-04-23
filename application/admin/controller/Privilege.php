<?php
namespace app\admin\Controller;
use think\Controller;
use think\Request;   

class Privilege extends Controller
{
    //管理员列表
    public function Privilege_list()
    {
        return view('Privilege_list');
    }
    //管理员添加
    public function Privilege_add()
    {
        return view('Privilege_add');
    }
     //管理员日志
    public function Privilege_log()
    {
        return view('Privilege_log');
    }
    //角色管理
    public function role_list()
    {
        return view('role_list');
    }
    //角色添加
    public function role_add()
    {
        return view('role_add');
    }
    //权限列表
    public function node_list()
    {
        return view('node_list');
    }
    //权限添加
    public function node_add()
    {
        return view('node_add');
    }
}
