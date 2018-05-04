<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"D:\phpStudy\WWW\PHPNO.13\shop\public/../application/admin\view\order\order_list.html";i:1524455380;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link href="/static/admin/styles/general.css" rel="stylesheet" type="text/css" />
	<link href="/static/admin/styles/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>

	<span class="action-span1"><a href="index.php?act=main">SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 订单列表 </span>
	<div style="clear:both"></div>
</h1>

<div class="form-div">
  <form action="" name="searchForm">
    <img src="/static/admin/images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH">
        <!-- 订单号-->
        订单号 <input type="text" name="order_number" size="15" />
        <!-- 收货人-->
        收货人 <input type="text" name="consignee" size="15" />
        <!-- 订单状态 -->
        订单状态 
        <select name="order_status" id="">
        	<potion value="请选择">请选择</potion>
        	<potion value="待确认">待确认</potion>
        	<potion value="待付款">待付款</potion>
        	<potion value="待发货">待发货</potion>
        	<potion value="已完成">已完成</potion>
        	<potion value="付款中">付款中</potion>
        	<potion value="取消">取消</potion>
        	<potion value="无效">无效</potion>
        	<potion value="退货">退货</potion>
        	<potion value="部分退货">部分退货</potion>
        </select>
	<!-- 关键字 -->
		关键字 <input type="text" name="keyword" size="15">
		<input type="submit" value=" 搜索 " class="button">
  </form>
</div>
  <!-- start goods list -->
	<div class="list-div" id="listDiv">
		<table cellpadding="3" cellspacing="1">
			<tbody>
				<tr>
					<th><input type="checkbox">订单号</th>
					<th>下单时间</th>
					<th>收货人</th>
					<th>总金额</th>
					<th>应付金额</th>
					<th>订单状态</th>
					<th>操作</th>
				</tr>
				<tr></tr>
				<tr>
					<td><input type="checkbox" name="checkboxes[]" value="201605117894">201605117894</td>
					<td class="first-cell"><span>05-11 16:11</span></td>
					<td><span>admin</span></td>
					<td align="right"><span>3010.00</span></td>
					<td align="center"><span onclick="">100</span></td>
					<td align="right"><span onclick="">已发货</span></td>
					<td align="center">
						<a href="javascript:;" onclick="listTable.remove(32, '您确实要把该商品放入回收站吗？')" title="回收站"><img src="/static/admin/images/icon_trash.gif" width="16" height="16" border="0"></a>
						<a href="<?php echo url('Order/order_edit'); ?>">查看详情</a>          
					</td>
				</tr>
  </tbody>
 </table>
<!-- end goods list -->

	<!-- 分页 -->
	<table id="page-table" cellspacing="0">
		<tbody>
			<tr>
				<td align="right" nowrap="true" style="background-color: rgb(255, 255, 255);">
					<!-- $Id: page.htm 14216 2008-03-10 02:27:21Z testyang $ -->
					<div id="turn-page">
						总计  <span id="totalRecords">22</span>个记录分为 <span id="totalPages">2</span>页当前第 <span id="pageCurrent">1</span>
						页，每页 <input type="text" size="3" id="pageSize" value="15" onkeypress="return listTable.changePageSize(event)">
						<span id="page-link">
							<a href="javascript:listTable.gotoPageFirst()">第一页</a>
							<a href="javascript:listTable.gotoPagePrev()">上一页</a>
							<a href="javascript:listTable.gotoPageNext()">下一页</a>
							<a href="javascript:listTable.gotoPageLast()">最末页</a>
							<select id="gotoPage" onchange="listTable.gotoPage(this.value)">
							<option value="1">1</option><option value="2">2</option>          </select>
						</span>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</div>

<div id="footer">
	版权所有 &copy; 2006-2013 软工教育 - 高级PHP - 
</div>

</body>
</html>