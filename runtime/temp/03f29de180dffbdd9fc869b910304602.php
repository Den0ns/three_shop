<?php if (!defined('THINK_PATH')) exit(); /*a:8:{s:90:"D:\phpStudy\WWW\three_shop\public/../application/index\view\member\membermoney_charge.html";i:1524657723;s:66:"D:\phpStudy\WWW\three_shop\application\index\view\public\city.html";i:1524654124;s:65:"D:\phpStudy\WWW\three_shop\application\index\view\public\nav.html";i:1524817379;s:68:"D:\phpStudy\WWW\three_shop\application\index\view\public\buycar.html";i:1524624951;s:68:"D:\phpStudy\WWW\three_shop\application\index\view\public\menu_l.html";i:1524627539;s:68:"D:\phpStudy\WWW\three_shop\application\index\view\public\menu_r.html";i:1524732966;s:68:"D:\phpStudy\WWW\three_shop\application\index\view\public\member.html";i:1524657766;s:68:"D:\phpStudy\WWW\three_shop\application\index\view\public\footer.html";i:1524574905;}*/ ?>
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
        
    <script type="text/javascript" src="/static/index/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/static/index/js/menu.js"></script>    
        
	<script type="text/javascript" src="/static/index/js/select.js"></script>
        
    
<title>尤洪</title>
</head>
<body>  
<!--Begin Header Begin-->
<div class="soubg">
    <div class="sou">
        <!--Begin 所在收货地区 Begin-->
           <span class="s_city_b">
        	<span class="fl">送货至：</span>
            <span class="s_city">
            	<span>四川</span>
                <div class="s_city_bg">
                	<div class="s_city_t"></div>
                    <div class="s_city_c">
                    	<h2>请选择所在的收货地区</h2>
                        <table border="0" class="c_tab" style="width:235px; margin-top:10px;" cellspacing="0" cellpadding="0">
                          <tr>
                            <th>A</th>
                            <td class="c_h"><span>安徽</span><span>澳门</span></td>
                          </tr>
                          <tr>
                            <th>B</th>
                            <td class="c_h"><span>北京</span></td>
                          </tr>
                          <tr>] 
                            <th>C</th>
                            <td class="c_h"><span>重庆</span></td>
                          </tr>
                          <tr>
                            <th>F</th>
                            <td class="c_h"><span>福建</span></td>
                          </tr>
                          <tr>
                            <th>G</th>
                            <td class="c_h"><span>广东</span><span>广西</span><span>贵州</span><span>甘肃</span></td>
                          </tr>
                          <tr>
                            <th>H</th>
                            <td class="c_h"><span>河北</span><span>河南</span><span>黑龙江</span><span>海南</span><span>湖北</span><span>湖南</span></td>
                          </tr>
                          <tr>
                            <th>J</th>
                            <td class="c_h"><span>江苏</span><span>吉林</span><span>江西</span></td>
                          </tr>
                          <tr>
                            <th>L</th>
                            <td class="c_h"><span>辽宁</span></td>
                          </tr>
                          <tr>
                            <th>N</th>
                            <td class="c_h"><span>内蒙古</span><span>宁夏</span></td>
                          </tr>
                          <tr>
                            <th>Q</th>
                            <td class="c_h"><span>青海</span></td>
                          </tr>
                          <tr>
                            <th>S</th>
                            <td class="c_h"><span>上海</span><span>山东</span><span>山西</span><span class="c_check">四川</span><span>陕西</span></td>
                          </tr>
                          <tr>
                            <th>T</th>
                            <td class="c_h"><span>台湾</span><span>天津</span></td>
                          </tr>
                          <tr>
                            <th>X</th>
                            <td class="c_h"><span>西藏</span><span>香港</span><span>新疆</span></td>
                          </tr>
                          <tr>
                            <th>Y</th>
                            <td class="c_h"><span>云南</span></td>
                          </tr>
                          <tr>
                            <th>Z</th>
                            <td class="c_h"><span>浙江</span></td>
                          </tr>
                        </table>
                    </div>
                </div>
            </span>
        </span>
        <!--End 所在收货地区 End-->
            <span class="fr">
         <?php if(!empty(session('user'))) { ?>
        	<span class="fl">你好，<?php echo \think\Session::get('user.user_name'); ?></a>&nbsp; 
            <a href="<?php echo url('Login/login_out'); ?>" style="color:#ff4e00;">退出</a>&nbsp;|&nbsp;
            <a href="<?php echo url('Member/member'); ?>">我的订单</a>&nbsp;</span>
        <?php }else{ ?>
            <span class="fl">你好，请<a href="<?php echo url('Login/login'); ?>">登录</a>&nbsp; 
            <a href="<?php echo url('Login/regist'); ?>" style="color:#ff4e00;">免费注册</a></span>
        <?php } ?>
            <span class="fl">|&nbsp;关注我们：</span>
            <span class="s_sh"><a href="#" class="sh1">新浪</a><a href="#" class="sh2">微信</a></span>
            <span class="fr">|&nbsp;<a href="#">手机版&nbsp;<img src="/static/index/images/s_tel.png" align="absmiddle" /></a></span>
            </span>


       <!--  <?php if (empty($user_name)) { ?>
                <span class="fl">你好，请<a href="<?php echo url('Login/login'); ?>">登录</a>&nbsp; <a href="<?php echo url('Login/regist'); ?>" style="color:#ff4e00;">免费注册</a>&nbsp;|&nbsp;<a href="<?php echo url('member/order'); ?>">我的订单</a>&nbsp;|</span>
            <?php }else{ ?>
                <span class="fl"><span style="color: red"><?php echo $user_name; ?></span>&nbsp;|&nbsp;<a href="<?php echo url('login/out'); ?>">退出</a>&nbsp;|&nbsp;<a href="<?php echo url('member/order'); ?>">我的订单</a>&nbsp;|</span>
            <?php } ?> -->
    </div>
