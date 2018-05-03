<?php 

namespace app\admin\model;

use think\Db;
use think\Model;
class User_model extends Model{
	protected $table = 'user';

function insertData($data){
		return Db::table($this->table)->insertGetId($data);
	}
	function deleteData($user_id){
		return Db::table($this->table)->where("user_id=$user_id")->delete();
	}
	function findData($user_id){
		return Db::table($this->table)->where("user_id=$user_id")->find();
	}
	function updateData($data,$user_id){
		return Db::table($this->table)->where("user_id=$user_id")->update($data);
	}
}
?>