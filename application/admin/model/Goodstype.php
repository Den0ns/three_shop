<?php 
namespace app\admin\model;

use think\Model;

class Goodstype extends Model
{
	protected $resultSetType = 'collection';

	public function select_goodstype()
	{
		return $this->select()->toArray();
	}
	public function find_goodstype($type_id)
	{
		return $this->get($type_id)->toArray();
	}
}