<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"C:\xampp\htdocs\report\public/../application/rnaseq\view\prediction\prediction.html";i:1502848403;s:70:"C:\xampp\htdocs\report\public/../application/pc/view/common\_meta.html";i:1502851846;s:72:"C:\xampp\htdocs\report\public/../application/pc/view/common\_footer.html";i:1502778348;}*/ ?>
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
<title>ncRNA预测</title>
</head>
<body  >
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span>BC150548-1<span class="c-gray en">&gt;</span>ncRNA预测<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="main_content">
		<p>将得到的新基因进行序列编码预测分析，预测流程如下：</p>
		<div id="tab_demo" class="HuiTab">
		<p>
				Step1：去除glimmer软件[12,13,14]预测为编码基因的序列；<br/>
				Step2：去除ORF大于200的序列；<br/>
				Step3：利用Pfam[15] 、CPC[16]预测，选择Pfam比对不显著 & CPC score<0的序列作为潜在的ncRNA。</p>
		</div>
		<br/>

		<h3 class="main_title">预测结果</h3>
		<div class="HuiTab">
			<p>表格表头说明：</p>
			<table class="table table-border table-bordered table-bg mt-20">
				<tbody>
				<tr class="text-c">
					<th >项目名称</th>
					<th >说明</th>
				</tr>
				<tr class="text-c">
					<td>ncRNA_id	</td>
					<td>ncRNA的ID号</td>
				</tr>
				<tr class="text-c">
					<td>	length	</td>
					<td>ncRNA的长度</td>
				</tr>
				<tr class="text-c">
					<td>CPC_score	</td>
					<td>CPC_score</td>
				</tr>
				<tr class="text-c">
					<td>orf	</td>
					<td>orf长度</td>
				</tr>
				</tbody>
			</table>
			<p class="lable" class="clearfix" style="height: 40px;line-height: 40px;margin: 10px 0"> 点击右侧下载ncRNA预测结果文件   <a   href="__RNASEQ__/BC150548-1/5_ncRNA/5_1_ncRNA_prediction/ncRNA_predict_result.xls"  > <img src="__PUBLIC__/image/downloading.gif"  style="float: right;width: 120px;height: 40px"/></a></p>
		</div>
		<h3 class="main_title">序列文件</h3>
		<div class="HuiTab">
			<table class="table table-border table-bordered table-bg mt-20">
				<tbody>
				<tr class="text-c">
					<th >文件名</th>
					<th width="20%" >下载链接</th>
				</tr>
				<tr class="text-c">
					<td>ncRNA.fa</td>
					<td width="20%"><a  href="__RNASEQ__/BC150548-1/5_ncRNA/5_1_ncRNA_prediction/ncRNA.fa" target="_blank">下载</a></td>
				</tr>
				</tbody>
			</table>
		</div>
		<h3 class="main_title">bed文件</h3>
		<div class="HuiTab">
			<p>表格表头说明：</p>
			<table class="table table-border table-bordered table-bg mt-20">
				<tbody>
				<tr class="text-c">
					<th >项目名称</th>
					<th >说明</th>
				</tr>
				<tr class="text-c">
					<td>chr</td>
					<td>染色体</td>
				</tr>
				<tr class="text-c">
					<td>start</td>
					<td>ncRNA的起始位置</td>
				</tr>
				<tr class="text-c">
					<td>end	</td>
					<td>ncRNA的终止位置</td>
				</tr>
				<tr class="text-c">
					<td>ncRNA_id</td>
					<td>ncRNA的ID号</td>
				</tr>
				<tr class="text-c">
					<td>strand</td>
					<td>正负链信息</td>
				</tr>
				</tbody>
			</table>
			<p class="lable" class="clearfix" style="height: 40px;line-height: 40px;margin: 10px 0"> 点击右侧下载ncRNA bed文件   <a   href="__RNASEQ__/BC150548-1/5_ncRNA/5_1_ncRNA_prediction/ncRNA.bed"  > <img src="__PUBLIC__/image/downloading.gif"  style="float: right;width: 120px;height: 40px"/></a></p>
		</div>
	<br/>
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
</body>
</html>