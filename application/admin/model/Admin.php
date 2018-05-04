<?php 
namespace app\admin\model;

use think\Model;

class Admin extends Model
{
	protected $resultSetType = 'collection';

	public function getRoleName($admin_id){
		return db('admin_role')
			->alias('a')
			->join('role','a.role_id=role.role_id')
			->where('admin_id',"$admin_id")
			->select();
	}
}