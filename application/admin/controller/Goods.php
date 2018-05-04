<?php
namespace app\admin\Controller;
use think\Controller;
use think\Request;   

class Goods extends Common
{
    public function goods_list()
    {
        return view('goods_list');
    }
    
    public function goods_add()
    {
        return view('goods_add');
    }

     public function goods_edit()
    {
        return view('goods_edit');
    }
}
