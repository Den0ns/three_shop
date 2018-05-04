<?php 
namespace app\admin\model;

use think\Model;
use think\Db; 
class Node extends Model
{
	protected $resultSetType = 'collection';

	public function getnodeorder(){
		// 重点
		$sql = "select *,concat(node_path,'-',node_id) as path from node order by path";
		return $this->query($sql);
	}
	public function getRole($role_id){
		return db('role_node')
			->alias('a')
			->join('node','a.node_id=node.node_id')
			->where('role_id',"$role_id")
			->field('node_name')
			->select();
	}

	public function getRoleName($admin_id){
		return db('admin_role')
			->alias('a')
			->join('role','a.role_id=role.role_id')
			->where('admin_id',"$admin_id")
			->field('role_name')
			->select();
	}

	public function getMynode($admin_id){
		 $sql="select *,concat(node_path,'-',node_id) as path from node where node_id in(select node_id from admin_role as a left join role_node as b on b.role_id=a.role_id where admin_id=$admin_id) order by path";
        return  Db::query($sql);
	}
}