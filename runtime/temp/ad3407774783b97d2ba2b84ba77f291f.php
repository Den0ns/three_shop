<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"D:\phpStudy\WWW\three_shop\public/../application/admin\view\privilege\node_add.html";i:1524967634;}*/ ?>

<!-- $Id: role_info.htm 14216 2010-01-08 02:27:21Z liuhui $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 添加角色 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/admin/styles/general.css" rel="stylesheet" type="text/css" />
<link href="/static/admin/styles/main.css" rel="stylesheet" type="text/css" />
<!-- <script type="text/javascript" src="/static/admin/js/transport.js"></script><script type="text/javascript" src="/static/admin/js/common.js"></script> -->
<script type="text/javascript" src="/static/admin/js/jquery-1.8.2.min.js"></script>
<style>
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

	<span class="action-span"><a href="<?php echo url('Privilege/node_list'); ?>">角色列表</a></span>

<span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> &nbsp;&nbsp;&nbsp;&nbsp; 添加权限 </span>
<div style="clear:both"></div>
<form action="<?php echo url('Privilege/node_add'); ?>" method="post">
<div class="list-div">
<table width="100%">
  <tr>
    <td class="label">权限名</td>
    <td>
      <input type="text" name="node_name" maxlength="20" value="" size="34"/><span class="require-field">*</span></td>
  </tr>
  <tr>
    <td class="label">上级权限</td>
    <td>
       <select name="node_pid" id="catid" class="required">
          <option value="0" path="0">顶级权限</option>
          <?php if(is_array($node) || $node instanceof \think\Collection || $node instanceof \think\Paginator): $i = 0; $__LIST__ = $node;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?> 
          <option path="<?php echo $v['path']; ?>" value="<?php echo $v['node_id']; ?>"><?php echo str_repeat("　　",substr_count($v['path'],"-")); ?><?php echo $v['node_name']; ?></option>
          <?php endforeach; endif; else: echo "" ;endif; ?>
          </select>
      </td>
  </tr>
  <tr>
    <td class="label">权限所在控制器</td>
    <td>
      <input type="text" name="node_controller"  maxlength="20" value="" size="34"/><span class="require-field">*</span></td>
  </tr>
  <tr>
    <td class="label">权限所在方法</td>
    <td>
      <input type="text" name="node_action"  maxlength="20" value="" size="34"/><span class="require-field">*</span></td>
  </tr>
   <tr>
    <td class="label">权限是否显示</td>
    <td>
      <select name="node_status" id="">
          <option value="">请选择</option>
          <option value="1">显示</option>
          <option value="0">不显示</option>
      </select><span class="require-field">*</span></td>
  </tr>
  </table>
  <input name="node_path" value="0" class="path" type="hidden">
    <td align="center" colspan="2" >     &nbsp;&nbsp;&nbsp;&nbsp;
      <input type="submit"     value=" 保存 " class="button" />&nbsp;&nbsp;&nbsp;
      <input type="reset" value=" 重置 " class="button" />
      
    </td>
  </tr>
</table>
</div>
</form>
<script>

  $(function(){

    $("select[name='node_pid']").change(function(){
        var path = $(this).find("option:selected").attr("path");
        $(".path").val(path);
    })
})
</script>
</body>
</html>