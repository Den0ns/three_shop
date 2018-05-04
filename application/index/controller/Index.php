<?php
namespace app\index\controller;
use think\Controller;
use think\Request;

class Index extends Controller
{	
	//主页
    public function index()
    {	
    	
        return view('index');
    }
}