</div>
<div class="top">
    <div class="logo"><a href="Index.html"><img src="/static/index/images/logo.png" /></a></div>
    <div class="search">
        <form>
            <input type="text" value="" class="s_ipt" />
            <input type="submit" value="搜索" class="s_btn" />
        </form>                      
        <span class="fl"><a href="#">咖啡</a><a href="#">iphone 6S</a><a href="#">新鲜美食</a><a href="#">蛋糕</a><a href="#">日用品</a><a href="#">连衣裙</a></span>
    </div>
    <div class="i_car">
    	<div class="car_t">购物车 [ <span>3</span> ]</div>
        <div class="car_bg">
       		<!--Begin 购物车未登录 Begin-->
        	<div class="un_login">还未登录！<a href="Login.html" style="color:#ff4e00;">马上登录</a> 查看购物车！</div>
            <!--End 购物车未登录 End-->
            <!--Begin 购物车已登录 Begin-->
            <ul class="cars">
            	<li>
                	<div class="img"><a href="#"><img src="/static/index/images/car1.jpg" width="58" height="58" /></a></div>
                    <div class="name"><a href="#">法颂浪漫梦境50ML 香水女士持久清新淡香 送2ML小样3只</a></div>
                    <div class="price"><font color="#ff4e00">￥399</font> X1</div>
                </li>
                <li>
                	<div class="img"><a href="#"><img src="/static/index/images/car2.jpg" width="58" height="58" /></a></div>
                    <div class="name"><a href="#">香奈儿（Chanel）邂逅活力淡香水50ml</a></div>
                    <div class="price"><font color="#ff4e00">￥399</font> X1</div>
                </li>
                <li>
                	<div class="img"><a href="#"><img src="/static/index/images/car2.jpg" width="58" height="58" /></a></div>
                    <div class="name"><a href="#">香奈儿（Chanel）邂逅活力淡香水50ml</a></div>
                    <div class="price"><font color="#ff4e00">￥399</font> X1</div>
                </li>
            </ul>
            <div class="price_sum">共计&nbsp; <font color="#ff4e00">￥</font><span>1058</span></div>
            <div class="price_a"><a href="<?php echo url('Buycar/buycar'); ?>">去购物车结算</a></div>
            <!--End 购物车已登录 End-->
        </div>
    </div>
