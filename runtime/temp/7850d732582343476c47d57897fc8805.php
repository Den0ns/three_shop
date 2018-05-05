<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"F:\web\WWW\three_shop\public/../application/admin\view\user\userrank_add.html";i:1524471486;}*/ ?>

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
<form action="user_rank.php" method="post" name="theForm" onsubmit="return validate()">
<table width="100%">
  <tr>
    <td class="label">会员等级名称: </td>
    <td><input type="text" name="rank_name" value="" maxlength="20" /><span class="require-field">*</span></td>
  </tr>
  <tr>
    <td class="label">积分下限: </td>
    <td><input type="text" name="min_points" value="0" size="10" maxlength="20" /></td>
  </tr>
  <tr>
    <td class="label">积分上限: </td>
    <td><input type="text" name="max_points" value="0" size="10" maxlength="20" /></td>
  </tr>
  <tr>
    <td class="label"></td>
    <td>
    <input type="checkbox" name="show_price" value="1"  checked="true" /> 在商品详情页显示该会员等级的商品价格</td>
  </tr>
  <tr>
    <td class="label"></td>
    <td>
    <input type="checkbox" name="special_rank" value="1"  onClick="javascript:doSpecial()" /> 特殊会员组 <a href="javascript:showNotice('notice_special');" title="点击此处查看提示信息"><img src="/static/admin/images/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>
    <br /><span class="notice-span" style="display:block"  id="notice_special">特殊会员组的会员不会随着积分的变化而变化。</span></td>
  </tr>
  <tr>
    <td class="label"><a href="javascript:showNotice('notice_discount');" title="点击此处查看提示信息"><img src="/static/admin/images/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>初始折扣率: </td>
    <td><input type="text" name="discount" value="100" size="10" maxlength="20" /><span class="require-field">*</span>    <br /><span class="notice-span" style="display:block"  id="notice_discount">请填写为0-100的整数,如填入80，表示初始折扣率为8折</span>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input type="hidden" name="act" value="insert" />
      <input type="hidden" name="id" value="0" />
      <input type="submit" value=" 确定 " class="button" />
      <input type="reset" value=" 重置 " class="button" />
    </td>
  </tr>
</table>
</form>
</div>
<script type="text/javascript" src="/static/admin/js/utils.js"></script><script type="text/javascript" src="/static/admin/js/validator.js"></script>
<script language="JavaScript">
<!--
document.forms['theForm'].elements['rank_name'].focus();

// onload = function()
// {
//   // 开始检查订单
//   startCheckOrder();
// }

/**
 * 检查表单输入的数据
 */
function validate()
{
    if (!document.forms['theForm'].elements['special_rank'].checked)
    {
        if (Utils.trim(document.forms['theForm'].elements['min_points'].value) == '' ||
            !Utils.isInt(document.forms['theForm'].elements['min_points'].value))
        {
            alert(integral_min_invalid);
            return false;
        }

        if (Utils.trim(document.forms['theForm'].elements['max_points'].value) == '' ||
            !Utils.isInt(document.forms['theForm'].elements['max_points'].value))
        {
            alert(integral_max_invalid);
            return false;
        }

        if (!document.forms['theForm'].elements['special_rank'].checked &&
            (parseInt(document.forms['theForm'].elements['max_points'].value) <=
            parseInt(document.forms['theForm'].elements['min_points'].value)))
        {
            alert(integral_max_small);
            return false;
        }
        if (parseInt(document.forms['theForm'].elements['discount'].value) < 1 ||
          parseInt(document.forms['theForm'].elements['discount'].value) > 100)
        {
          alert(discount_invalid);
          return false;
        }
    }

    validator = new Validator("theForm");
    validator.required('rank_name', rank_name_empty);
    validator.isInt('discount', discount_invalid, true);
    return validator.passed();
}

function doSpecial()
{
  if(document.forms['theForm'].elements['special_rank'].checked)
  {
      document.forms['theForm'].elements['max_points'].disabled = "true";
      document.forms['theForm'].elements['min_points'].disabled = "true";
  }
  else
  {
      document.forms['theForm'].elements['max_points'].disabled = "";
      document.forms['theForm'].elements['min_points'].disabled = "";
  }
}
//-->
</script>

