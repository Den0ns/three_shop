<?php
namespace app\admin\Controller;
use think\Controller;
use think\Request;   

class Advert extends Controller
{   
    // 广告列表
    public function advert_list()
    {
        return view('advert_list');
    }
    //广告添加
    public function advert_add()
    {
        return view('advert_add');
    }

}
