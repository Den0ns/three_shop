<?php
namespace app\admin\Controller;
use think\Controller;
use think\Request;   

class Goodstype extends Controller
{
    public function goodstype_list()
    {
        return view('goods_type_list');
    }
    
    public function goodstype_add()
    {
        return view('goods_type_add');
    }

     public function goodstype_edit()
    {
        return view('goods_type_edit');
    }
}
