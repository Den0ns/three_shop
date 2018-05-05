<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"D:\phpStudy\WWW\three_shop\public/../application/admin\view\privilege\Privilege_log.html";i:1524827733;}*/ ?>

<!-- $Id: admin_logs.htm 15477 2008-12-22 03:44:50Z sunxiaodong $ -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 管理员日志 </title>
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
var select_date_value = "如果您要清除日志,请选择清除的日期";
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

<span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> &nbsp;&nbsp;&nbsp;&nbsp; 管理员日志 </span>
<div style="clear:both"></div>
</h1><script type="text/javascript" src="/static/admin/js/utils.js"></script><script type="text/javascript" src="/static/admin/js/listtable.js"></script>
<div class="form-div">
<table>
    <tr>
      <td width="50%">
      <form name="theForm" method="POST" action="admin_logs.php">
      按IP地址查看      <select name="ip">
      <option value='0'>选择IP地址...</option>
      <option value="0.0.0.0">0.0.0.0</option><option value="127.0.0.1">127.0.0.1</option>      </select>
      <input type="submit" value="确定" class="button" />
      </form>
      </td>
      <td>
      <form name="Form2" action="admin_logs.php?act=batch_drop" method="POST">
      清除日志      <select name="log_date">
        <option value='0'>选择清除的日期...</option>
        <option value='1'>一周之前</option>
        <option value='2'>一个月之前</option>
        <option value='3'>三个月之前</option>
        <option value='4'>半年之前</option>
        <option value='5'>一年之前</option>
      </select>
      <input name="drop_type_date" type="submit" value="确定" class="button" />
      </form>
      </td>
    </tr>
</table>
</div>

<form method="POST" action="admin_logs.php?act=batch_drop" name="listForm">
<!-- start admin_logs list -->
<div class="list-div" id="listDiv">

<table cellpadding="3" cellspacing="1">
  <tr>
    <th><input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox">
    <a href="javascript:listTable.sort('log_id'); ">编号</a><img src="/static/admin/images/sort_desc.gif"/></th>
    <th><a href="javascript:listTable.sort('user_id'); ">操作者</a></th>
    <th><a href="javascript:listTable.sort('log_time'); ">操作日期</a></th>
    <th>操作记录</th>
  </tr>
  <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <tr>
    <td width="10%"><span><input name="checkboxes[]" type="checkbox" value="465" /><?php echo $vo['log_id']; ?></span></td>
    <td width="15%" class="first-cell"><span><?php echo $vo['admin_name']; ?></span></td>
    <td width="20%" align="center"><span><?php echo date("Y-m-d H:i:s",$vo['log_time']); ?></span></td>
    <td width="40%" align="left"><span><?php echo $vo['log_info']; ?></span></td>
  </tr>
  <?php endforeach; endif; else: echo "" ;endif; ?>
    <tr>
    <td colspan="2"><input name="drop_type_id" type="submit" id="btnSubmit" value="清除日志" disabled="true" class="button" /></td>
    <td align="right" nowrap="true" colspan="10">      <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
            <div id="turn-page">
        总计  <span id="totalRecords">465</span>
        个记录分为 <span id="totalPages">31</span>
        页当前第 <span id="pageCurrent">1</span>
        页，每页 <input type='text' size='3' id='pageSize' value="15" onkeypress="return listTable.changePageSize(event)" />
        <span id="page-link">
          <a href="javascript:listTable.gotoPageFirst()">第一页</a>
          <a href="javascript:listTable.gotoPagePrev()">上一页</a>
          <a href="javascript:listTable.gotoPageNext()">下一页</a>
          <a href="javascript:listTable.gotoPageLast()">最末页</a>
          <select id="gotoPage" onchange="listTable.gotoPage(this.value)">
            <option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='31'>31</option>          </select>
        </span>
      </div>
</td>
  </tr>
</table>

</div>
<!-- end ad_position list -->

<script type="text/javascript" language="JavaScript">
  listTable.recordCount = 465;
  listTable.pageCount = 31;

    listTable.filter.sort_by = 'al.log_id';
    listTable.filter.sort_order = 'DESC';
    listTable.filter.record_count = '465';
    listTable.filter.page_size = '15';
    listTable.filter.page = '1';
    listTable.filter.page_count = '31';
    listTable.filter.start = '0';
    
  // onload = function()
  // {
  //   // &#65533;&#65533;&#700;&#65533;&#65533;鹜&#65533;&#65533;
  //   startCheckOrder();
  // }
  
</script>
<div id="footer">
共执行 5 个查询，用时 0.078254 秒，Gzip 已禁用，内存占用 1.070 MB<br />
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
    var global = $import("/static/admin/js/global.js","js");
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