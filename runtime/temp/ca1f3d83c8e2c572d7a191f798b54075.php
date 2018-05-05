<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"F:\web\WWW\three_shop\public/../application/admin\view\advert\advert_list.html";i:1524575368;}*/ ?>

<!-- $Id: ads_list.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 广告列表 </title>
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
  .text{text-align:center;}
  .pagination{text-align:center;margin-top:20px;margin-bottom: 20px;}  
.pagination li{margin:0px 10px; border:1px solid #e6e6e6;padding: 3px 8px;display: inline-block;}  
.pagination .active{background-color: #46A3FF;color: #fff;}  
.pagination .disabled{color:#aaa;} 
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
<!--遮罩-->
<div class="mask-black" id="Mask"></div>
<!--遮罩-->
<h1>
	<span class="action-span"><a href="<?php echo url('Advert/advert_add'); ?>">添加广告</a></span>

<span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> -广告列表 </span>
<div style="clear:both"></div>
</h1><script type="text/javascript" src="/static/admin/js/utils.js"></script><script type="text/javascript" src="/static/admin/js/listtable.js"></script>
<form method="post" action="" name="listForm">
<!-- start ads list -->
<div class="list-div" id="listDiv">

<table cellpadding="3" cellspacing="1" class="text">
<center>  
  <tr>
    <th><a href="javascript:listTable.sort('ad_name'); ">广告名称</a><img src="/static/admin/images/sort_desc.gif"/></th>
    <th><a href="javascript:listTable.sort('position_id'); ">广告链接</a></th>
    <th><a href="javascript:listTable.sort('media_type'); ">是否启用</a></th>
    <th><a href="javascript:listTable.sort('click_count'); ">广告图片</a></th>
    <th>操作</th>
  </tr>
   <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
    <tr class="text">
    <td class="first-cell">
    <span onclick="javascript:listTable.edit(this, 'edit_ad_name', 9)"><?php echo $v['ad_name']; ?></span>
    </td>
    <td align="text"><?php echo $v['ad_img']; ?><span></span>
    </td>
    <td align="text"><span>
            <?php if($v['ad_status'] == 1): ?>  
          <a href="">上架 </a> 
    <?php else: ?>  
          <a href="">下架 </a> 
    <?php endif; ?>
    </span></td>
    <td align="text"><span><a href="/uploads/<?php echo $v['ad_img']; ?>"><img src="/uploads/<?php echo $v['ad_img']; ?>" width="250px" height="80px" /></a></span></td>
    <td align="text">
        <span>
            <a href="up?id=<?php echo $v['ad_id']; ?>" title="编辑">编辑</a>
            <a href="del?id=<?php echo $v['ad_id']; ?>" class="ad_del" alt="" >删除</a>
        </span>
    </td>
  </tr>
  <?php endforeach; endif; else: echo "" ;endif; ?>
    <tr>
    <td align="right" nowrap="true" colspan="10">      <!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
            <div id="turn-page">
        总计  <span id="totalRecords"><?php echo $count; ?></span>
        个记录分为一页<span id="totalPages"><?php echo $page_res; ?></span>
        条当前第 <span id="pageCurrent"><?php echo $page_size; ?></span>
        页
        <span id="page-link">
        <?php echo $res->render(); ?>
          <!-- <a href="javascript:listTable.gotoPageFirst()"></a> -->
        
<!--           <a href="javascript:listTable.gotoPagePrev()">上一页</a>
          <a href="javascript:listTable.gotoPageNext()">下一页</a>
          <a href="javascript:listTable.gotoPageLast()">最末页</a> -->
        </span>

      </div>
</td>
  </tr>
</center>
</table>

</div>
<!-- end ad_position list -->
</form>

<div id="footer">
共执行 4 个查询，用时 0.060853 秒，Gzip 已禁用，内存占用 1.187 MB<br />
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

<script type="text/javascript" src="/static/admin/js/jquery-1.8.2.min.js"></script>
<script language="JavaScript">
//单删
        // $('.ad_del').click(function(){  
        //    var ad_id  = $(this).attr('alt'); 
        //    obj=$(this);
        //    // var _this = $('.ad_del'); 
        //    //alert(obj) 
        //     $.ajax({
        //         type: "POST",
        //         url: "<?php echo url('Advert/del'); ?>",
        //         data: "ad_id="+ad_id,
        //         dataType: "json",
        //         success:function(msg){
        //          if(msg.status==1){
        //             obj.parent().parent().parent("tr").remove();
        //             alert("删除成功");
        //          }
        //          if(msg.status==2){
        //             alert("删除失败");
        //          }
        //         }
        //     });  
        // })  
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