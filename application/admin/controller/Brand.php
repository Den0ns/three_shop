<?php
namespace app\admin\Controller;
use think\Controller;
use think\Request;   

class Brand extends Common
{
    public function brand_list()
    {
        return view('brand_list');
    }
    
    public function brand_add()
    {
        return view('brand_add');
    }

     public function brand_edit()
    {
        return view('brand_edit');
    }
}
