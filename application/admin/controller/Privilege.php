<?php
namespace app\admin\Controller;
use think\Request;   
use app\admin\Controller\Common;
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
        $node = db("node")->field("node_name")->select();
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
            $role_id = input('post.role_id');
            $node_i = db("role_node")->where('role_id',$role_id)->column('node_id');
            if(!empty($node_i)){
                $res = Db('role_node')->where('role_id',$role_id)->delete();
            }
             foreach ($node_id as $key => $val) {
                    $dataList[] = array("role_id"=>$role_id,"node_id"=>$val);
                }
            $qwe =  Db("Role_node")->insertAll($dataList);
           if($qwe){
                $this->success('添加成功','Privilege/role_list');
            }else{
                $this->error('添加失败','Privilege/role_node');
            }               
            
        }
    }
    
}

// 商品添加    Goods   goods_add   0-1 1   1
// 商品管理    Goods       0   1   0
// 商品分类    Goods   cat_list    0-1 1   1
// 商品属性    Attribute   attribute_list  0-1 1   1
// 商品品牌    Brand   brand_list  0-1 1   1
// 商品类型    Goodstype   goodstype_list  0-1 1   1
// 订单管理    Order       0   1   0
// 发货单列表   Order   order_shopping  0-7 1   7
// 退货单列表   Order   order_return    0-7 1   7
// 订单列表    Order   order_list  0-7 1   7
// 广告管理    Advert      0   1   0
// 广告列表    Advert  advert_list 0-11    1   11
// 会员管理    User        0   1   0
// 会员列表    User    user_list   0-13    1   13
// 添加会员    User    user_add    0-13    1   13
// 会员等级    User    userrank_list   0-13    1   13
// 权限管理    Privilege       0   1   0
// 管理员列表   Privilege   privilege_list  0-17    1   17
// 管理员日志   Privilege   privilege_log   0-17    1   17
// 角色管理    Privilege   role_list   0-17    1   17
// 权限列表    Privilege   node_list   0-17    1   17
// 支付管理    Payment     0   1   0
// 支付列表    Payment payment_list    0-22    1   22
