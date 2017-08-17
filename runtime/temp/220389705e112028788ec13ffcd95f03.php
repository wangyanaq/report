<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"C:\xampp\htdocs\report\public/../application/rnaseq\view\diff_gene\diffGene.html";i:1502788553;s:70:"C:\xampp\htdocs\report\public/../application/pc/view/common\_meta.html";i:1502851846;s:72:"C:\xampp\htdocs\report\public/../application/pc/view/common\_footer.html";i:1502778348;}*/ ?>
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
<title>基因差异表达分析</title>
</head>
<body onLoad="setupZoom();">
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span>BC150548-1<span class="c-gray en">&gt;</span> 基因差异表达分析 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="main_content">
		<div id="tab_demo" class="HuiTab">
			<p>应用edgeR [7]进行样本间差异基因分析，得出p-value后进行多重假设检验校正，通过控制FDR（False Discovery Rate）来决定p-value的阈值[8,9]，校正后的p-value即q-value。同时，我们根据FPKM值计算差异表达倍数，即Fold-change。
			</p>
			<p>			差异基因筛选条件如下：</p>
			<p>1)q-value <= 0.05</p>
			<p>	2)Fold-change>=2</p>
			<h4>表头说明</h4>
			<table class="table table-border table-bordered table-bg mt-20">
				<tbody>
				<tr class="text-c">
					<th>项目名称</th>
					<th>说明</th>
				</tr>
				<tr class="text-c">
					<td>Gene_ID</td>
					<td>NCBI数据库的基因ID</td>
				</tr>
				<tr class="text-c">
					<td>Gene_name</td>
					<td>基因官方名称</td>
				</tr>
				<tr class="text-c">
					<td>Description</td>
					<td>	基因描述信息</td>
				</tr>
				<tr class="text-c">
					<td>Locus</td>
					<td>基因位置信息</td>
				</tr>
				<tr class="text-c">
					<td>Length</td>
					<td>转录本长度</td>
				</tr>
				<tr class="text-c">
					<td>*_FPKM</td>
					<td>转录本在各个样本中的表达量</td>
				</tr>
				<tr class="text-c">
					<td>FC</td>
					<td>fold-change值，即差异倍数</td>
				</tr>
				<tr class="text-c">
					<td>p-value</td>
					<td>显著性检验的p值</td>
				</tr>
				<tr class="text-c">
					<td>q-value</td>
					<td>对p-value的校正值</td>
				</tr>
				<tr class="text-c">
					<td>UP/DOWN regulate</td>
					<td>	上、下调关系</td>
				</tr>
				</tbody>
			</table>
			<p>各分组详细差异基因列表如下：</p>
			<div class="HuiTab">
				<div class="htmleaf-container">
					<br/>
					<div id="container_mRNA">
						<div id="parentHorizontalTab_mRNA">
							<ul class="resp-tabs-list hor_1">
								<li>g2_vs_g1</li>
								<li>g3_vs_g6</li>
								<li>g3_vs_g9</li>
								<li>g4_vs_g5</li>
								<li>g4_vs_g8</li>
								<li>g5_vs_g1</li>
								<li>g6_vs_g1</li>
								<li>g7_vs_g1</li>
								<li>g8_vs_g1</li>
								<li>g9_vs_g1</li>
								<li>g8_vs_g9</li>
								<li>g9_vs_g5</li>
							</ul>
							<div class="resp-tabs-container hor_1">
								<div>
									<table class="table table-border table-bordered table-bg mt-20">
										<tbody>
										<tr class="text-c">
											<th>类别</th>
											<th>文件名</th>
											<th>下载</th>
										</tr>
										<tr class="text-c">
											<td>所有基因</td>
											<td>all.counts.g2_vs_g1.edgeR_all.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_all.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>上调基因</td>
											<td>all.counts.g2_vs_g1.edgeR_differential_UP.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_differential_UP.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>下调基因</td>
											<td>all.counts.g2_vs_g1.edgeR_differential_DOWN.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_differential_DOWN.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>表达分布图</td>
											<td>all.counts.g2_vs_g1.edgeR_expression_distribution.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_expression_distribution.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>表达相关性散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_Correlation.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_Correlation.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>差异基因火山图</td>
											<td>all.counts.g2_vs_g1.edgeR_vocano.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_vocano.pdf" target="_blank">下载</a></td>
										</tr>

										</tbody>
									</table>
								</div>
								<div>
									<table class="table table-border table-bordered table-bg mt-20">
										<tbody>
										<tr class="text-c">
											<th>类别</th>
											<th>文件名</th>
											<th>下载</th>
										</tr>
										<tr class="text-c">
											<td>所有基因</td>
											<td>all.counts.g3_vs_g6.edgeR_all.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g3_vs_g6.edgeR_all.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>上调基因</td>
											<td>all.counts.g3_vs_g6.edgeR_differential_UP.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g3_vs_g6.edgeR_differential_UP.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>下调基因</td>
											<td>all.counts.g3_vs_g6.edgeR_differential_DOWN.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g3_vs_g6.edgeR_differential_DOWN.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>表达分布图</td>
											<td>all.counts.g3_vs_g6.edgeR_expression_distribution.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g3_vs_g6.edgeR_expression_distribution.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>表达相关性散点图</td>
											<td>all.counts.g3_vs_g6.edgeR_Correlation.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g3_vs_g6.edgeR_Correlation.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>差异基因火山图</td>
											<td>all.counts.g3_vs_g6.edgeR_vocano.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g3_vs_g6.edgeR_vocano.pdf" target="_blank">下载</a></td>
										</tr>

										</tbody>
									</table>
								</div>
								<div>
									<table class="table table-border table-bordered table-bg mt-20">
										<tbody>
										<tr class="text-c">
											<th>类别</th>
											<th>文件名</th>
											<th>下载</th>
										</tr>
										<tr class="text-c">
											<td>所有基因</td>
											<td>all.counts.g2_vs_g1.edgeR_all.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_all.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>上调基因</td>
											<td>all.counts.g2_vs_g1.edgeR_differential_UP.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_differential_UP.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>下调基因</td>
											<td>all.counts.g2_vs_g1.edgeR_differential_DOWN.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_differential_DOWN.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>表达分布图</td>
											<td>all.counts.g2_vs_g1.edgeR_expression_distribution.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_expression_distribution.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>表达相关性散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_Correlation.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_Correlation.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>差异基因火山图</td>
											<td>all.counts.g2_vs_g1.edgeR_vocano.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_vocano.pdf" target="_blank">下载</a></td>
										</tr>

										</tbody>
									</table>
								</div>
								<div>
									<table class="table table-border table-bordered table-bg mt-20">
										<tbody>
										<tr class="text-c">
											<th>类别</th>
											<th>文件名</th>
											<th>下载</th>
										</tr>
										<tr class="text-c">
											<td>所有基因</td>
											<td>all.counts.g2_vs_g1.edgeR_all.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_all.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>上调基因</td>
											<td>all.counts.g2_vs_g1.edgeR_differential_UP.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_differential_UP.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>下调基因</td>
											<td>all.counts.g2_vs_g1.edgeR_differential_DOWN.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_differential_DOWN.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>表达分布图</td>
											<td>all.counts.g2_vs_g1.edgeR_expression_distribution.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_expression_distribution.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>表达相关性散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_Correlation.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_Correlation.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>差异基因火山图</td>
											<td>all.counts.g2_vs_g1.edgeR_vocano.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_vocano.pdf" target="_blank">下载</a></td>
										</tr>

										</tbody>
									</table>
								</div>
								<div>
									<table class="table table-border table-bordered table-bg mt-20">
										<tbody>
										<tr class="text-c">
											<th>类别</th>
											<th>文件名</th>
											<th>下载</th>
										</tr>
										<tr class="text-c">
											<td>所有基因</td>
											<td>all.counts.g2_vs_g1.edgeR_all.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_all.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>上调基因</td>
											<td>all.counts.g2_vs_g1.edgeR_differential_UP.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_differential_UP.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>下调基因</td>
											<td>all.counts.g2_vs_g1.edgeR_differential_DOWN.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_differential_DOWN.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>表达分布图</td>
											<td>all.counts.g2_vs_g1.edgeR_expression_distribution.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_expression_distribution.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>表达相关性散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_Correlation.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_Correlation.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>差异基因火山图</td>
											<td>all.counts.g2_vs_g1.edgeR_vocano.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_vocano.pdf" target="_blank">下载</a></td>
										</tr>

										</tbody>
									</table>
								</div>
								<div>
									<table class="table table-border table-bordered table-bg mt-20">
										<tbody>
										<tr class="text-c">
											<th>类别</th>
											<th>文件名</th>
											<th>下载</th>
										</tr>
										<tr class="text-c">
											<td>所有基因</td>
											<td>all.counts.g2_vs_g1.edgeR_all.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_all.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>上调基因</td>
											<td>all.counts.g2_vs_g1.edgeR_differential_UP.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_differential_UP.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>下调基因</td>
											<td>all.counts.g2_vs_g1.edgeR_differential_DOWN.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_differential_DOWN.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>表达分布图</td>
											<td>all.counts.g2_vs_g1.edgeR_expression_distribution.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_expression_distribution.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>表达相关性散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_Correlation.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_Correlation.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>差异基因火山图</td>
											<td>all.counts.g2_vs_g1.edgeR_vocano.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_vocano.pdf" target="_blank">下载</a></td>
										</tr>

										</tbody>
									</table>
								</div>
								<div>
									<table class="table table-border table-bordered table-bg mt-20">
										<tbody>
										<tr class="text-c">
											<th>类别</th>
											<th>文件名</th>
											<th>下载</th>
										</tr>
										<tr class="text-c">
											<td>所有基因</td>
											<td>all.counts.g2_vs_g1.edgeR_all.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_all.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>上调基因</td>
											<td>all.counts.g2_vs_g1.edgeR_differential_UP.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_differential_UP.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>下调基因</td>
											<td>all.counts.g2_vs_g1.edgeR_differential_DOWN.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_differential_DOWN.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>表达分布图</td>
											<td>all.counts.g2_vs_g1.edgeR_expression_distribution.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_expression_distribution.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>表达相关性散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_Correlation.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_Correlation.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>差异基因火山图</td>
											<td>all.counts.g2_vs_g1.edgeR_vocano.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_vocano.pdf" target="_blank">下载</a></td>
										</tr>

										</tbody>
									</table>
								</div>
								<div>
									<table class="table table-border table-bordered table-bg mt-20">
										<tbody>
										<tr class="text-c">
											<th>类别</th>
											<th>文件名</th>
											<th>下载</th>
										</tr>
										<tr class="text-c">
											<td>所有基因</td>
											<td>all.counts.g2_vs_g1.edgeR_all.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_all.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>上调基因</td>
											<td>all.counts.g2_vs_g1.edgeR_differential_UP.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_differential_UP.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>下调基因</td>
											<td>all.counts.g2_vs_g1.edgeR_differential_DOWN.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_differential_DOWN.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>表达分布图</td>
											<td>all.counts.g2_vs_g1.edgeR_expression_distribution.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_expression_distribution.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>表达相关性散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_Correlation.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_Correlation.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>差异基因火山图</td>
											<td>all.counts.g2_vs_g1.edgeR_vocano.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_vocano.pdf" target="_blank">下载</a></td>
										</tr>

										</tbody>
									</table>
								</div>
								<div>
									<table class="table table-border table-bordered table-bg mt-20">
										<tbody>
										<tr class="text-c">
											<th>类别</th>
											<th>文件名</th>
											<th>下载</th>
										</tr>
										<tr class="text-c">
											<td>所有基因</td>
											<td>all.counts.g2_vs_g1.edgeR_all.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_all.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>上调基因</td>
											<td>all.counts.g2_vs_g1.edgeR_differential_UP.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_differential_UP.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>下调基因</td>
											<td>all.counts.g2_vs_g1.edgeR_differential_DOWN.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_differential_DOWN.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>表达分布图</td>
											<td>all.counts.g2_vs_g1.edgeR_expression_distribution.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_expression_distribution.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>表达相关性散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_Correlation.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_Correlation.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>差异基因火山图</td>
											<td>all.counts.g2_vs_g1.edgeR_vocano.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_vocano.pdf" target="_blank">下载</a></td>
										</tr>

										</tbody>
									</table>
								</div>
								<div>
									<table class="table table-border table-bordered table-bg mt-20">
										<tbody>
										<tr class="text-c">
											<th>类别</th>
											<th>文件名</th>
											<th>下载</th>
										</tr>
										<tr class="text-c">
											<td>所有基因</td>
											<td>all.counts.g2_vs_g1.edgeR_all.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_all.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>上调基因</td>
											<td>all.counts.g2_vs_g1.edgeR_differential_UP.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_differential_UP.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>下调基因</td>
											<td>all.counts.g2_vs_g1.edgeR_differential_DOWN.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_differential_DOWN.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>表达分布图</td>
											<td>all.counts.g2_vs_g1.edgeR_expression_distribution.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_expression_distribution.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>表达相关性散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_Correlation.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_Correlation.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>差异基因火山图</td>
											<td>all.counts.g2_vs_g1.edgeR_vocano.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_vocano.pdf" target="_blank">下载</a></td>
										</tr>

										</tbody>
									</table>
								</div>
								<div>
									<table class="table table-border table-bordered table-bg mt-20">
										<tbody>
										<tr class="text-c">
											<th>类别</th>
											<th>文件名</th>
											<th>下载</th>
										</tr>
										<tr class="text-c">
											<td>所有基因</td>
											<td>all.counts.g2_vs_g1.edgeR_all.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_all.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>上调基因</td>
											<td>all.counts.g2_vs_g1.edgeR_differential_UP.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_differential_UP.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>下调基因</td>
											<td>all.counts.g2_vs_g1.edgeR_differential_DOWN.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_differential_DOWN.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>表达分布图</td>
											<td>all.counts.g2_vs_g1.edgeR_expression_distribution.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_expression_distribution.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>表达相关性散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_Correlation.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_Correlation.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>差异基因火山图</td>
											<td>all.counts.g2_vs_g1.edgeR_vocano.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_vocano.pdf" target="_blank">下载</a></td>
										</tr>

										</tbody>
									</table>
								</div>
								<div>
									<table class="table table-border table-bordered table-bg mt-20">
										<tbody>
										<tr class="text-c">
											<th>类别</th>
											<th>文件名</th>
											<th>下载</th>
										</tr>
										<tr class="text-c">
											<td>所有基因</td>
											<td>all.counts.g2_vs_g1.edgeR_all.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_all.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>上调基因</td>
											<td>all.counts.g2_vs_g1.edgeR_differential_UP.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_differential_UP.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>下调基因</td>
											<td>all.counts.g2_vs_g1.edgeR_differential_DOWN.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_differential_DOWN.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>表达分布图</td>
											<td>all.counts.g2_vs_g1.edgeR_expression_distribution.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_expression_distribution.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>表达相关性散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_Correlation.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_Correlation.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>差异基因火山图</td>
											<td>all.counts.g2_vs_g1.edgeR_vocano.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_3_differential_gene/all.counts.g2_vs_g1.edgeR_vocano.pdf" target="_blank">下载</a></td>
										</tr>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<br/>
				</div>
			</div>
		</div>
		<br/>

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
<script>
	$(document).ready(function() {
		//Horizontal Tab
		$('#parentHorizontalTab_mRNA').easyResponsiveTabs({
			type: 'accordion', //Types: default, vertical, accordion
			width: 'auto', //auto or any width like 600px
			fit: true, // 100% fit in a container
			tabidentify: 'hor_1', // The tab groups identifier
			activate: function (event) { // Callback function if tab is switched
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