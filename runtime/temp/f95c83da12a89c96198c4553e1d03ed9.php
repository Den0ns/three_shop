<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"F:\web\WWW\three_shop\public/../application/admin\view\privilege\Privilege_list.html";i:1524471486;}*/ ?>

<!-- $Id: privilege_list.htm 14216 2008-03-10 02:27:21Z testyang $ -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 管理员列表 </title>
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
var user_name_empty = "管理员用户名不能为空!";
var password_invaild = "密码必须同时包含字母及数字且长度不能小于6!";
var email_empty = "Email地址不能为空!";
var email_error = "Email地址格式不正确!";
var password_error = "两次输入的密码不一致!";
var captcha_empty = "您没有输入验证码!";
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
	<span class="action-span"><a href="<?php echo url('Privilege/privilege_add'); ?>">添加管理员</a></span>

<span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> &nbsp;&nbsp;&nbsp;&nbsp; 管理员列表 </span>
<div style="clear:both"></div>
</h1><script type="text/javascript" src="/static/admin/js/utils.js"></script><script type="text/javascript" src="/static/admin/js/listtable.js"></script>
<div class="list-div" id="listDiv">

<table cellspacing='1' cellpadding='3' id='list-table'>
  <tr>
    <th>用户名</th>
    <th>Email地址</th>
    <th>加入时间</th>
    <th>最后登录时间</th>
    <th>操作</th>
  </tr>
    <tr>
    <td class="first-cell" >shhaigonghuo1</td>
    <td align="left">shanghai@163.com</td>
    <td align="center">2009-06-15 13:36:42</td>
    <td align="center">N/A</td>
    <td align="center">
      <a href="privilege.php?act=allot&id=3&user=shhaigonghuo1" title="分派权限"><img src="/static/admin/images/icon_priv.gif" border="0" height="16" width="16"></a>&nbsp;&nbsp;
      <a href="admin_logs.php?act=list&id=3" title="查看日志"><img src="/static/admin/images/icon_view.gif" border="0" height="16" width="16"></a>&nbsp;&nbsp;
      <a href="privilege.php?act=edit&id=3" title="编辑"><img src="/static/admin/images/icon_edit.gif" border="0" height="16" width="16"></a>&nbsp;&nbsp;
      <a href="javascript:;" onclick="listTable.remove(3, '您确认要删除这条记录吗?')" title="移除"><img src="/static/admin/images/icon_drop.gif" border="0" height="16" width="16"></a></td>
  </tr>
    <tr>
    <td class="first-cell" >bjgonghuo1</td>
    <td align="left">bj@163.com</td>
    <td align="center">2009-06-15 13:34:59</td>
    <td align="center">N/A</td>
    <td align="center">
      <a href="privilege.php?act=allot&id=2&user=bjgonghuo1" title="分派权限"><img src="/static/admin/images/icon_priv.gif" border="0" height="16" width="16"></a>&nbsp;&nbsp;
      <a href="admin_logs.php?act=list&id=2" title="查看日志"><img src="/static/admin/images/icon_view.gif" border="0" height="16" width="16"></a>&nbsp;&nbsp;
      <a href="privilege.php?act=edit&id=2" title="编辑"><img src="/static/admin/images/icon_edit.gif" border="0" height="16" width="16"></a>&nbsp;&nbsp;
      <a href="javascript:;" onclick="listTable.remove(2, '您确认要删除这条记录吗?')" title="移除"><img src="/static/admin/images/icon_drop.gif" border="0" height="16" width="16"></a></td>
  </tr>
    <tr>
    <td class="first-cell" >admin</td>
    <td align="left">253035640@qq.com</td>
    <td align="center">2018-04-22 20:50:31</td>
    <td align="center">2018-04-23 08:13:07</td>
    <td align="center">
      <a href="privilege.php?act=allot&id=1&user=admin" title="分派权限"><img src="/static/admin/images/icon_priv.gif" border="0" height="16" width="16"></a>&nbsp;&nbsp;
      <a href="admin_logs.php?act=list&id=1" title="查看日志"><img src="/static/admin/images/icon_view.gif" border="0" height="16" width="16"></a>&nbsp;&nbsp;
      <a href="privilege.php?act=edit&id=1" title="编辑"><img src="/static/admin/images/icon_edit.gif" border="0" height="16" width="16"></a>&nbsp;&nbsp;
      <a href="javascript:;" onclick="listTable.remove(1, '您确认要删除这条记录吗?')" title="移除"><img src="/static/admin/images/icon_drop.gif" border="0" height="16" width="16"></a></td>
  </tr>
  </table>

</div>
<script type="text/javascript" language="JavaScript">
  
  // onload = function()
  // {
  //   // 开始检查订单
  //   startCheckOrder();
  // }
  
</script>
<div id="footer">
共执行 3 个查询，用时 0.030791 秒，Gzip 已禁用，内存占用 1.126 MB<br />
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