</div>  
<!--End Header End--> 
<div class="menu_bg">
    <div class="menu">
        <!--Begin 商品分类详情 Begin-->    
           <!-- <div class="nav">
        	<div class="nav_t">全部商品分类</div>
            <div class="leftNav">
                <ul>      
                    <li>
                    	<div class="fj">
                        	<span class="n_img"><span></span><img src="/static/index/images/nav1.png" /></span>
                            <span class="fl">进口食品、生鲜</span>
                        </div>
                        <div class="zj">
                            <div class="zj_l">
                                <div class="zj_l_c">
                                    <h2>零食 / 糖果 / 巧克力</h2>
                                    <a href="<?php echo url('Brand/brand'); ?>">坚果</a>|
                                    <a href="<?php echo url('Brand/brand'); ?>">蜜饯</a>|
                                    <a href="<?php echo url('Brand/brand'); ?>">红枣</a>|
                                    <a href="<?php echo url('Brand/brand'); ?>">牛肉干</a>|
                                    <a href="<?php echo url('Brand/brand'); ?>">巧克力</a>|
                                    <a href="<?php echo url('Brand/brand'); ?>">口香糖</a>|
                                    <a href="<?php echo url('Brand/brand'); ?>">海苔</a>|
                                    <a href="<?php echo url('Brand/brand'); ?>">鱼干</a>|
                                    <a href="<?php echo url('Brand/brand'); ?>">蜜饯</a>|
                                    <a href="<?php echo url('Brand/brand'); ?>">红枣</a>|
                                    <a href="<?php echo url('Brand/brand'); ?>">蜜饯</a>|
                                    <a href="<?php echo url('Brand/brand'); ?>">红枣</a>|
                                    <a href="<?php echo url('Brand/brand'); ?>">牛肉干</a>|
                                    <a href="<?php echo url('Brand/brand'); ?>">蜜饯</a>|
                                </div>
                            </div>
                            <div class="zj_r">
                                <a href="#"><img src="/static/index/images/n_img1.jpg" width="236" height="200" /></a>
                                <a href="#"><img src="/static/index/images/n_img2.jpg" width="236" height="200" /></a>
                            </div>
                        </div>
                    </li>                               	
                </ul>            
            </div>
        </div>   -->
        <!--End 商品分类详情 End-->
        <ul class="menu_r">                                                                    
        	<li><a href="<?php echo url('Index/index'); ?>">首页</a></li>
            <li><a href="javascript:void(0)">美食</a></li>
            <li><a href="javascript:void(0)">生鲜</a></li>
            <li><a href="javascript:void(0)">家居</a></li>
            <li><a href="javascript:void(0)">女装</a></li>
            <li><a href="javascript:void(0)">美妆</a></li>
            <li><a href="javascript:void(0)">数码</a></li>
            <li><a href="javascript:void(0)">团购</a></li>
 </ul>
        <div class="m_ad">中秋送好礼！</div>
    </div>
