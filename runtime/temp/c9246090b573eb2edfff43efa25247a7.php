<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"D:\phpStudy\WWW\PHP_13\three_shop\public/../application/admin\view\user\user_list.html";i:1524828396;}*/ ?>

<!-- $Id: users_list.htm 17053 2010-03-15 06:50:26Z sxc_shop $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 会员列表 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/admin/styles/general.css" rel="stylesheet" type="text/css" />
<link href="/static/admin/styles/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/static/admin/js/transport.js"></script><script type="text/javascript" src="/static/admin/js/common.js"></script><style>
  .panel-icloud .panel-right iframe {
    height: 300px;
    margin-top: 15px;
  }
  .panel-hint{
    top: 3%;
  }
  .page{
    padding-top: 20px;
  }
  .page li{
    width: 30px;
    height: 20px;
    line-height: 20px;
    text-align: center;
    font-size: 16px;
    text-decoration: none;
    list-style-type: none;
    float: left;
    margin-left: 15px;
    cursor: pointer;
  }
</style>
</head>
<body>

<h1>

<!--遮罩-->
<div class="mask-black" id="Mask"></div>
<!--遮罩-->
	<span class="action-span"><a href="<?php echo url('User/user_add'); ?>">添加会员</a></span>

<span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> &nbsp;&nbsp;&nbsp;&nbsp; 会员列表 </span>
<div style="clear:both"></div>
</h1><script type="text/javascript" src="/static/admin/js/utils.js"></script><script type="text/javascript" src="/static/admin/js/listtable.js"></script>
<div class="form-div">
  <form action="javascript:searchUser()" name="searchForm">
    <img src="/static/admin/images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
    &nbsp;会员等级 <select name="user_rank"><option value="0">所有等级</option><option value="1">注册用户</option><option value="3">代销用户</option><option value="2">vip</option></select>
    &nbsp;会员积分大于&nbsp;<input type="text" name="pay_points_gt" size="8" />&nbsp;会员积分小于&nbsp;<input type="text" name="pay_points_lt" size="10" />
    &nbsp;会员名称 &nbsp;<input type="text" name="keyword" /> <input type="submit" value=" 搜索 " />
  </form>
</div>

<form method="POST" action="" name="listForm" onsubmit="return confirm_bath()">

<!-- start users list -->
<div class="list-div" id="listDiv">
<!--用户列表部分-->
<table cellpadding="3" cellspacing="1">
  <tr>
    <th>
      <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox">
      <a href="javascript:listTable.sort('user_id'); ">编号</a><img src="/static/admin/images/sort_desc.gif">    </th>
    <th><a href="javascript:listTable.sort('user_name'); ">会员名称</a></th>
    <th><a href="javascript:listTable.sort('email'); ">邮件地址</a></th>
     <th><a href="javascript:listTable.sort('email'); ">注册时间</a></th>
      <th><a href="javascript:listTable.sort('email'); ">上一次登录时间</a></th>
    <th>操作</th>
    <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <tr>
    <td><input type="checkbox" name="checkboxes[]" align="center"/><?php echo $vo['user_id']; ?></td>
    <td class="first-cell" align="center"><?php echo $vo['user_name']; ?></td>
    <td align="center"><span><?php echo $vo['email']; ?></span></td>
    <td align="center"><span><?php echo date("Y-m-d H:i:s",$vo['reg_time']); ?></span></td>
    <td align="center"><span><?php echo $vo['last_login']; ?></span></td>
    <td align="center">
      <a href="<?php echo url('User/user_del',['user_id'=>$vo['user_id']]); ?>" title="删除">删除</a>
      <a href="<?php echo url('User/user_update',['user_id'=>$vo['user_id']]); ?>" title="修改">修改</a>
    </td>
  </tr>
  <?php endforeach; endif; else: echo "" ;endif; ?>
    <tr>
      <td colspan="2">
      <input type="hidden" name="act" value="batch_remove" />
      <input type="submit" id="btnSubmit" value="删除会员" disabled="true" class="button" /></td>
      <td></td>
      <td></td>
      <td></td>
      <td align="center"><div class='page'><?php echo $page; ?></div></td>
  </tr>

</table>
 
</div>
                             
<!-- end users list -->
</form>
<div id="footer">
共执行 5 个查询，用时 0.034563 秒，Gzip 已禁用，内存占用 1.149 MB<br />
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