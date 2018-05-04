<?php
namespace app\admin\Controller;
use think\Controller;
use think\Request;


class Common extends Controller
{   
	public function __construct()
	{
		parent::__construct();
	}

	function getflag($data,$pid=0,$flag=1,$field)
	{
		global $arr;
		foreach ($data as $key => $value) {
			if($value['parent_id']==$pid){
				$value['flag']=$flag;
				$arr[] = $value;
				$this->getflag($data,$value[$field],$flag+1,$field);
			}
		}
		return $arr;
	}
}