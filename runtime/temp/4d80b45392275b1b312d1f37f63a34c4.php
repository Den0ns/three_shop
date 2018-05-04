<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\phpStudy\WWW\PHPNO.13\shop\public/../application/index\view\login\regist.html";i:1525439210;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link type="text/css" rel="stylesheet" href="/static/index/css/style.css" />
    <!--[if IE 6]>
    <script src="/static/index/js/iepng.js" type="text/javascript"></script>
        <script type="text/javascript">
           EvPNG.fix('div, ul, img, li, input, a'); 
        </script>
    <![endif]-->    
    <script type="text/javascript" src="/static/index/js/jquery-1.11.1.min_044d0927.js"></script>
	<script type="text/javascript" src="/static/index/js/jquery.bxslider_e88acd1b.js"></script>
    
    <script type="text/javascript" src="/static/index/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/static/index/js/menu.js"></script>    
        
	<script type="text/javascript" src="/static/index/js/select.js"></script>
    
	<script type="text/javascript" src="/static/index/js/lrscroll.js"></script>
    
    <script type="text/javascript" src="/static/index/js/iban.js"></script>
    <script type="text/javascript" src="/static/index/js/fban.js"></script>
    <script type="text/javascript" src="/static/index/js/f_ban.js"></script>
    <script type="text/javascript" src="/static/index/js/mban.js"></script>
    <script type="text/javascript" src="/static/index/js/bban.js"></script>
    <script type="text/javascript" src="/static/index/js/hban.js"></script>
    <script type="text/javascript" src="/static/index/js/tban.js"></script>
    <script type="text/javascript" src="/static/index/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="/static/index/js/lrscroll_1.js"></script>
      
    
<title>尤洪</title>
</head>
<body>   
<!--Begin Login Begin-->
<div class="log_bg">	
    <div class="top">
        <div class="logo"><img src="/static/index/images/logo.png" /></div>
    </div>
	<div class="regist">
    	<div class="log_img"><img src="/static/index/images/l_img.png" width="611" height="425" /></div>
		<div class="reg_c">
        	<form>
            <table border="0" style="width:420px; font-size:14px; margin-top:20px;" cellspacing="0" cellpadding="0">
              <tr height="50" valign="top">
              	<td width="95">&nbsp;</td>
                <td>
                	<span class="fl" style="font-size:24px;">注册</span>
                    <span class="fr">已有商城账号，<a href="<?php echo url('Login/login'); ?>" style="color:#ff4e00;">我要登录</a></span>
                </td>
              </tr>
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;用户名 &nbsp;</td>
                <td><input type="text" name="user_name"  class="l_user" /></td>
              </tr>
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;密码 &nbsp;</td>
                <td><input type="password" name="user_pwd" class="l_pwd" /></td>
              </tr>
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;确认密码 &nbsp;</td>
                <td><input type="password" name="user_repwd"  class="l_pwd" /></td>
              </tr>
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;邮箱 &nbsp;</td>
                <td><input type="text"  name="email" class="l_email" /></td>
              </tr>
              <!-- <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;验证码 &nbsp;</td>
                <td>
                    <input type="text" name="code" value="" class="l_ipt" />
                    <a href="#" style="font-size:12px; font-family:'宋体';">换一张</a>
                    
                </td>
              </tr> -->
              <tr>
              	<td>&nbsp;</td>
                <td style="font-size:12px; padding-top:20px;">
                	<span style="font-family:'宋体';" class="fl">
                    	<label class="r_rad"><input type="checkbox"  class="xieyi" value="1" /></label><label class="r_txt">我已阅读并接受<a href="xieyi.html">《用户协议》</a></label>
                    </span>
                </td>
              </tr>
              <tr height="60">
              	<td>&nbsp;</td>
                <td><a href="javascript:;" class="log_btn">立即注册</a></td>
              </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<!--End Login End--> 
