<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"C:\xampp\htdocs\report\public/../application/rnaseq\view\novel_gene\novelGene.html";i:1502848398;s:70:"C:\xampp\htdocs\report\public/../application/pc/view/common\_meta.html";i:1502851846;s:72:"C:\xampp\htdocs\report\public/../application/pc/view/common\_footer.html";i:1502778348;}*/ ?>
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
<title>新基因序列和表达定量</title>
</head>
<body >
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span>BC150548-1<span class="c-gray en">&gt;</span>新基因序列和表达定量<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="main_content">

		<div id="tab_demo" class="HuiTab">
			<p>利用BEDTools（version:2.16.1）[10,11]根据正负两条链分别进行转录本组装，根据原核生物转录特性，采用coverge标准化的方法进行gene区间组装，具体标准化方法为：基因组reads平均覆盖度150X的条件下选择连续覆盖度大于10,平均覆盖度大于30的，且length大于100的区间作为不同的基因区间，最后将组装好的gene区间跟注释文件中已有的基因进行比较，分别选择正负链中与已知基因没有overlap的区间作为新的基因，共找到428个新基因。</p>
		</div>
		<br/>
		<h3 class="main_title"  >新基因序列</h3>
		<div class="HuiTab">
			<table class="table table-border table-bordered table-bg mt-20">
				<tbody>
				<tr class="text-c">
					<th >文件名</th>
					<th width="20%" >下载链接</th>
				</tr>
				<tr class="text-c">
					<td>novel_gene.fa</td>
					<td width="20%"><a  href="__RNASEQ__/BC150548-1/4_novel_gene_analysis/4_1_novel_gene/novel_gene.fa" target="_blank">下载</a></td>
				</tr>
				<tr class="text-c">
					<td>novel_region.bed</td>
					<td width="20%"><a  href="__RNASEQ__/BC150548-1/4_novel_gene_analysis/4_1_novel_gene/novel_region.bed" >下载</a></td>
				</tr>
				<tr class="text-c">
					<td>novel_region.gtf</td>
					<td width="20%"><a  href="__RNASEQ__/BC150548-1/4_novel_gene_analysis/4_1_novel_gene/novel_region.gtf" target="_blank">下载</a></td>
				</tr>
				</tbody>
			</table>
		</div>
		<h3 class="main_title" >新基因表达定量</h3>
		<div class="HuiTab">
			<p>表格表头说明：</p>
			<table class="table table-border table-bordered table-bg mt-20">
				<tbody>
				<tr class="text-c">
					<th >项目名称</th>
					<th >说明</th>
				</tr>
				<tr class="text-c">
					<td>gene_id	</td>
					<td>新基因ID（基因ID由基因的位置信息组成包括：染色体、起始、终止、链）</td>
				</tr>
				<tr class="text-c">
					<td>	length	</td>
					<td>新基因的长度</td>
				</tr>
				<tr class="text-c">
					<td>*_FPKM	</td>
					<td>新基因在各个样本中的表达量</td>
				</tr>
				<tr class="text-c">
					<td>*_count	</td>
					<td>	基因在各个样本中的fragments个数</td>
				</tr>
				</tbody>
			</table>
			<p class="lable" class="clearfix" style="height: 40px;line-height: 40px;margin: 10px 0"> 点击右侧下载新基因表达定量结果文件   <a   href="__RNASEQ__/BC150548-1/4_novel_gene_analysis/4_1_novel_gene/novel_gene_expression.xls"  > <img src="__PUBLIC__/image/downloading.gif"  style="float: right;width: 120px;height: 40px"/></a></p>
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