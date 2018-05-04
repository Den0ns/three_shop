<?php
namespace app\admin\Controller;
use think\Controller;
use think\Request;   

class Attribute extends Common
{
    public function attribute_list()
    {
        return view('attribute_list');
    }
    
    public function attribute_add()
    {
        return view('attribute_add');
    }

     public function attribute_edit()
    {
        return view('attribute_edit');
    }
}
