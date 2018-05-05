<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"D:\phpStudy\WWW\PHP_13\three_shop\public/../application/admin\view\user\user_update.html";i:1524712262;}*/ ?>

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
<form method="post" action="<?php echo url('User/user_save'); ?>" name="theForm" onsubmit="return validate()">
<table width="100%" >
  <tr>
    <td class="label">会员名称:</td>
    <td><input type="text" name="user_name" maxlength="60" value="<?php echo $result['user_name']; ?>" /><span class="require-field">*</span></td>
  </tr>
    <tr>
    <td class="label">邮件地址:</td>
    <td><input type="text" name="email" maxlength="60" size="40" value="<?php echo $result['email']; ?>" /><span class="require-field">*</span></td>
  </tr>
    <tr>
    <td class="label">登录密码:</td>
    <td><input type="password" name="user_pwd" maxlength="20" size="20" value="<?php echo $result['user_pwd']; ?>"/><span class="require-field">*</span></td>
  </tr>
        <tr>
    <td colspan="2" align="center">
      <input type="hidden" value="<?php echo $result['user_id']; ?>" name="user_id"/>
      <input type="submit" value=" 确定 " class="button" />
      <input type="reset" value=" 重置 " class="button" />
    </td>
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
