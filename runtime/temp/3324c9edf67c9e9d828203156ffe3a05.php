<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"D:\phpStudy\WWW\three_shop\public/../application/admin\view\privilege\Privilege_add.html";i:1525405749;}*/ ?>

<!-- $Id: privilege_info.htm 16616 2009-08-27 01:56:35Z liuhui $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 添加管理员 </title>
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
</style>

</head>
<body>

<h1>

	<span class="action-span"><a href="<?php echo url('Privilege/privilege_list'); ?>">管理员列表</a></span>

<span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> &nbsp;&nbsp;&nbsp;&nbsp; 添加管理员 </span>
<div style="clear:both"></div>
</h1><div class="main-div">
<form name="theForm" method="post" enctype="multipart/form-data" onsubmit="return validate();">
<table width="100%">
  <tr>
    <td class="label">用户名</td>
    <td>
      <input type="text" name="admin_name" maxlength="20" value="" size="34"/><span class="require-field">*</span></td>
  </tr>
  <tr>
    <td class="label">Email地址</td>
    <td>
      <input type="text" name="admin_email" value="" size="34" /><span class="require-field">*</span></td>
  </tr>
  <tr>
    <td class="label">是否启用：</td>
    <td>
       <select name="admin_status" id="catid" class="required">
          <option value="" >&nbsp;&nbsp;请选择&nbsp;&nbsp;  </option>
          <option value="0" >启用</option>
          <option value="1" >禁用</option>
        </select>
      </td>
  </tr>
   <tr>
    <td class="label">密  码</td>
    <td>
      <input type="password" name="admin_pwd" maxlength="32" size="34" /><span class="require-field">*</span></td>
  </tr>
  <table cellspacing='1' id="list-table">

 <tr>
  <td width="18%" valign="top" class="first-cell">
    请选择角色：
   </td>
   <td>
    <?php if(is_array($role) || $role instanceof \think\Collection || $role instanceof \think\Paginator): $i = 0; $__LIST__ = $role;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$k): $mod = ($i % 2 );++$i;?>
    <div style="width:200px;float:left;"> 
      <label for="goods_manage"><input type="checkbox" name="role_id[]" id="goods_manage" class="son" value="<?php echo $k['role_id']; ?>"  /><?php echo $k['role_name']; ?></label>
    </div> 
    <?php endforeach; endif; else: echo "" ;endif; ?>
 </tr>
    <tr>
    <td colspan="2" align="center">
      <input type="submit" value=" 确定 " class="button" />&nbsp;&nbsp;&nbsp;
      <input type="reset" value=" 重置 " class="button" />
</td>
  </tr>
</table>
</form>
</div>

</body>
</html>