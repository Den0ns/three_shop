<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Session;
use app\index\model\User;
class Login extends Controller
{	  
   
	//登录
    public function login()
    {
        if(request()->isGet()){
            return view('login');
        }

        if(request()->isAjax()){
            $data = input('post.');
            $data['user_pwd'] = md5($data['user_pwd']);
            $checkbox = input("post.checkbox");
            unset($data['checkbox']);
            // $user = User::get($data)->toArray();
            $last_login = time();
            $user = db("user")->where($data)->find();
            // $user = array("user_id"=>$user_id,"user_name"=>$data['user_name']);           
            $time=empty($checkbox)?0:3600*24*7;
            if($user){
                $user_id = $user['user_id'];
                db("user")->where("user_id",$user_id)->update(['last_login'=>$last_login]);
                session("user",$user);
                cookie("user",$user,$time);
                $dataList['status'] = 1;
            }else{
                $dataList['status'] = 0;
            }
           echo json_encode($dataList);   

        }
    }
    //注册
    public function regist()
    {     

        if(request()->isGet()){
            return view('regist');
        }
        if(request()->isAjax()){
            $data = input('post.');
            $data['user_pwd'] = md5($data['user_pwd']);
            $data['reg_time'] = time();
            $data['last_login'] = time();
            $res = db("user")->insert($data);           
            if($res){
                $user_id = db("user")->getLastInsID();
                $user = array("user_id"=>$user_id,"user_name"=>$data['user_name']);
                session('user',$user);
                cookie('user',$user);
                $data['status'] = 1;
            }else{
                $data['status'] = 0;
            }
            echo json_encode($data);
        }
    }
     //用户协议
    public function xieyi()
    {
        return view('xieyi');
    }

    // 验证唯一性
    public function check_name()
    {
        $user_name = input('post.user_name');
        $res = db('user')->where('user_name',$user_name)->value("user_name");
        if($res){
            $data['status'] = 1;
        }else{
            $data['status'] = 0;
        }

        echo json_encode($data);
    }
    //退出
    public function login_out(){
            cookie('user',null);
            session('user',null);
            //退出后重定向回登录界面
            $this->redirect('Login/login');
        }

}
