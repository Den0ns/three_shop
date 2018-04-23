<?php
namespace app\admin\Controller;
use think\Controller;
use think\Request;   

class User extends Controller
{   
    //会员列表
    public function user_list()
    {
        return view('user_list');
    }
    //会员添加
    public function user_add()
    {
        return view('user_add');
    }
    //会员等级列表
     public function userrank_list()
    {
        return view('userrank_list');
    }
    //会员等级添加
     public function userrank_add()
    {
        return view('userrank_add');
    }
}
