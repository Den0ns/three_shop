<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"D:\phpStudy\WWW\three_shop\public/../application/admin\view\privilege\role_node.html";i:1525425212;}*/ ?>

<!-- $Id: role_info.htm 14216 2010-01-08 02:27:21Z liuhui $ -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 添加角色 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/admin/styles/general.css" rel="stylesheet" type="text/css" />
<link href="/static/admin/styles/main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/static/admin/js/jquery-1.8.2.min.js"></script>
<!-- <script type="text/javascript" src="/static/admin/js/transport.js"></script><script type="text/javascript" src="/static/admin/js/common.js"></script> -->
<style>

  .panel-icloud .panel-right iframe {
    height: 300px;
    margin-top: 15px;
  }
  .panel-hint{
    top: 3%;
  }
</style>
<script language="JavaScript">

</script>
</head>
<body>
<h1>
  <span class="action-span"><a href="<?php echo url('Privilege/role_list'); ?>">角色列表</a></span>

<span class="action-span1"><a href="index.php?act=main">ECSHOP 管理中心</a> </span><span id="search_id" class="action-span1"> &nbsp;&nbsp;&nbsp;&nbsp; 添加角色 </span>
<div style="clear:both"></div>
</h1><form method="POST" action="" name="theFrom">
<div class="list-div">
<table width="100%">
  <tr >
    <td class="label"><strong><h2>角色:</h2></strong></td>
    <td>
      <span class="require-field" ><strong><h2><?php echo $role['role_name']; ?></h2></strong></span></td>
  </tr>
  </table>
<table cellspacing='1' id="list-table">
<?php if(is_array($node) || $node instanceof \think\Collection || $node instanceof \think\Paginator): $i = 0; $__LIST__ = $node;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
 <tr>
  <td width="18%" valign="top" class="first-cell">
    <input name="node_id[]" type="checkbox" value="<?php echo $vo['node_id']; ?>" class="parent" value="<?php echo $vo['node_id']; ?>" <?php if($vo['checked'] == 1): ?>checked<?php endif; ?>><?php echo $vo['node_name']; ?></td>
   <td> 
    <?php if(is_array($vo['son']) || $vo['son'] instanceof \think\Collection || $vo['son'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$k): $mod = ($i % 2 );++$i;?>
    <div style="width:200px;float:left;"> 
      <label for="goods_manage"><input type="checkbox" name="node_id[]" id="goods_manage" class="a" value="<?php echo $k['node_id']; ?>" <?php if($vo['checked'] == 1): ?>checked<?php endif; ?>  /><?php echo $k['node_name']; ?></label>
    </div> 
    <?php endforeach; endif; else: echo "" ;endif; ?>
 </tr>
 <?php endforeach; endif; else: echo "" ;endif; ?>
  <tr>
    <td align="center" colspan="2" >
      <input type="hidden" name="role_id" value="<?php echo $role['role_id']; ?>" />
      <input type="submit"   value=" 保存 " class="button" />&nbsp;&nbsp;&nbsp;
      <input type="reset" value=" 重置 " class="button" />

    </td>
  </tr>
</table>
</div>
</form>
<script>
  $(function(){
    $(".parent").click(function(){
      // alert(1)
      $(this).parent().next().find(".a").prop("checked",$(this).prop("checked"));
        // .next().find(".son").prop("checked",$(this).prop("checked"));
    })

    $(".a").click(function(){              
        if($(this).prop("checked")){
            $(this).parents('tr').find(".parent").prop("checked",true);
        }else{
            var flag = false;
            $(this).siblings().each(function(){
                if($(this).prop("checked")){
                    flag = true;
                    return
                }
            })
            if(flag == false){
                $(this).parents('tr').find(".parent").prop("checked",false);
            }
        }
    })
})
</script>

</body>
</html>