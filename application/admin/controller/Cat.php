<?php
namespace app\admin\Controller;
use think\Controller;
use think\Request;   

class Cat extends Common
{   
    //商品分类列表
    public function cat_list()
    {
        return view('cat_list');
    }
    //商品分类添加
    public function cat_add()
    {
        return view('cat_add');
    }
    //商品分类 编辑
    public function cat_edit()
    {
        return view('cat_edit');
    }
}
