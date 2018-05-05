<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"F:\web\WWW\three_shop\public/../application/admin\view\advert\updata.html";i:1524556742;}*/ ?>

<!-- $Id: ads_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 添加广告 </title>
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
// var process_request = "正在处理您的请求...";
// var todolist_caption = "记事本";
// var todolist_autosave = "自动保存";
// var todolist_save = "保存";
// var todolist_clear = "清除";
// var todolist_confirm_save = "是否将更改保存到记事本？";
// var todolist_confirm_clear = "是否清空内容？";
// var posit_name_empty = "广告位名称不能为空!";
// var ad_width_empty = "请输入广告位的宽度!";
// var ad_height_empty = "请输入广告位的高度!";
// var ad_width_number = "广告位的宽度必须是一个数字!";
// var ad_height_number = "广告位的高度必须是一个数字!";
// var no_outside_address = "建议您指定该广告所要投放的站点的名称，方便于该广告的来源统计!";
// var width_value = "广告位的宽度值必须在1到1024之间!";
// var height_value = "广告位的高度值必须在1到1024之间!";
// var ad_name_empty = "请输入广告名称!";
// var ad_link_empty = "请输入广告的链接URL!";
// var ad_text_empty = "广告的内容不能为空!";
// var ad_photo_empty = "广告的图片不能为空!";
// var ad_flash_empty = "广告的flash不能为空!";
// var ad_code_empty = "广告的代码不能为空!";
// var empty_position_style = "广告位的模版不能为空!";
// //-->
// /*关闭按钮*/
//   function btnCancel(item){
//     var par  = item.offsetParent;
//     var mask  = document.getElementById('Mask')||null;
//     var cloudFrame = document.getElementById('cloudFrame')||null;
//     par.style.display = 'none';
//     if(mask){mask.style.display = 'none';}
//     if(cloudFrame){cloudFrame.src='';}
//   }
</script>
</head>
<body>

<h1>
<!--遮罩-->
<div class="mask-black" id="Mask"></div>
<!--遮罩-->
	<span class="action-span"><a href="<?php echo url('Advert/advert_list'); ?>">广告列表</a></span>

<span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="inion-span1"> &nbsp;&nbsp;&nbsp;&nbsp; 添加广告 </span>
<div style="clear:both"></div>
</h1>
<!-- <script type="text/javascript" src="/static/admin/js/calendar.php?lang=zh_cn"></script>
<link href="/static/admin/js/calendar/calendar.css" rel="stylesheet" type="text/css" /> -->
<div class="main-div">
<form action="updatas?id=<?php echo $res['ad_id']; ?>" method="post" enctype="multipart/form-data">
  <table width="100%" id="general-table">
    <tr>
      <td  class="label">
        <a href="javascript:showNotice('NameNotic');" title="点击此处查看提示信息">
        <img src="/static/admin/images/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>广告名称</td>
      <td>
        <input type="text" name="ad_name" value="<?php echo $res['ad_name']; ?>" size="35" />
        <br /><span class="notice-span" style="display:block"  id="NameNotic">广告名称只是作为辨别多个广告条目之用，并不显示在广告中</span>
      </td>
    </tr>
    <tr>
      <tbody id="0">
    <tr>
      <td  class="label">广告链接</td>
      <td>
        <input type="text" name="ad_link" value="<?php echo $res['ad_link']; ?>" size="35" />
      </td>
    </tr>
    <tr>
      <td  class="label">
        <a href="javascript:showNotice('AdCodeImg');" title="点击此处查看提示信息">
        <img src="/static/admin/images/notice.gif" width="16" height="16" border="0" alt="点击此处查看提示信息"></a>上传广告图片</td>
      <td>
        <input type='file' name='ad_img' size='35' value="<?php echo $res['ad_img']; ?>" />
        <br /><span class="notice-span" style="display:block"  id="AdCodeImg">上传该广告的图片文件,或者你也可以指定一个远程URL地址为广告的图片</span>
      </td>
    </tr>
    </tbody>
    <tr>
      <td  class="label">是否开启</td>
      <td>
        <input type="radio" name="ad_status" value="<?php echo $res['ad_status']; ?>"  checked="true"  />开启    
        <input type="radio" name="ad_status" value="<?php echo $res['ad_status']; ?>"  />关闭    
      </td>
    </tr>
    <tr>
       <td class="label">&nbsp;</td>
       <td>
       <button class="but" type="submit" value="">确定</button>
       <button class="but" type="submit" value="">重置</button>
     <!--    <input type="submit" value=" 确定 "/>
        <input type="reset" value=" 重置 "/> -->
      </td>
    </tr>
 </table>

