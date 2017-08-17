<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:92:"C:\xampp\htdocs\report\public/../application/rnaseq\view\gene_expression\geneExpression.html";i:1502848848;s:70:"C:\xampp\htdocs\report\public/../application/pc/view/common\_meta.html";i:1502851846;}*/ ?>
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
<title>项目概况</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span>BC150548-1 <span class="c-gray en">&gt;</span>基因水平表达定量 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="main_content">
		<h3 class="article_title"  >简介</h3>
		<div class="HuiTab">
			<div class="center">
				<p>
					在转录组测序中，我们可以通过mapping到基因区域的reads数目来估计基因表达的水平，但reads数除了与基因表达水平成正比外，还与基因本身的长度、测序的数据量有关。为了使不同基因、不同样本间的基因表达水平具有可比性，将reads转化成FPKM（Fragments Per Kilobase of exon model per Million mapped reads）进行基因表达量的标准化 [3]。
				</p>
				<p>我们首先应用HTSeq[4]对TopHat比对后每个基因的Fragments数进行计数，然后用TMM（trimmed mean of M values）[5]法进行归一化，最后利用perl脚本计算出每个基因的FPKM值。</p>
				<p>公式如下：</p>
				<p><img src="__PUBLIC__/image/data/formula.png" alt="公式"/></p>
				<p>其中：
				</p>
				<p>
					total exon fragments：比对到基因exon上的fragment数目（fragment: a pair of reads）
				</p>
				<p>
					exon length：为基因exon的总长度
				</p>
				<p>
					mapped reads：比对到参考基因组的总reads数目
				</p>
			</div>
		</div>
			<br/>
			<br/>
		<h3 class="article_title">结果下载</h3>
		<div class="HuiTab">
			<p>结果文档表头说明：</p>
			<table class="table table-border table-bordered table-bg mt-20">
				<tbody>
				<tr>
					<td  style="text-align:center"><b> 项目名称</b></td>
					<td  style="text-align:center"><b> 说明</b></td>
				</tr>
				<tr>
					<td   style="text-align:center">Gene_ID</td>
					<td   style="text-align:center">NCBI数据库的基因ID</td>
				</tr>
				<tr>
					<td  style="text-align:center">Gene_name</td>
					<td style="text-align:center">基因官方名称</td>
				</tr>
				<tr>
					<td   style="text-align:center">Description</td>
					<td  style="text-align:center">基因描述信息</td>
				</tr>
				<tr>
					<td  style="text-align:center">Locus</td>
					<td  style="text-align:center">基因位置信息</td>
				</tr>
				<tr>
					<td  style="text-align:center">*_FPKM</td>
					<td   style="text-align:center">基因在各个样本中的表达量</td>
				</tr>
				<tr>
					<td   style="text-align:center">*_count</td>
					<td   style="text-align:center">基因在各个样本中的fragments个数</td>
				</tr>
				</tbody>
			</table>
			<p class="lable" class="clearfix" style="height: 40px;line-height: 40px;margin: 15px 0"> 点击右侧下载“基因表达定量”分析结果 <a   href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_1_gene_expression/gene_expression.xls"  > <img src="__PUBLIC__/image/downloading.gif"  style="float: right;width: 120px;height: 40px"/></a></p>
		<div/>
			<br/>
			<br/>
	</div>
	</div>
</div>
<script type="text/javascript">
</script>
</body>
</html>