<?php
namespace app\index\controller;
use think\Controller;
use think\Request;

class Buycar extends Controller
{	
	//购物车1
    public function buycar()
    {
        return view('buycar');
    }
    //购物车2
     public function buycar_two()
    {
        return view('buycar_two');
    }
    //购物车3
     public function buycar_three()
    {
        return view('buycar_three');
    }
    //商品详情
     public function product()
    {
        return view('product');
    }

}
