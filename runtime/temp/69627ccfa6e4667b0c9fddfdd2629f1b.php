<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\phpStudy\WWW\three_shop\public/../application/admin\view\user\user_add.html";i:1524471705;}*/ ?>

<!-- $Id: user_info.htm 16854 2009-12-07 06:20:09Z sxc_shop $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 添加会员 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/admin/styles/general.css" rel="stylesheet" type="text/css" />
<link href="/static/admin/styles/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/common.js"></script><style>
  .panel-icloud .panel-right iframe {
    height: 300px;
    margin-top: 15px;
  }
  .panel-hint{
    top: 3%;
  }
</style>
</head>
<body>

<h1>
<!--遮罩-->
<div class="mask-black" id="Mask"></div>
<!--遮罩-->
	<span class="action-span"><a href="<?php echo url('User/user_list'); ?>">会员列表</a></span>

<span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> &nbsp;&nbsp;&nbsp;&nbsp; 添加会员 </span>
<div style="clear:both"></div>
</h1><div class="main-div">
<form method="post" action="users.php" name="theForm" onsubmit="return validate()">
<table width="100%" >
  <tr>
    <td class="label">会员名称:</td>
    <td><input type="text" name="username" maxlength="60" value="" /><span class="require-field">*</span></td>
  </tr>
    <tr>
    <td class="label">邮件地址:</td>
    <td><input type="text" name="email" maxlength="60" size="40" value="" /><span class="require-field">*</span></td>
  </tr>
    <tr>
    <td class="label">登录密码:</td>
    <td><input type="password" name="password" maxlength="20" size="20" /><span class="require-field">*</span></td>
  </tr>
  <tr>
    <td class="label">确认密码:</td>
    <td><input type="password" name="confirm_password" maxlength="20" size="20" /><span class="require-field">*</span></td>
  </tr>
    <tr>
    <td class="label">会员等级:</td>
    <td><select name="user_rank">
      <option value="0">非特殊等级</option>
      <option value="3">代销用户</option>    </select></td>
  </tr>
  <tr>
    <td class="label">性别:</td>
    <td><input type="radio" name="sex" value="0" checked>&nbsp;保密&nbsp;<input type="radio" name="sex" value="1">&nbsp;男&nbsp;<input type="radio" name="sex" value="2">&nbsp;女&nbsp;</td>
  </tr>
  <tr>
    <td class="label">出生日期:</td>
    <td>
      <select name="birthdayYear"><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option></select>&nbsp;<select name="birthdayMonth"><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>&nbsp;<select name="birthdayDay"><option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select></td>
  </tr>
  <tr>
    <td class="label">信用额度:</td>
    <td><input name="credit_line" type="text" id="credit_line" value="0" size="10" /></td>
  </tr>
    <tr>
    <td class="label">QQ:</td>
    <td>
    <input name="extend_field2" type="text" size="40" class="inputBg" value=""/>
    </td>
  </tr>
    <tr>
    <td class="label">办公电话:</td>
    <td>
    <input name="extend_field3" type="text" size="40" class="inputBg" value=""/>
    </td>
  </tr>
    <tr>
    <td class="label">家庭电话:</td>
    <td>
    <input name="extend_field4" type="text" size="40" class="inputBg" value=""/>
    </td>
  </tr>
    <tr>
    <td class="label">手机:</td>
    <td>
    <input name="extend_field5" type="text" size="40" class="inputBg" value=""/>
    </td>
  </tr>
        <tr>
    <td colspan="2" align="center">
      <input type="submit" value=" 确定 " class="button" />
      <input type="reset" value=" 重置 " class="button" />
      <input type="hidden" name="act" value="insert" />
      <input type="hidden" name="id" value="" />    </td>
  </tr>
</table>

</form>
</div>
<div id="footer">
共执行 4 个查询，用时 0.057669 秒，Gzip 已禁用，内存占用 1.144 MB<br />
版权所有 &copy; 2005-2018 上海商派软件有限公司，并保留所有权利。</div>
<!-- 新订单提示信息 -->
<div id="popMsg">
  <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#cfdef4" border="0">
  <tr>
    <td style="color: #0f2c8c" width="30" height="24"></td>
    <td style="font-weight: normal; color: #1f336b; padding-top: 4px;padding-left: 4px" valign="center" width="100%"> 新订单通知</td>
    <td style="padding-top: 2px;padding-right:2px" valign="center" align="right" width="19"><span title="关闭" style="cursor: hand;cursor:pointer;color:red;font-size:12px;font-weight:bold;margin-right:4px;" onclick="Message.close()" >×</span><!-- <img title=关闭 style="cursor: hand" onclick=closediv() hspace=3 src="msgclose.jpg"> --></td>
  </tr>
  <tr>
    <td style="padding-right: 1px; padding-bottom: 1px" colspan="3" height="70">
    <div id="popMsgContent">
      <p>您有 <strong style="color:#ff0000" id="spanNewOrder">1</strong> 个新订单以及       <strong style="color:#ff0000" id="spanNewPaid">0</strong> 个新付款的订单</p>
      <p align="center" style="word-break:break-all"><a href="order.php?act=list"><span style="color:#ff0000">点击查看新订单</span></a></p>
    </div>
    </td>
  </tr>
  </table>
</div>
</body>
</html>