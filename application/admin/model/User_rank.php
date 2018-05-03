<?php 
namespace app\admin\model;

use think\Db;
use think\Model;


class User_rank extends Model{
	protected $table = 'user_rank';


	function insertData($data){
		return Db::table($this->table)->insertGetId($data);
	}
	function deleteData($rank_id){
		return Db::table($this->table)->where("rank_id=$rank_id")->delete();
	}
	function findData($rank_id){
		return Db::table($this->table)->where("rank_id=$rank_id")->find();
	}
	function updateData($data,$rank_id){
		return Db::table($this->table)->where("rank_id=$rank_id")->update($data);
	}
}
?>
