<?php
namespace app\index\controller;
use think\Controller;
use think\Request;

class Member extends Controller
{	
	//个人中心首页
    public function member()
    {
        return view('member');
    }

    //我的订单
    public function member_order()
    {
        return view('member_order');
    }
    //收货地址
    public function member_address()
    {
        return view('member_address');
    }
    //用户信息
    public function member_user()
    {
        return view('member_user');
    }
    //账户安全
    public function member_safe()
    {
    	return view('member_safe');
    }
    //资金管理 
    public function member_money()
    {
    	return view('member_money');
    }
    // 申请提现
    public function member_cash()
    {
    	return view('member_cash');
    }	
    // 充值
    public function membermoney_charge()
    {
    	return view('membermoney_charge');
    }
    //充值成功后页面
    public function membermoney_pay()
    {
    	return view('membermoney_pay');
    }
}
