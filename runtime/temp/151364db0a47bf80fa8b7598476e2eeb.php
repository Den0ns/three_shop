<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"F:\web\WWW\three_shop\public/../application/admin\view\payment\payment_list.html";i:1524714028;}*/ ?>
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
  <span class="action-span"><a href="<?php echo url('Payment/payment_add'); ?>">添加新支付</a></span>
  <span class="action-span1"><a href="index.php?act=main">SHOP 管理中心</a> </span><span id="search_id" class="action-span1"> - 支付列表 </span>
  <div style="clear:both"></div>
</h1>

<div class="form-div">
 <style>
.text{text-align:center;}
 </style> 
</div>

<form method="post" action="" name="listForm" onsubmit="return confirmSubmit(this)">
  <!-- start goods list -->
  <div class="list-div" id="listDiv">
      <center>
    <table cellpadding="3" cellspacing="1">

      <tbody>
        <tr>
          <th><input type="checkbox">支付编号</th>
          <th>支付名称</th>
          <th>支付内容</th>
          <th>支付显示的顺序</th>
          <th>支付是否可用</th>
          <th>是否货到付款</th>
          <th>是否线上支付</th>
          <th>操作</th>
        </tr>
        <?php if(is_array($pay_sel) || $pay_sel instanceof \think\Collection || $pay_sel instanceof \think\Paginator): $i = 0; $__LIST__ = $pay_sel;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>    
        <tr>
          <td align="center"><input type="checkbox"><?php echo $v['pay_id']; ?></td>
          <td align="center" class="first-cell"><span><?php echo $v['pay_name']; ?></span></td>
          <td align="center"><span><?php echo $v['pay_desc']; ?></span></td>
          <td align="center"><span><?php echo $v['pay_order']; ?></span></td>
          <td align="center">
          <?php if($v['enabled']==1): ?>
          <img src="/static/admin/images/yes.gif" onclick="">
          <?php else: ?>
          <img src="/static/admin/images/no.gif" onclick="">
          <?php endif; ?>
          </td>
          <td align="center">
          <?php if($v['is_cod']==1): ?>
          <img src="/static/admin/images/yes.gif" onclick="">
          <?php else: ?>
          <img src="/static/admin/images/no.gif" onclick="">
          <?php endif; ?>
          </td>
          <td align="center">
          <?php if($v['is_online']==1): ?>
          <img src="/static/admin/images/yes.gif" onclick="">
          <?php else: ?>
          <img src="/static/admin/images/no.gif" onclick="">
          <?php endif; ?>
          </td>
          <td align="center">
             <button class="del" alt="<?php echo $v['pay_id']; ?>">删除</button>       
          </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
  <!-- start 这段代码没有格式化，只是暂时显示数据用 开发的时候将会删除-->
  <!-- end 这段代码没有格式化，只是暂时显示数据用 开发的时候将会删除-->
  </tbody>

 </table>
   </center>
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


</form>

<div id="footer">
  版权所有 &copy; 2006-2013 软工教育 - 高级PHP - 
</div>

</body>
</html>
<script type="text/javascript" src="/static/admin/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript"> 
        $('.del').click(function(){  
           var pay_id=$(this).attr('alt');  
            var _this=$(this);   
            $.ajax({  
                type: "GET",  
                url: "<?php echo url('Payment/payment_del'); ?>",  
                data: "pay_id="+pay_id,
                dataType: "json",  
                success: function(msg){  
                   if(msg==1){  
                       _this.parent().remove();  
  
                   }else {  
                       alert('删除失败');  
                   }  
                }  
            });  
        })  
</script>