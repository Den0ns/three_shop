<?php 
namespace app\admin\model;

use think\Model;

class Brand extends Model
{
	protected $resultSetType = 'collection';

	public function select_brand()
	{
		return $this->select()->toArray();
	}
	public function find_brand($brand_id)
	{
		return $this->get($brand_id)->toArray();
	}
}