<div id="footer">
共执行 2 个查询，用时 0.017362 秒，Gzip 已禁用，内存占用 1.075 MB<br />
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

<!--
<embed src="/static/admin/images/online.wav" width="0" height="0" autostart="false" name="msgBeep" id="msgBeep" enablejavascript="true"/>
-->
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0" id="msgBeep" width="1" height="1">
  <param name="movie" value="/static/admin/images/online.swf">
  <param name="quality" value="high">
  <embed src="/static/admin/images/online.swf" name="msgBeep" id="msgBeep" quality="high" width="0" height="0" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?p1_prod_version=shockwaveflash">
  </embed>
</object>

<script language="JavaScript">
document.onmousemove=function(e)
{
  var obj = Utils.srcElement(e);
  if (typeof(obj.onclick) == 'function' && obj.onclick.toString().indexOf('listTable.edit') != -1)
  {
    obj.title = '点击修改内容';
    obj.style.cssText = 'background: #278296;';
    obj.onmouseout = function(e)
    {
      this.style.cssText = '';
    }
  }
  else if (typeof(obj.href) != 'undefined' && obj.href.indexOf('listTable.sort') != -1)
  {
    obj.title = '点击对列表排序';
  }
}
<!--


var MyTodolist;
function showTodoList(adminid)
{
  if(!MyTodolist)
  {
    var global = $import("..//static/admin/js/global.js","js");
    global.onload = global.onreadystatechange= function()
    {
      if(this.readyState && this.readyState=="loading")return;
      var md5 = $import("/static/admin/js/md5.js","js");
      md5.onload = md5.onreadystatechange= function()
      {
        if(this.readyState && this.readyState=="loading")return;
        var todolist = $import("/static/admin/js/todolist.js","js");
        todolist.onload = todolist.onreadystatechange = function()
        {
          if(this.readyState && this.readyState=="loading")return;
          MyTodolist = new Todolist();
          MyTodolist.show();
        }
      }
    }
  }
  else
  {
    if(MyTodolist.visibility)
    {
      MyTodolist.hide();
    }
    else
    {
      MyTodolist.show();
    }
  }
}

if (Browser.isIE)
{
  onscroll = function()
  {
    //document.getElementById('calculator').style.top = document.body.scrollTop;
    document.getElementById('popMsg').style.top = (document.body.scrollTop + document.body.clientHeight - document.getElementById('popMsg').offsetHeight) + "px";
  }
}

if (document.getElementById("listDiv"))
{
  document.getElementById("listDiv").onmouseover = function(e)
  {
    obj = Utils.srcElement(e);

    if (obj)
    {
      if (obj.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode;
      else if (obj.parentNode.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode.parentNode;
      else return;

      for (i = 0; i < row.cells.length; i++)
      {
        if (row.cells[i].tagName != "TH") row.cells[i].style.backgroundColor = '#F4FAFB';
      }
    }

  }

  document.getElementById("listDiv").onmouseout = function(e)
  {
    obj = Utils.srcElement(e);

    if (obj)
    {
      if (obj.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode;
      else if (obj.parentNode.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode.parentNode;
      else return;

      for (i = 0; i < row.cells.length; i++)
      {
          if (row.cells[i].tagName != "TH") row.cells[i].style.backgroundColor = '#FFF';
      }
    }
  }

  document.getElementById("listDiv").onclick = function(e)
  {
    var obj = Utils.srcElement(e);

    if (obj.tagName == "INPUT" && obj.type == "checkbox")
    {
      if (!document.forms['listForm'])
      {
        return;
      }
      var nodes = document.forms['listForm'].elements;
      var checked = false;

      for (i = 0; i < nodes.length; i++)
      {
        if (nodes[i].checked)
        {
           checked = true;
           break;
         }
      }

      if(document.getElementById("btnSubmit"))
      {
        document.getElementById("btnSubmit").disabled = !checked;
      }
      for (i = 1; i <= 10; i++)
      {
        if (document.getElementById("btnSubmit" + i))
        {
          document.getElementById("btnSubmit" + i).disabled = !checked;
        }
      }
    }
  }

}

//-->
</script>
</body>
</html>