<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:89:"D:\phpStudy\WWW\three_shop\public/../application/admin\view\privilege\privilege_list.html";i:1525416427;}*/ ?>

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
    <th>管理员状态</th>
    <th>拥有的角色</th>
    <th>操作</th>
  </tr>
    
    <?php if(is_array($index) || $index instanceof \think\Collection || $index instanceof \think\Paginator): $i = 0; $__LIST__ = $index;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>    
     <tr admin_id="<?php echo $vo['admin_id']; ?>"align="center">       
     <td><?php echo $vo['admin_name']; ?></td> 
     <td><?php echo $vo['admin_email']; ?></td>
     <td><?php echo date('Y-m-d H:i:s',$vo['admin_addtime']); ?></td>
     <td><?php echo date('Y-m-d H:i:s',$vo['admin_last_login']); ?></td>
    <td>      
     <?php if($vo['admin_status'] == 0): ?>       
          启用     
   <?php else: ?>
          禁用    
    <?php endif; ?> 
    </td> 
    <td>
      <?php echo $vo['role_name']; ?>
    </td>  
    <td>  
         <a href="privilege.php?act=allot&id=3&user=shhaigonghuo1" title="分派角色">
         <img src="/static/admin/images/icon_priv.gif" border="0" height="16"width="16">
         </a>&nbsp;&nbsp; 
         <a href="privilege_update?id=<?php echo $vo['admin_id']; ?>" title="编辑">
         <img src="/static/admin/images/icon_edit.gif" border="0"height="16" width="16"></a>&nbsp;&nbsp;       
         <a href="<?php echo url('Privilege/delete',['admin_id'=>$vo['admin_id']]); ?>"title="移除">
         <img src="/static/admin/images/icon_drop.gif" border="0"height="16" width="16"></a>       
</td>
      
      
</tr>
      <?php endforeach; endif; else: echo "" ;endif; ?>
     
    


  </table>

</div>

<div id="footer">
</div>
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

<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://active.macromedia.com/flash2/cabs/swflash.cab#version=4,0,0,0" id="msgBeep" width="1" height="1">
  <param name="movie" value="/static/admin/images/online.swf">
  <param name="quality" value="high">
  <embed src="/static/admin/images/online.swf" name="msgBeep" id="msgBeep" quality="high" width="0" height="0" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?p1_prod_version=shockwaveflash">
  </embed>
</object>
<!-- <SCRIPT src="/jquery-1.8.2.min.js" type=text/javascript></SCRIPT> -->
<script>
// $.ajax(
// {
// type:"POST",
// url:"<?php echo url('privilege_list'); ?>",
// dataType:"json",
// data:{admin_id:admin_name:admin_email:admin_pwd:admin_addtime:admin_last_login:admin_status},
// success:function (msg)
// {
// if (msg.status==200)
// {
// alert(msg.txt)
// location.reload(true);
// }else
// {
// alert(msg.txt+msg.status);
// }

// },
// error:function (jqXHR)
// {
// alert(jqXHR.responseText);

// }
// }
// )

</script>

</body>
</html>