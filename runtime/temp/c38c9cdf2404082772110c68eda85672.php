<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:92:"D:\phpStudy\WWW\PHP_13\three_shop\public/../application/admin\view\user\userrank_update.html";i:1524711820;}*/ ?>

<!-- $Id: user_rank_info.htm 15053 2008-10-25 03:07:46Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 添加会员等级 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/admin/styles/general.css" rel="stylesheet" type="text/css" />
<link href="/static/admin/styles/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="..//static/admin/js/transport.js"></script><script type="text/javascript" src="/static/admin/js/common.js"></script><style>
  .panel-icloud .panel-right iframe {
    height: 300px;
    margin-top: 15px;
  }
  .panel-hint{
    top: 3%;
  }
</style>
<script language="JavaScript">
<!--
// 这里把JS用到的所有语言都赋值到这里
var process_request = "正在处理您的请求...";
var todolist_caption = "记事本";
var todolist_autosave = "自动保存";
var todolist_save = "保存";
var todolist_clear = "清除";
var todolist_confirm_save = "是否将更改保存到记事本？";
var todolist_confirm_clear = "是否清空内容？";
var remove_confirm = "您确定要删除选定的会员等级吗？";
var rank_name_empty = "您没有输入会员等级名称。";
var integral_min_invalid = "您没有输入积分下限或者积分下限不是一个整数。";
var integral_max_invalid = "您没有输入积分上限或者积分上限不是一个整数。";
var discount_invalid = "您没有输入折扣率或者折扣率无效。";
var integral_max_small = "积分上限必须大于积分下限。";
var lang_remove = "移除";
//-->
/*关闭按钮*/
  function btnCancel(item){
    var par  = item.offsetParent;
    var mask  = document.getElementById('Mask')||null;
    var cloudFrame = document.getElementById('cloudFrame')||null;
    par.style.display = 'none';
    if(mask){mask.style.display = 'none';}
    if(cloudFrame){cloudFrame.src='';}
  }
</script>
</head>
<body>

<h1>
	<span class="action-span"><a href="<?php echo url('User/userrank_list'); ?>">会员等级</a></span>

<span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> &nbsp;&nbsp;&nbsp;&nbsp; 添加会员等级 </span>
<div style="clear:both"></div>
</h1>
<div class="main-div">
<form action="<?php echo url('User/userrank_save'); ?>" method="post" >
<table width="100%">
  <tr>
    <td class="label">会员等级名称: </td>
    <td><input type="text" name="rank_name" value="<?php echo $result['rank_name']; ?>" maxlength="20" /><span class="require-field">*</span></td>
  </tr>
  <tr>
    <td class="label">积分下限: </td>
    <td><input type="text" name="min_points" value="<?php echo $result['min_points']; ?>" size="10" maxlength="20" /></td>
  </tr>
  <tr>
    <td class="label">积分上限: </td>
    <td><input type="text" name="max_points" value="<?php echo $result['max_points']; ?>" size="10" maxlength="20" /></td>
  </tr>
  <tr>
    <td class="label"><a href="javascript:showNotice('notice_discount');" title="点击此处查看提示信息"><img src="/static/admin/images/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>初始折扣率: </td>
    <td><input type="text" name="discount" value="<?php echo $result['discount']; ?>" size="10" maxlength="20" /><span class="require-field">*</span>    <br /><span class="notice-span" style="display:block"  id="notice_discount">请填写为0-100的整数,如填入80，表示初始折扣率为8折</span>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input type="hidden" value="<?php echo $result['rank_id']; ?>" name="rank_id"/>
      <input type="submit" value=" 确定 " class="button" />
      <input type="reset" value=" 重置 " class="button" />
    </td>
  </tr>
</table>
</form>
</div>
<script type="text/javascript" src="/static/admin/js/utils.js"></script><script type="text/javascript" src="/static/admin/js/validator.js"></script>

</body>
</html>