<script type="text/javascript">
 $(function(){  
      var validate = {
        "checkAccount":false,
        "checkPwd":false,
        "checkRepwd":false,
        "checkemail":false,       
      };
      //验证账号
      $("input[name='user_name']").blur(function(){
          //移除
          $(this).next().remove();
          //非空验证
          var user_name = $(this).val();
          if(user_name==""){
            $(this).after("<span class='error'>用户名不能为空</span>");
            validate.checkAccount =  false;
            return false;
          }
          //判断正则
          var reg=/^[a-z1-9]{6,15}$/;
          if(!reg.test(user_name)){
            $(this).after("<span class='error'>用户名必须是数字加小写字母且长度不小于6</span>");
            validate.checkAccount =  false;
            return false;
          }else{
             //验证唯一性
               var user_name = $(this).val();
               var obj = $(this);
               //验证唯一性
               $.ajax({
                 type:"post",
                 async:false,
                 url:"<?php echo url('Login/check_name'); ?>",
                 data:{
                   "user_name":user_name
                 },
                 dataType:"json",
                 success:function(data){
                   if(data.status == 1){
                     obj.after("<span class='error'>用户名已存在</span>");
                     validate.checkAccount =  false;
                   }else if(data.status == 0){
                    validate.checkAccount =  true;
                     obj.after("<span ></span>");
                   }
                 }
              });    
          }
       });


      //验证密码 
      $("input[name='user_pwd']").blur(function(){
          //移除
          $(this).next().remove();
          //非空验证
          var user_pwd = $(this).val();
          if(user_pwd==""){
            $(this).after("<span class='error'>密码不能为空</span>");
            validate.checkPwd =  false;
            return false;
          }
          //判断正则
          var reg=/^[a-z1-9]{6,15}$/;
          if(!reg.test(user_pwd)){
            $(this).after("<span class='error'>密码必须是数字加小写字母且长度不小于6</span>");
            validate.checkPwd =  false;

            return false;
          }else{
            validate.checkPwd =  true;
            $(this).after("<span ></span>");
            
          }
          

      });

      //判断密码是否一致
      $("input[name='user_repwd']").blur(function(){
          //移除
          $(this).next().remove();
          //非空验证
          var user_pwd = $("input[name='user_pwd']").val();
          var user_repwd = $(this).val();
          if(user_repwd == ""){
            validate.checkRepwd =  false;
             $(this).after("<span class='error'>确认密码不能为空</span>");
              return false;
          }
          if(user_repwd !== user_pwd){
            validate.checkRepwd =  false;
            $(this).after("<span class='error'>两次输入的密码不一致</span>");
            return false;
          }else{
            validate.checkRepwd =  true;
            $(this).after("<span ></span>");
          }
          
      });
      
      //判断邮箱
      $("input[name='email']").blur(function(){
          //移除
          $(this).next().remove();
          //非空验证
          var email = $(this).val();
          if(email == ""){
             $(this).after("<span class='error'>邮箱不能为空</span>");
             validate.checkemail =  false;
              return false;
          }
          var reg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
          if(!reg.test(email)){
            $(this).after("<span class='error'>邮箱格式不正确</span>");
            validate.checkemail =  false;
            return false;
          }else{
            $(this).after("<span ></span>");
            validate.checkemail =  true;
          }
          
      });

      //提交
      $(".log_btn").click(function(){
        $("input[name='user_name']").trigger("blur");
        $("input[name='user_pwd']").trigger("blur");
        $("input[name='user_repwd']").trigger("blur");
        $("input[name='email']").trigger("blur");
        var xieyi = $(".xieyi:checked").val();
        if(xieyi){
            var submit = validate.checkAccount&&validate.checkPwd&&validate.checkRepwd&&validate.checkemail;
            if(submit){
               var user_name = $("input[name='user_name']").val();
                var user_pwd = $("input[name='user_pwd']").val();
                var email = $("input[name='email']").val();
                $.ajax({
                    type:"post",
                    url:"<?php echo url('Login/regist'); ?>",
                    data:{
                        "user_name":user_name,
                        "user_pwd": user_pwd,
                        "email":email
                    },
                    dataType:"json",
                    success:function(data){
                        if(data.status == 1){
                           location.href="<?php echo url('Index/index'); ?>"
                        }
                    }
                });

            }         
        }else{
          return false;
        }
        
        
      });


 });


</script>


<!--Begin Footer Begin-->
<div class="btmbg">
    <div class="btm">
        备案/许可证编号：蜀ICP备12009302号-1-www.dingguagua.com   Copyright © 2015-2018 尤洪商城网 All Rights Reserved. 复制必究 , Technical Support: Dgg Group <br />
        <img src="/static/index/images/b_1.gif" width="98" height="33" /><img src="/static/index/images/b_2.gif" width="98" height="33" /><img src="/static/index/images/b_3.gif" width="98" height="33" /><img src="/static/index/images/b_4.gif" width="98" height="33" /><img src="/static/index/images/b_5.gif" width="98" height="33" /><img src="/static/index/images/b_6.gif" width="98" height="33" />
    </div>    	
</div>
<!--End Footer End -->    

</body>


<!--[if IE 6]>
<script src="//letskillie6.googlecode.com/svn/trunk/2/zh_CN.js"></script>
<![endif]-->
</html>
