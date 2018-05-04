<?php
namespace app\admin\Controller; 
use think\Controller;
use think\Request;
use app\admin\model\Node;

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
        $admin_id = session('admin_id');
        $admin_name = session('admin_name');
        $db = new Node;
        if(in_array($admin_name,config('SUPERADMIN'))){
           $mynode =  $db->getnodeorder();
        }else{
           $mynode = $db->getMynode($admin_id);
        }
        foreach ($mynode as $key => $val) {
        $mynode[$key]['url'] = $val['node_controller']."/".$val['node_action'];
        }  
        $arr = array();
        foreach ($mynode as $key => $val) {
                    if($val['node_pid'] == 0){
                        foreach ($mynode as $k => $v) {
                            if($v['node_pid'] == $val['node_id']){
                                $val['son'][] = $v;
                            }
                        }
                        $arr[] = $val;
                    }
                }

    	return view('menu',['munu'=>$arr]);
    }
    public function drag()
    {
        return view('drag');
    }
}
