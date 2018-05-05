<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"D:\phpStudy\WWW\three_shop\public/../application/admin\view\privilege\node_list.html";i:1524972492;}*/ ?>

<!-- $Id: role_list.htm 14216 2008-03-10 02:27:21Z testyang $ -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 权限列表 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/admin/styles/general.css" rel="stylesheet" type="text/css" />
<link href="/static/admin/styles/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/static/admin/js/transport.js"></script>
<script type="text/javascript" src="/static/admin/js/common.js"></script>
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
  <span class="action-span"><a href="<?php echo url('Privilege/node_add'); ?>">添加权限</a></span>

<span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> &nbsp;&nbsp;&nbsp;&nbsp; 权限列表 </span>
<div style="clear:both"></div>
</h1><script type="text/javascript" src="/static/admin/js/utils.js"></script><script type="text/javascript" src="/static/admin/js/listtable.js"></script>

<div class="list-div" id="listDiv">

<table cellspacing='1' cellpadding='3' id='list-table'>
  <tr>
  <!-- <th></th> -->
    <th>权限名</th>
    <th>权限所在控制器</th>
    <th>权限所在方法</th>
    <th>权限是否显示</th>
    <th>操作</th>
  </tr>
  <?php if(is_array($node) || $node instanceof \think\Collection || $node instanceof \think\Paginator): $i = 0; $__LIST__ = $node;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
  <tr align="center" nodeid="<?php echo $v['node_id']; ?>" nodepid="<?php echo $v['node_pid']; ?>">
    <!-- <td><span class="show">[ + ]</span></td> -->
    <td><?php echo $v['node_name']; ?></td>
    <td><?php echo $v['node_controller']; ?></td>
    <td><?php echo $v['node_action']; ?></td>
    <td>
    <?php if($v['node_status'] == '1'): ?>
    显示
    <?php else: ?>
    不显示
    <?php endif; ?>
    </td>
    
    <td align="center" style="background-color: rgb(255, 255, 255);">
      <a href="../goods.php?id=31" target="_blank" title="查看"><img src="/static/admin/images/icon_view.gif" width="16" height="16" border="0"></a>
      <a href="goods.php?act=edit&amp;goods_id=31&amp;extension_code=" title="编辑"><img src="/static/admin/images/icon_edit.gif" width="16" height="16" border="0"></a>
      <a href="goods.php?act=copy&amp;goods_id=31&amp;extension_code=" title="复制"><img src="/static/admin/images/icon_copy.gif" width="16" height="16" border="0"></a>
      <a href="javascript:;" onclick="listTable.remove(31, '您确实要把该商品放入回收站吗？')" title="回收站"><img src="/static/admin/images/icon_trash.gif" width="16" height="16" border="0"></a>
      <img src="/static/admin/images/empty.gif" width="16" height="16" border="0">          </td>
  </tr>
  <?php endforeach; endif; else: echo "" ;endif; ?>

  </table>

</div>
<script type="text/javascript" language="JavaScript">

// $(function(){

//     $("tr[nodepid!='0']").hide().find("td .show").remove();
//         // $(".show").toggle(function(){
//         //     $(this).html("<span>[ - ]</span>");
//         //     var node_id = $(this).parents("tr").attr("nodeid");
//         //     $("tr[nodepid="+node_id+"]").show();
//         // },function(){
//         //     $(this).html("<span>[ + ]</span>");
//         //     var node_id = $(this).parents("tr").attr("nodeid");
//         //     $("tr[nodepid="+node_id+"]").hide();
//         // })
// })

</script>
<div id="footer">
共执行 3 个查询，用时 0.010059 秒，Gzip 已禁用，内存占用 1.051 MB<br />
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


</body>
</html>