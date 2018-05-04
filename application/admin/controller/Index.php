<?php
namespace app\admin\Controller;
use think\Controller;
use think\Request;
use app\admin\Common;

class Index extends Common
{
    public function index()
    {
        return view('index');
    }
    public function main()
    {
    	return view('main');
    }
    public function top()
    {
    	return view('top');
    }
    public function menu()
    {
    	return view('menu');
    }
    public function drag()
    {
        return view('drag');
    }
}
