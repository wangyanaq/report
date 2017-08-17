<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"C:\xampp\htdocs\report\public/../application/rnaseq\view\kegg\kegg.html";i:1502848383;s:70:"C:\xampp\htdocs\report\public/../application/pc/view/common\_meta.html";i:1502851846;s:72:"C:\xampp\htdocs\report\public/../application/pc/view/common\_footer.html";i:1502778348;}*/ ?>
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
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span>BC150548-1<span class="c-gray en">&gt;</span> KEGG富集分析 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="main_content">
		<div id="tab_demo" class="HuiTab">
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;同样的，我们可以对各个pathway上的差异表达基因数目进行统计。
			</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;此外，应用与GO富集相同的原理同样可以对差异基因进行KEGG pathway富集分析。
			</p>
			<p>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;针对差异基因KEGG富集分析的结果，我们以散点图的方式展示。结果图中只展示富集程度排名前30的KEGG pathway。
			</p>
			<h4>表头说明</h4>
			<table class="table table-border table-bordered table-bg mt-20">
				<tbody>
				<tr>
					<td colspan="2">*_kegg_class.xls表头说明</td>
				</tr>
				<tr class="text-c">
					<th>项目名称</th>
					<th>说明</th>
				</tr>
				<tr class="text-c">
					<td>pathway_3</td>
					<td>pathway的名称</td>
				</tr>
				<tr class="text-c">
					<td>pathway_3_num</td>
					<td>pathway中的差异基因数目</td>
				</tr>
				<tr class="text-c">
					<td>all_diff_gene_list</td>
					<td>pathway中的差异基因</td>
				</tr>
				<tr class="text-c">
					<td>pathway_2</td>
					<td>pathway的第二级分类</td>
				</tr>
				<tr class="text-c">
					<td>pathway_2_num</td>
					<td>第二级pathway分类中的差异基因数目</td>
				</tr>
				<tr class="text-c">
					<td>pathway_1</td>
					<td>pathway的最高一级分类</td>
				</tr>
				<tr class="text-c">
					<td>pathway_1_num</td>
					<td>最高一级pathway分类中的差异基因数目</td>
				</tr>
				</tbody>
				<tbody>
				<tr>
					<td colspan="2">*_KEGG_enrichment.xls表头说明</td>
				</tr>
				<tr class="text-c">
					<th>项目名称</th>
					<th>说明</th>
				</tr>
				<tr class="text-c">
					<td>Pathway_ID</td>
					<td>该PATHWAY在数据库中的ID</td>
				</tr>
				<tr class="text-c">
					<td>Pathway_ term</td>
					<td>该PATHWAY的描述</td>
				</tr>
				<tr class="text-c">
					<td>Diff_genes_in_pathway</td>
					<td>该PATHWAY 中差异基因的数目</td>
				</tr>
				<tr class="text-c">
					<td>Up_genes</td>
					<td>该PATHWAY term中上调基因的数目</td>
				</tr>
				<tr class="text-c">
					<td>Down_genes</td>
					<td>该PATHWAY term中下调基因的数目</td>
				</tr>
				<tr class="text-c">
					<td>Diff_genes_in_all_pathway</td>
					<td>能够对应到PATHWAY数据库中的所有差异基因的数目</td>
				</tr>
				<tr class="text-c">
					<td>All_gene_in_this_pathway</td>
					<td>该PATHWAY包含的目的物种的基因数目</td>
				</tr>
				<tr class="text-c">
					<td>All_genes_in_all_pathway</td>
					<td>PATHWAY数据库中包含的目的物种的基因总数</td>
				</tr>
				<tr class="text-c">
					<td>NCBI_gene_list</td>
					<td>该PATHWAY中差异基因的列表</td>
				</tr>
				<tr class="text-c">
					<td>Up_gene_list</td>
					<td>该PATHWAY中上调基因的列表</td>
				</tr>
				<tr class="text-c">
					<td>Down_gene_list</td>
					<td>该PATHWAY中下调基因的列表</td>
				</tr>
				<tr class="text-c">
					<td>	p-value</td>
					<td>富集分析得到的p-value</td>
				</tr>
				<tr class="text-c">
					<td>q-value</td>
					<td>对p-value的校正</td>
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
											<td>pathway上差异基因数目统计</td>
											<td>all.counts.g2_vs_g1.edgeR_kegg_class.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_kegg_class.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>pathway分类统计图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_class.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_class.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析结果</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>pathway上差异基因数目统计</td>
											<td>all.counts.g2_vs_g1.edgeR_kegg_class.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_kegg_class.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>pathway分类统计图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_class.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_class.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析结果</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>pathway上差异基因数目统计</td>
											<td>all.counts.g2_vs_g1.edgeR_kegg_class.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_kegg_class.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>pathway分类统计图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_class.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_class.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析结果</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>pathway上差异基因数目统计</td>
											<td>all.counts.g2_vs_g1.edgeR_kegg_class.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_kegg_class.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>pathway分类统计图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_class.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_class.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析结果</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>pathway上差异基因数目统计</td>
											<td>all.counts.g2_vs_g1.edgeR_kegg_class.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_kegg_class.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>pathway分类统计图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_class.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_class.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析结果</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>pathway上差异基因数目统计</td>
											<td>all.counts.g2_vs_g1.edgeR_kegg_class.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_kegg_class.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>pathway分类统计图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_class.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_class.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析结果</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>pathway上差异基因数目统计</td>
											<td>all.counts.g2_vs_g1.edgeR_kegg_class.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_kegg_class.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>pathway分类统计图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_class.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_class.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析结果</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>pathway上差异基因数目统计</td>
											<td>all.counts.g2_vs_g1.edgeR_kegg_class.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_kegg_class.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>pathway分类统计图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_class.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_class.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析结果</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>pathway上差异基因数目统计</td>
											<td>all.counts.g2_vs_g1.edgeR_kegg_class.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_kegg_class.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>pathway分类统计图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_class.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_class.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析结果</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>pathway上差异基因数目统计</td>
											<td>all.counts.g2_vs_g1.edgeR_kegg_class.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_kegg_class.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>pathway分类统计图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_class.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_class.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析结果</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>pathway上差异基因数目统计</td>
											<td>all.counts.g2_vs_g1.edgeR_kegg_class.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_kegg_class.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>pathway分类统计图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_class.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_class.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析结果</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>pathway上差异基因数目统计</td>
											<td>all.counts.g2_vs_g1.edgeR_kegg_class.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_kegg_class.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>pathway分类统计图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_class.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_class.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析结果</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf" target="_blank">下载</a></td>
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
			<h3 class="main_title">Pathway通路图下载</h3><br/>
			<div class="HuiTab">
				<p class="clearfix" style="height: 40px;line-height: 40px;">此文件包含了您项目中基因的通路图信息，点击右侧下载全部信息。(数据源采用KEGG数据库)
					<a   href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_2_KEGG_enrichment/pathway.zip">
						<img src="__PUBLIC__/image/downloading.gif"  style="float: right;width: 120px;height: 40px"/>
					</a>
				</p>
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