</form>
</div>
<script type="text/javascript" src="//static/admin/js/utils.js"></script><script type="text/javascript" src="/static/admin/js/validator.js"></script><script language="JavaScript"> 
</script>
<div id="footer">
共执行 3 个查询，用时 0.030697 秒，Gzip 已禁用，内存占用 1.173 MB<br />
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

<script language="JavaScript">
// document.onmousemove=function(e)
// {
//   var obj = Utils.srcElement(e);
//   if (typeof(obj.onclick) == 'function' && obj.onclick.toString().indexOf('listTable.edit') != -1)
//   {
//     obj.title = '点击修改内容';
//     obj.style.cssText = 'background: #278296;';
//     obj.onmouseout = function(e)
//     {
//       this.style.cssText = '';
//     }
//   }
//   else if (typeof(obj.href) != 'undefined' && obj.href.indexOf('listTable.sort') != -1)
//   {
//     obj.title = '点击对列表排序';
//   }
// }
// <!--


// var MyTodolist;
// function showTodoList(adminid)
// {
//   if(!MyTodolist)
//   {
//     var global = $import("..//static/admin/js/global.js","js");
//     global.onload = global.onreadystatechange= function()
//     {
//       if(this.readyState && this.readyState=="loading")return;
//       var md5 = $import("/static/admin/js/md5.js","js");
//       md5.onload = md5.onreadystatechange= function()
//       {
//         if(this.readyState && this.readyState=="loading")return;
//         var todolist = $import("/static/admin/js/todolist.js","js");
//         todolist.onload = todolist.onreadystatechange = function()
//         {
//           if(this.readyState && this.readyState=="loading")return;
//           MyTodolist = new Todolist();
//           MyTodolist.show();
//         }
//       }
//     }
//   }
//   else
//   {
//     if(MyTodolist.visibility)
//     {
//       MyTodolist.hide();
//     }
//     else
//     {
//       MyTodolist.show();
//     }
//   }
// }

// if (Browser.isIE)
// {
//   onscroll = function()
//   {
//     //document.getElementById('calculator').style.top = document.body.scrollTop;
//     document.getElementById('popMsg').style.top = (document.body.scrollTop + document.body.clientHeight - document.getElementById('popMsg').offsetHeight) + "px";
//   }
// }

// if (document.getElementById("listDiv"))
// {
//   document.getElementById("listDiv").onmouseover = function(e)
//   {
//     obj = Utils.srcElement(e);

//     if (obj)
//     {
//       if (obj.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode;
//       else if (obj.parentNode.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode.parentNode;
//       else return;

//       for (i = 0; i < row.cells.length; i++)
//       {
//         if (row.cells[i].tagName != "TH") row.cells[i].style.backgroundColor = '#F4FAFB';
//       }
//     }

//   }

//   document.getElementById("listDiv").onmouseout = function(e)
//   {
//     obj = Utils.srcElement(e);

//     if (obj)
//     {
//       if (obj.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode;
//       else if (obj.parentNode.parentNode.tagName.toLowerCase() == "tr") row = obj.parentNode.parentNode;
//       else return;

//       for (i = 0; i < row.cells.length; i++)
//       {
//           if (row.cells[i].tagName != "TH") row.cells[i].style.backgroundColor = '#FFF';
//       }
//     }
//   }

//   document.getElementById("listDiv").onclick = function(e)
//   {
//     var obj = Utils.srcElement(e);

//     if (obj.tagName == "INPUT" && obj.type == "checkbox")
//     {
//       if (!document.forms['listForm'])
//       {
//         return;
//       }
//       var nodes = document.forms['listForm'].elements;
//       var checked = false;

//       for (i = 0; i < nodes.length; i++)
//       {
//         if (nodes[i].checked)
//         {
//            checked = true;
//            break;
//          }
//       }

//       if(document.getElementById("btnSubmit"))
//       {
//         document.getElementById("btnSubmit").disabled = !checked;
//       }
//       for (i = 1; i <= 10; i++)
//       {
//         if (document.getElementById("btnSubmit" + i))
//         {
//           document.getElementById("btnSubmit" + i).disabled = !checked;
//         }
//       }
//     }
//   }

// }

//-->
</script>
</body>
</html>