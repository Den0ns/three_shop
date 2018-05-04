<?php
namespace app\admin\Controller;
use think\Controller;
use think\Request;   
use app\admin\Common;

class Order extends Common
{	
	//订单列表
    public function order_list()
    {
        return view('order_list');
    }
    //订单查看
     public function order_edit()
    {
        return view('order_edit');
    }
    //发货单列表
    public function order_shopping(){
    	return view('order_shopping');
    }
    //退货单列表
    public function order_return(){
    	return view('order_return');
    }
}
