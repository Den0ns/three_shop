<?php
namespace app\admin\Controller;
use think\Controller;
use think\Request;   
use app\admin\model\Node;

class Common extends Controller
{ 
	public function __construct(){
		parent::__construct();
		$session=session("admin_id");
       if(empty($session)){
       		$this->error("请先登录",'Login/login');
       		exit;
       }
       if(!$this->checkNode()){
       		$this->error('对不起，你没有权限访问','Index/index');
       }

	}
	// 权限检测
	public function checkNode(){
    		$admin_id = session('admin_id');
        // var_dump($admin_id);die;
    		$admin_name = session('admin_name');
    		// 获取当前控制器
    		$controller = request()->controller();
    		// 获取当前方法
        $action = request()->action();
        // 获取当前的路径
        $assess = $controller."/".$action;
        //首页免检测权限
        if(in_array($controller,config('COMMON_CONTROLLER'))){
            return true;
        }
        //CEO免检测权限
        if(in_array($admin_id,config('SUPERADMIN'))){
            return true;
        }
        // 检测是不是公共的方法
        if(in_array($assess,config('COMMON_ACTION'))){
            return true;
        }
    		$db = new Node;
    		$arr = array();
    		// 获取管理员自己的权限
    		$mynode = $db->getMynode($admin_id);
    		foreach ($mynode as $key => $val){
              $arr[] = $val['node_controller']."/".$val['node_action'];
            }
          return in_array($assess,$arr);

        }
} 