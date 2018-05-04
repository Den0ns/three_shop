<?php
namespace app\admin\Controller;
use think\Controller;
use think\Request;
use app\admin\model\Node;

class Privilege extends Common
{
    //管理员列表
    public function Privilege_list()
    {
        $arr = db('admin')->select();

        $db = new Node;
        foreach ($arr as $key => $val) {
            // var_dump($val['admin_id']);
            $role_name = $db->getRoleName($val['admin_id']);
            $roleList = array();
            foreach ($role_name as $k => $v) {
                $roleList[] = $v['role_name'];
            }
            $arr[$key]['role_name'] = implode(',',$roleList);
        }
        return $this->fetch('privilege_list',['index' => $arr]);

    }
    // 管理员删除
    public function delete($admin_id){
       $db = db('admin');
        $del=$db->where('admin_id',"$admin_id")->delete();
        //var_dump($del);
        $this->redirect('privilege_list');
    }
    //管理员添加
    public function Privilege_add()
    {
        if(request()->isGet()){
            $role_name = db('role')->select();
            return view('Privilege_add',['role'=>$role_name]);
        }        
        if(request()->isPost()){
            $data=input('post.');
            $role_id = $data['role_id'];
            $data['admin_pwd'] = md5($data['admin_pwd']);
            $data['admin_addtime'] = time();         
            unset($data['role_id']);
            $dataList = array();
            $admin_id=Db('admin')->insertGetId($data);
            if($admin_id){
                foreach ($role_id as $key => $val) {
                    $dataList[] = array('admin_id'=>$admin_id,'role_id'=>$val);
                }   

                if(db('admin_role')->insertALL($dataList)){
                    $this->success('添加成功并赋权限','Privilege/privilege_list');
                }else{
                    getlog("添加了".$data['admin_name']."管理员");
                    $this->success('添加成功，没有赋权限','Privilege/
                        privilege_list');
                }                
                // $this->success('添加成功','Privilege/privilege_list');
            }else{
                $this->error('添加失败');
            }
        }
    }

    // 管理员修改1
    public function Privilege_update()
    {
        $admin_id=input('get.id');
        $data=Db('admin')->where('admin_id',$admin_id)->find();
        return $this->fetch('privilege_update',['data'=>$data]);

    }
    // 管理员修改2
    public function privilege_updates(){
        $admin_id = input('get.admin_id');
        $data     = input("post.");
        $data['admin_pwd'] = md5($data['admin_pwd']);

        $res=Db('admin')->where('admin_id',"$admin_id")->update($data);
        // return Db('admin')->getLastSql();            
        if($res){
            getlog("修改了".$data['admin_name']."管理员");
            $this->success('修改成功',url('Privilege/privilege_list'));
        }else{
             $this->error('修改失败',url('Privilege/Privilege_update'));
        }     
    }
    //管理员日志
    public function Privilege_log()
    {
        $data = db("admin_log")->select();
        foreach ($data as $k => $v) {
            $data[$k]['admin_name'] = db('admin')->where("admin_id",$v['admin_id'])->value('admin_name');

        }    
        return view('Privilege_log',['data'=>$data]);
    }
    //角色列表
    public function role_list()
    {   
        $role = db("role")->select();
        // var_dump($role);die;
        $node = db("node")->field("node_name")->select();
        // var_dump($node);
        // $nodeList1 = array();
        // foreach ($node as $k => $v) {
        //     $nodeList1[] = $v['node_name'];
        // }
        sort($node);
        $db = new Node;        
        foreach($role as $key => $val) {
            $nodeList = [];
            $node_i = $db->getRole($val['role_id']);
            sort($node_i);                    
            if($node_i == $node){
                $role[$key]['node_name'] = "<span style='color:red'>所有权限</span>";
            }else{
                foreach ($node_i as $k => $v) {
                    $nodeList[] = $v['node_name'];
                }
                $node_i = implode(',',$nodeList);              
                $role[$key]['node_name'] = $node_i;
            }
        }
        return view('role_list',['role'=>$role]);
    }
    //角色添加
    public function role_add()
    {  

        if(request()->isGet()){
                $node = Db("Node")->select();
                $arr = array();
                foreach ($node as $key => $val) {
                    if($val['node_pid'] == 0){
                        foreach ($node as $k => $v) {
                            if($v['node_pid'] == $val['node_id']){
                                $val['son'][] = $v;
                            }
                        }
                        $arr[] = $val;
                    }
                }
                return view('role_add',['node'=>$arr]);
        }
         if(request()->isPost()){
            $data=input('post.');
            $node_id = $data['node_id'];
            unset($data['node_id']);
            // $res=Db('role')->insert($data);
            $role_id = DB('role')->insertGetId($data);
            $dataList = array();
            if($role_id){
                foreach ($node_id as $key => $val) {
                    $dataList[] = array("role_id"=>$role_id,"node_id"=>$val);
                }

                if(db('role_node')->insertALL($dataList)){
                    $this->success('添加成功并赋权限','Privilege/role_list');
                }else{
                    $this->success('添加成功，没有赋权限','Privilege/role_list');
                }
            }else{
                $this->error('添加失败');
            }
        }

    }


    //权限列表
    public function node_list()
    {
        $db = new Node;
        $node = $db->getnodeorder();
        return view('node_list',['node'=>$node]);    
    }
    //权限添加
    public function node_add()
    {

        if(request()->isGet()){
                $db = new Node;
                $node = $db->getnodeorder();
                return view('node_add',['node'=>$node]);            
        }
        if(request()->isPost()){
                $data=input('post.');
            //var_dump($data);die;
            $res=Db('node')->insert($data);
             if($data){
                $this->success('添加成功','Privilege/node_list');
             }else{
                $this->error('添加失败');
             }
        }      
    }
    // 角色赋权限
    public function role_node($role_id=''){
        if(request()->isGet()){
            $node = db('node')->select();
            $role = db("role")->where('role_id',$role_id)->find();
            $node_i = db("role_node")->where('role_id',$role_id)->column('node_id');
            // var_dump($role);die;
            foreach ($node as $key => $val) {
                    if(in_array($val['node_id'],$node_i)){
                        $node[$key]['checked'] = 1;
                    }else{
                        $node[$key]['checked'] = 0;
                    }
                }
            $arr = array();
            foreach ($node as $key => $val) {
                if($val['node_pid'] == 0){
                    foreach ($node as $k => $v) {
                        if($v['node_pid'] == $val['node_id']){
                            $val['son'][] = $v;
                        }                       
                    }
                    $arr[] = $val;                 
                }
            }
            return view('role_node',['node'=>$arr,'role'=>$role]);
        }
        if(request()->isPost()){
            $data = input('post.');
            $node_id = $data['node_id'];
            // var_dump($node_id);die;
            $role_id = input('post.role_id');
            // echo "<pre>";
            // var_dump($node_id);
            // echo "</pre>";
            //     die;
            $node_i = db("role_node")->where('role_id',$role_id)->column('node_id');
            if(!empty($node_i)){
                $res = Db('role_node')->where('role_id',$role_id)->delete();
            }
             foreach ($node_id as $key => $val) {
                    $dataList[] = array("role_id"=>$role_id,"node_id"=>$val);
                }
            // echo "<pre>";
            // var_dump($dataList);
            // echo "</pre>";
            //     die;
            $qwe =  Db("Role_node")->insertAll($dataList);
           if($qwe){
                $this->success('添加成功','Privilege/role_list');
            }else{
                $this->error('添加失败','Privilege/role_node');
            }               
            
        }
    }
    
}
