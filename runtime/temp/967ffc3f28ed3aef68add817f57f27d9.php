<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"C:\xampp\htdocs\report\public/../application/rnaseq\view\target\target.html";i:1502848427;s:70:"C:\xampp\htdocs\report\public/../application/pc/view/common\_meta.html";i:1502851846;s:72:"C:\xampp\htdocs\report\public/../application/pc/view/common\_footer.html";i:1502778348;}*/ ?>
﻿<!DOCTYPE HTML>
  <html>
  <head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <LINK rel="Shortcut Icon" href="favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="__PUBLIC__/js/html5.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/respond.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/PIE_IE678.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/pc/H-ui.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/pc/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/pc/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/pc/icheck.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/pc/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/pc/style.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="__PUBLIC__/js/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/pc/normalize.css" />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/pc/default.css">
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/pc/easy-responsive-tabs.css " />
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/css/pc/article_list.css" />
<title>ncRNA靶基因</title>
</head>
<body onLoad="setupZoom();">
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span>BC150548-1<span class="c-gray en">&gt;</span> ncRNA靶基因 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="main_content">
		<h3 class="main_title" id="2_1">cis预测</h3>
		<div id="tab_demo" class="HuiTab">
			<p>采用Cis顺式调控及Trans反式调控以进行靶基因预测。</p>
			<p>选取与ncRNA距离小于10kb的gene作为cis作用的靶基因。</p>
			<p>表头说明：</p>
			<table class="table table-border table-bordered table-bg mt-20">
					<tbody>
					<tr class="text-c">
						<th>项目名称</th>
						<th >说明</th>
					</tr>
					<tr class="text-c">
						<td  >ncRNA_id</td>
						<td  >ncRNA的ID</td>
					</tr>
					<tr class="text-c">
						<td >target_gene_id</td>
						<td  >cis靶基因的Gene ID</td>
					</tr>
					<tr class="text-c">
						<td  > target_gene_name</td>
						<td  >	cis靶基因的名称</td>
					</tr>
					<tr class="text-c">
						<td >distance</td>
						<td >cis靶基因与ncRNA的距离（kb）</td>
					</tr>
					</tbody>
				</table>
			<p class="lable" class="clearfix" style="height: 40px;line-height: 40px;margin-top:25px"> 点击右侧下载cis预测结果文档   <a   href="__RNASEQ__/BC150548-1/5_ncRNA/5_4_ncRNA_target_prediction/ncRNA_cis_target.xls"  > <img src="__PUBLIC__/image/downloading.gif"  style="float: right;width: 120px;height: 40px"/></a></p>
			<br/>
		</div>
		<br/>
		<h3 class="main_title" id="2_2">trans预测</h3>
		<div class="HuiTab">
			<p>
				Trans预测采用数据库是数据库是物种对应的gene序列数据库。先采用blast选择出序列上具有互补性或相似性的序列，再利用RNAplex[7]计算两序列之间的互补能量，选择出阈值以上的序列。
			</p>
			<p>表头说明：</p>
			<div class="info">
				<table class="table table-border table-bordered table-bg mt-20">
					<tbody>
					<tr class="text-c">
						<th>项目名称</th>
						<th >说明</th>
					</tr>
					<tr class="text-c">
						<td  >ncRNA_id</td>
						<td  >ncRNA的ID</td>
					</tr>
					<tr class="text-c">
						<td >Trans_target_gene_id</td>
						<td  >trans靶基因的Gene ID</td>
					</tr>
					<tr class="text-c">
						<td  > Trans_target_gene_name</td>
						<td  >trans靶基因的名称</td>
					</tr>
					<tr class="text-c">
						<td >Trans_Evalue</td>
						<td >预测的E value值</td>
					</tr>
					</tbody>
				</table>
			</div>
			<p class="lable" class="clearfix" style="height: 40px;line-height: 40px;margin-top:25px"> 点击右侧下载trans预测结果文档   <a   href="__RNASEQ__/BC150548-1/5_ncRNA/5_4_ncRNA_target_prediction/ncRNA_trans_target.xls"  > <img src="__PUBLIC__/image/downloading.gif"  style="float: right;width: 120px;height: 40px"/></a></p>
		</div>
	<br/>
	</div>
</div>

<!--login welcome -->
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.11.3.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/H-ui.js"></script>
<!--login-->
<script type="text/javascript" src="__PUBLIC__/js/layer.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.contextmenu.r2.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/WdatePicker.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/owl.carousel.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/easyResponsiveTabs.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/FancyZoom.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/FancyZoomHTML.js"></script>

<script type="text/javascript">
/*三种RNA显示图*/
	$(function() {
		$.Huitab("#tab_demo .tabBar span","#tab_demo .tabCon","current","click","1")
	});
$(function() {
	$.Huitab("#tab_dem .tabBar span","#tab_dem .tabCon","current","click","1")
});


/*中间图显示*/
	$(document).ready(function() {
		//Horizontal Tab
		$('#parentHorizontalTab_mRNA').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion
			width: 'auto', //auto or any width like 600px
			fit: true, // 100% fit in a container
			tabidentify: 'hor_1', // The tab groups identifier
			activate: function(event) { // Callback function if tab is switched
				var $tab = $(this);
				var $info = $('#nested-tabInfo');
				var $name = $('span', $info);
				$name.text($tab.text());
				$info.show();
			}
		});
		$('#parentHorizontalTab_lncRNA').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion
			width: 'auto', //auto or any width like 600px
			fit: true, // 100% fit in a container
			tabidentify: 'hor_1', // The tab groups identifier
			activate: function(event) { // Callback function if tab is switched
				var $tab = $(this);
				var $info = $('#nested-tabInfo');
				var $name = $('span', $info);
				$name.text($tab.text());
				$info.show();
			}
		});
		$('#parentHorizontalTab_circRNA').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion
			width: 'auto', //auto or any width like 600px
			fit: true, // 100% fit in a container
			tabidentify: 'hor_1', // The tab groups identifier
			activate: function(event) { // Callback function if tab is switched
				var $tab = $(this);
				var $info = $('#nested-tabInfo');
				var $name = $('span', $info);
				$name.text($tab.text());
				$info.show();
			}
		});
	});
</script> 
</body>
</html>