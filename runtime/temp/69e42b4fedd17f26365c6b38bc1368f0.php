<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"D:\phpStudy\WWW\three_shop\public/../application/index\view\login\login.html";i:1524822505;}*/ ?>
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
        <div class="logo"><a href="#"><img src="/static/index/images/logo.png" /></a></div>
    </div>
	<div class="login">
    	<div class="log_img"><img src="/static/index/images/l_img.png" width="611" height="425" /></div>
		<div class="log_c">
        	<form>
            <table border="0" style="width:370px; font-size:14px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr height="50" valign="top">
              	<td width="55">&nbsp;</td>
                <td>
                	<span class="fl" style="font-size:24px;">登录</span>
                    <span class="fr">还没有商城账号，<a href="<?php echo url('Login/regist'); ?>" style="color:#ff4e00;">立即注册</a></span>
                </td>
              </tr>
              <tr height="70">
                <td>用户名</td>
                <td><input type="text" name="user_name" class="l_user" /></td>
              </tr>
              <tr height="70">
                <td>密&nbsp; &nbsp; 码</td>
                <td><input type="password" name="user_pwd" class="l_pwd" /></td>
              </tr>
              <tr>
              	<td>&nbsp;</td>
                <td style="font-size:12px; padding-top:20px;">
                	<span style="font-family:'宋体';" class="fl">
                    	<label class="r_rad"><input type="checkbox" name="checkbox" value="1" /></label><label class="r_txt">请保存我这次的登录信息</label>
                    </span>
                    <span class="fr"><a href="#" style="color:#ff4e00;">忘记密码</a></span>
                </td>
              </tr>
              <tr height="60">
              	<td>&nbsp;</td>
                <td><a href="javascript:;" class="log_btn">登录</a></td>
              </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<!--End Login End--> 
<!--Begin Footer Begin-->
<div class="btmbg">
    <div class="btm">
        备案/许可证编号：蜀ICP备12009302号-1-www.dingguagua.com   Copyright © 2015-2018 尤洪商城网 All Rights Reserved. 复制必究 , Technical Support: Dgg Group <br />
        <img src="/static/index/images/b_1.gif" width="98" height="33" /><img src="/static/index/images/b_2.gif" width="98" height="33" /><img src="/static/index/images/b_3.gif" width="98" height="33" /><img src="/static/index/images/b_4.gif" width="98" height="33" /><img src="/static/index/images/b_5.gif" width="98" height="33" /><img src="/static/index/images/b_6.gif" width="98" height="33" />
    </div>    	
</div>
<!--End Footer End -->    

</body>
<script type="text/javascript">
  $(function(){

      var validate = {
        "checkAccount":false,
        "checkPwd":false,       
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
            validate.checkAccount =  true; 
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
          }else{
            validate.checkPwd =  true;
            $(this).after("<span ></span>");            
          }       
      });

      $(".log_btn").click(function(){
        $("input[name='user_name']").trigger("blur");
        $("input[name='user_pwd']").trigger("blur");
          var submit = validate.checkAccount&&validate.checkPwd;
            if(submit){
               var user_name = $("input[name='user_name']").val();
                var user_pwd = $("input[name='user_pwd']").val();
                var checkbox = $("input[name='checkbox']:checked").val();
                $.ajax({
                    type:"post",
                    url:"<?php echo url('Login/login'); ?>",
                    data:{
                        "user_name":user_name,
                        "user_pwd": user_pwd,
                        "checkbox":checkbox
                    },
                    dataType:"json",
                    success:function(data){
                        if(data.status == 1){
                           location.href="<?php echo url('Index/index'); ?>";
                        }else if(data.status == 0){
                            alert("账号或者密码不正确，请稍后尝试。。。")
                        }
                    }
                });

            }else{
          return false;
        }

      });



  });

</script>

<!--[if IE 6]>
<script src="//letskillie6.googlecode.com/svn/trunk/2/zh_CN.js"></script>
<![endif]-->
</html>
