<?php
namespace app\admin\Controller;
use think\Controller;
use think\Request;   
use think\Db;
use app\admin\Common;
class Payment extends Common
{
	public function payment_add()
	{
		if(request::instance()->isGet()){ 
            return view('payment_add');
        }

        if(request::instance()->isPost())
        {
        	$post = input('post.');
        	$pay_insert = Db::table('payment')->insert($post);
        	
        	if($pay_insert)
        	{
        		$this->redirect('payment_list');
        	}else{
        		$this->redirect('payment_add');
        	}
        }
		
	}

	public function payment_list()
	{
		$pay_sel = Db::table('payment')->order('pay_order','desc')->select();
		$this->assign('pay_sel',$pay_sel);
		return view('payment_list');
	}
	public function payment_del(){
		   $pay_id = $_GET['pay_id'];//获取支付id 
		   $res = Db::table('payment')->where("pay_id= $pay_id")->delete();  
		   if($res){  
		      echo 1;  
		   }else{  
		      echo 2;
		      }
		      echo json_encode($pay_id);
	}

}