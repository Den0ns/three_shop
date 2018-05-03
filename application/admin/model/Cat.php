<?php 
namespace app\admin\model;

use think\Model;

class Cat extends Model
{
	protected $resultSetType = 'collection';

	public function find_cat($cat_id)
	{
		return $this->get($cat_id)->toArray();
	}
	public function select_cat()
	{
		return $this->select()->toArray();
	}
}