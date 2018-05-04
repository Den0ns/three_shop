<?php
namespace app\index\controller;
use think\Controller;
use think\Request;

class Brand extends Controller
{	
	//商品品牌
    public function brand()
    {
        return view('brand');
    }
    //商品品牌的商品
    public function brand_list()
    {
    	return view('brand_list');
    }
}
