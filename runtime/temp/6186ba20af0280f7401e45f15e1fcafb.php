<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"D:\phpStudy\WWW\PHPNO.13\shop\public/../application/admin\view\brand\brand_list.html";i:1525433210;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SHOP 管理中心 - 品牌管理 </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/static/admin/styles/general.css" rel="stylesheet" type="text/css" />
<link href="/static/admin/styles/main.css" rel="stylesheet" type="text/css" />
<style type="text/css">
  .page{
    padding-top: 20px;
  }
  .page li{
    width: 30px;
    height: 20px;
    line-height: 20px;
    text-align: center;
    font-size: 16px;
    text-decoration: none;
    list-style-type: none;
    float: left;
    margin-left: 15px;
    cursor: pointer;
  }
</style>
</head>
<body>

<h1>
<span class="action-span"><a href="<?php echo url('Brand/brand_add'); ?>">添加品牌</a></span>
<span class="action-span1"><a href="<?php echo url('Index/index'); ?>">SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 商品品牌 </span>
<div style="clear:both"></div>
</h1>

<div class="form-div">
  <form action="javascript:search_brand()" name="searchForm">
    <img src="/static/admin/images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH">
     <input type="text" name="brand_name" size="15">
    <input type="submit" value=" 搜索 " class="button">
  </form>
</div>

<form method="post" action="" name="listForm">
<!-- start brand list -->
<div class="list-div" id="listDiv">

  <table cellpadding="3" cellspacing="1">
    <tbody>
		<tr>
			<th>品牌名称</th>
			<th>品牌网址</th>
			<th>品牌描述</th>
			<th>品牌logo</th>
			<th>是否显示</th>
			<th>操作</th>
		</tr>
    <?php if(is_array($brand) || $brand instanceof \think\Collection || $brand instanceof \think\Paginator): $i = 0; $__LIST__ = $brand;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <tr>
			<td align="center" class="first-cell"><?php echo $vo['brand_name']; ?></td>
			<td align="center"><a href="<?php echo $vo['site_url']; ?>" target="_brank"><?php echo $vo['site_url']; ?></a></td>
			<td align="left" ><?php echo $vo['brand_desc']; ?></td>
			<td align="center"><img src="/uploads/<?php echo $vo['brand_logo']; ?>" width="60" height="40"></td>
			<td align="center">
        <?php if($vo['is_show'] == 1): ?>
        <img src="/static/admin/images/yes.gif"></td>
        <?php elseif($vo['is_show'] == 0): ?>
        <img src="/static/admin/images/no.gif"></td>
        <?php endif; ?>
			<td align="center">
				<a href="<?php echo url('Brand/brand_edit',['brand_id'=>$vo['brand_id']]); ?>}" title="编辑">编辑</a> |
				<a href="<?php echo url('Brand/brand_del',['brand_id'=>$vo['brand_id']]); ?>" title="移除">移除</a> 
			</td>
		</tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>
      
  </tbody></table>

  <div class="page">
    <?php echo $brand->render(); ?>
  </div>
<!-- end brand list -->
</div>
</form>
</body>
</html>