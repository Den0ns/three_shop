<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:91:"D:\phpStudy\WWW\three_shop\public/../application/admin\view\Privilege\privilege_update.html";i:1524567819;}*/ ?>

<!-- $Id: privilege_info.htm 16616 2009-08-27 01:56:35Z liuhui $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 添加管理员 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/admin/styles/general.css" rel="stylesheet" type="text/css" />
<link href="/static/admin/styles/main.css" rel="stylesheet" type="text/css" />

<form action="privilege_update?id=<?php echo $data['admin_id']; ?>" method="post">
<table width="100%">
  <tr>
    <td class="label">用户名</td>
    <td>
      <input type="text" name="admin_name" maxlength="20" value="<?php echo $data['admin_name']; ?>" size="34"/><span class="require-field">*</span></td>
  </tr>
  <tr>
    <td class="label">Email地址</td>
    <td>
      <input type="text" name="admin_email" value="<?php echo $data['admin_email']; ?>" size="34" /><span class="require-field">*</span></td>
  </tr>
   <tr>
    <td class="label">密  码</td>
    <td>
      <input type="password" name="admin_pwd" value="<?php echo $data['admin_pwd']; ?>" maxlength="32" size="34" /><span class="require-field">*</span></td>
  </tr>
  <tr>
    <td class="label">确认密码</td>
    <td>
      <input type="password" name="admin_pwd" value="<?php echo $data['admin_pwd']; ?>" maxlength="32" size="34" /><span class="require-field">*</span></td>
  </tr>
           <tr>
    <td colspan="2" align="center">
      <input type="hidden" name="admin_id" value="<?php echo $data['admin_id']; ?>" />
      <input type="submit" value=" 确定 " class="button" />&nbsp;&nbsp;&nbsp;
      <input type="reset" value=" 重置 " class="button" />
      <!-- <input type="hidden" name="act" value="insert" />
      <input type="hidden" name="token" value="" />
      <input type="hidden" name="id" value="" /> --></td>
  </tr>
</table>
</form>
</div>