</div>
<div class="i_bg bg_color">
    <!--Begin 用户中心 Begin -->
	<div class="m_content">
   		<div class="m_left">
        	<div class="left_n">管理中心</div>
            <div class="left_m">
            	<div class="left_m_t t_bg1">订单中心</div>
                <ul>
                	<li><a href="<?php echo url('Member/member_order'); ?>">我的订单</a></li>
                    <li><a href="<?php echo url('Member/member_address'); ?>">收货地址</a></li>
                    <li><a href="#">查询订单</a></li>
                </ul>
            </div>
            <div class="left_m">
            	<div class="left_m_t t_bg2">会员中心</div>
                <ul>
                	<li><a href="<?php echo url('Member/member_user'); ?>">用户信息</a></li>
                </ul>
            </div>
            <div class="left_m">
            	<div class="left_m_t t_bg3">账户中心</div>
                <ul>
                	<li><a href="<?php echo url('Member/member_safe'); ?>">账户安全</a></li>
                    <li><a href="<?php echo url('Member/member_money'); ?>">查看账户明细</a></li>
                    <li><a href="<?php echo url('Member/membermoney_charge'); ?>">余额充值</a></li>
                    <li><a href="<?php echo url('Member/member_cash'); ?>">申请提现</a></li>
                </ul>
            </div>
        </div>
		<div class="m_right">
            <p></p>			
            <div class="mem_tit">
            会员余额
            </div>
			<table border="0" class="ma_tab" style="width:930px; margin-bottom:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td class="ma_a" colspan="7" align="right">
                <a href="<?php echo url('Member/membermoney_charge'); ?>">充值</a>|
                <a href="<?php echo url('Member/member_cash'); ?>">提现</a>|
                <a href="<?php echo url('Member/member_money'); ?>">查看账户明细</a>|
                <a href="#">查看申请记录</a></td>
              </tr>
              <tr>
                <td>充值金额</td>
                <td colspan="2"><input type="text" value="" class="add_ipt" style="width:190px;" /></td>
              </tr>
              <tr valign="top" height="180">
                <td>会员备注</td>
                <td colspan="2" style="padding-top:10px;"><textarea class="add_txt" style="width:540px; height:130px;"></textarea></td>
              </tr>
              <tr>
                <td colspan="3">支付方式</td>
              </tr>
              <tr>                                                                                                                                                    
                <td width="200" align="center">名称</td>                                                            
                <td width="500" align="center">描述</td>
                <td width="230" align="center">手续费</td>                   
              </tr>
              <tr>
                <td><label class="r_rad"><input type="checkbox" name="pay" checked="checked" /></label><label class="r_txt">银行汇款 / 转账</label></td>
                <td>
                	银行名称 收款人信息：全称 ××× ；帐号或地址 ××× ；开户行 ×××。 <br />
                    注意事项：办理电汇时，请在电汇单“汇款用途”一栏处注明您的订单号。
                </td>
                <td align="center">0</td>
              </tr>
              <tr>
                <td><label class="r_rad"><input type="checkbox" name="pay" /></label><label class="r_txt">支付宝</label></td>
                <td>
                	支付宝网站(www.alipay.com) 是国内先进的网上支付平台。<br />
                    支付宝收款接口：在线即可开通，<font color="#ff4e00">零预付，免年费，</font>单笔阶梯费率，无流量限制。<br />
                    <a href="#" style="color:#ff4e00;">立即在线申请</a>
                </td>
                <td align="center">0</td>
              </tr>
              <tr>
                <td colspan="7" align="right">您当前的可用资金为：￥0.00</td>
              </tr>
			</table>
            
            <p align="center">
            	<input type="submit" value="提交申请" class="btn_tj" />&nbsp; &nbsp; <input type="reset" value="重置表单" class="btn_tj" />
            </p>
			


            
        </div>
    </div>
	<!--End 用户中心 End--> 
    <!--Begin Footer Begin -->
    <div class="b_btm_bg bg_color">
        <div class="b_btm">
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/static/index/images/b1.png" width="62" height="62" /></td>
                <td><h2>正品保障</h2>正品行货  放心购买</td>
              </tr>
            </table>
			<table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/static/index/images/b2.png" width="62" height="62" /></td>
                <td><h2>满38包邮</h2>满38包邮 免运费</td>
              </tr>
            </table>
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/static/index/images/b3.png" width="62" height="62" /></td>
                <td><h2>天天低价</h2>天天低价 畅选无忧</td>
              </tr>
            </table>
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/static/index/images/b4.png" width="62" height="62" /></td>
                <td><h2>准时送达</h2>收货时间由你做主</td>
              </tr>
            </table>
        </div>
    </div>
    <div class="b_nav">
    	<dl>                                                                                            
        	<dt><a href="#">新手上路</a></dt>
            <dd><a href="#">售后流程</a></dd>
            <dd><a href="#">购物流程</a></dd>
            <dd><a href="#">订购方式</a></dd>
            <dd><a href="#">隐私声明</a></dd>
            <dd><a href="#">推荐分享说明</a></dd>
        </dl>
        <dl>
        	<dt><a href="#">配送与支付</a></dt>
            <dd><a href="#">货到付款区域</a></dd>
            <dd><a href="#">配送支付查询</a></dd>
            <dd><a href="#">支付方式说明</a></dd>
        </dl>
        <dl>
        	<dt><a href="#">会员中心</a></dt>
            <dd><a href="#">资金管理</a></dd>
            <dd><a href="#">我的收藏</a></dd>
            <dd><a href="#">我的订单</a></dd>
        </dl>
        <dl>
        	<dt><a href="#">服务保证</a></dt>
            <dd><a href="#">退换货原则</a></dd>
            <dd><a href="#">售后服务保证</a></dd>
            <dd><a href="#">产品质量保证</a></dd>
        </dl>
        <dl>
        	<dt><a href="#">联系我们</a></dt>
            <dd><a href="#">网站故障报告</a></dd>
            <dd><a href="#">购物咨询</a></dd>
            <dd><a href="#">投诉与建议</a></dd>
        </dl>
        <div class="b_tel_bg">
        	<a href="#" class="b_sh1">新浪微博</a>            
        	<a href="#" class="b_sh2">腾讯微博</a>
            <p>
            服务热线：<br />
            <span>400-123-4567</span>
            </p>
        </div>
        <div class="b_er">
            <div class="b_er_c"><img src="/static/index/images/er.gif" width="118" height="118" /></div>
            <img src="/static/index/images/ss.png" />
        </div>
    </div>    
    <div class="btmbg">
		<div class="btm">
        	备案/许可证编号：蜀ICP备12009302号-1-www.dingguagua.com   Copyright © 2015-2018 尤洪商城网 All Rights Reserved. 复制必究 , Technical Support: Dgg Group <br />
            <img src="/static/index/images/b_1.gif" width="98" height="33" /><img src="/static/index/images/b_2.gif" width="98" height="33" /><img src="/static/index/images/b_3.gif" width="98" height="33" /><img src="/static/index/images/b_4.gif" width="98" height="33" /><img src="/static/index/images/b_5.gif" width="98" height="33" /><img src="/static/index/images/b_6.gif" width="98" height="33" />
        </div>    	
    </div>
    <!--End Footer End -->    
</div>

</body>


<!--[if IE 6]>
<script src="//letskillie6.googlecode.com/svn/trunk/2/zh_CN.js"></script>
<![endif]-->
</html>
