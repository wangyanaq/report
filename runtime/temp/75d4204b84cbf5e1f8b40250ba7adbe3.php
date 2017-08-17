<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:96:"C:\xampp\htdocs\report\public/../application/rnaseq\view\target_enrichment\targetEnrichment.html";i:1502848431;s:70:"C:\xampp\htdocs\report\public/../application/pc/view/common\_meta.html";i:1502851846;s:72:"C:\xampp\htdocs\report\public/../application/pc/view/common\_footer.html";i:1502778348;}*/ ?>
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
<title>ncRNA靶基因富集分析</title>
</head>
<body onLoad="setupZoom();">
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span>BC150548-1<span class="c-gray en">&gt;</span> ncRNA靶基因富集分析 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="main_content">
		<div id="tab_demo" class="HuiTab">
			<h4>差异ncRNA靶基因GO富集分析</h4>
			<!--<h4>文件表头说明</h4>
			<table class="table table-border table-bordered table-bg mt-20">
				<tbody>
				<tr>
					<td colspan="2">*_GO_level2.xls表头说明</td>
				</tr>
				<tr class="text-c">
					<th>项目名称</th>
					<th>说明</th>
				</tr>
				<tr class="text-c">
					<td>levels</td>
					<td>	GO的层级</td>
				</tr>
				<tr class="text-c">
					<td>GO_id</td>
					<td>GO数据库中的ID</td>
				</tr>
				<tr class="text-c">
					<td>Term</td>
					<td>GO_ID在GO数据库中的描述</td>
				</tr>
				<tr class="text-c">
					<td>GO_namespace</td>
					<td>GO term在数据库中的类别(如molecular_function)</td>
				</tr>
				<tr class="text-c">
					<td>gene_num</td>
					<td>对应GO term的差异基因数</td>
				</tr>
				<tr class="text-c">
					<td>gene_list</td>
					<td>对应GO term的差异基因</td>
				</tr>
				</tbody>
				<tbody>
				<tr>
					<td colspan="2">*_GO_enrichment.xls表头说明</td>
				</tr>
				<tr class="text-c">
					<th>项目名称</th>
					<th>说明</th>
				</tr>
				<tr class="text-c">
					<td>GO_ID</td>
					<td>该GO term在数据库中的ID</td>
				</tr>
				<tr class="text-c">
					<td>GO_ term</td>
					<td>该GO term在的描述</td>
				</tr>
				<tr class="text-c">
					<td>Type</td>
					<td>该GO term在数据库中的类别(如molecular_function)</td>
				</tr>
				<tr class="text-c">
					<td>Diff_gene_in_GO</td>
					<td>该GO term中差异基因的数目</td>
				</tr>
				<tr class="text-c">
					<td>Up_gene</td>
					<td>该GO term的上调基因的数目</td>
				</tr>
				<tr class="text-c">
					<td>Down_gene</td>
					<td>该GO term的下调基因的数目</td>
				</tr>
				<tr class="text-c">
					<td>All_diff_gene_in_all_GO</td>
					<td>能够对应到GO 数据库中的所有差异基因的数目</td>
				</tr>
				<tr class="text-c">
					<td>All_gene_in_GO</td>
					<td>该GO term中包含的目的物种的基因数目</td>
				</tr>
				<tr class="text-c">
					<td>All_gene_in_all_GO</td>
					<td>GO 数据库中包含的目的物种的基因总数</td>
				</tr>
				<tr class="text-c">
					<td>Up_gene_list</td>
					<td>该GO term中上调基因的列表</td>
				</tr>
				<tr class="text-c">
					<td>Down_gene_list</td>
					<td>该GO term中下调基因的列表</td>
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
			</table>-->
			<p>各分组详细差异ncRNA靶基因GO富集分析结果列表如下：</p>
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
											<td>富集分析结果</td>
											<td>all.counts.g2_vs_g1.edgeR_GO_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_GO_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>富集分析结果</td>
											<td>all.counts.g3_vs_g6.edgeR_GO_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_1_GO_enrichment/all.counts.g3_vs_g6.edgeR_GO_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集散点图</td>
											<td>all.counts.g3_vs_g6.edgeR_GO_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_1_GO_enrichment/all.counts.g3_vs_g6.edgeR_GO_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>富集分析结果</td>
											<td>all.counts.g3_vs_g9.edgeR_GO_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_1_GO_enrichment/all.counts.g3_vs_g9.edgeR_GO_enrichment.xls">下载</a></td>
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
											<td>富集分析结果</td>
											<td>all.counts.g2_vs_g1.edgeR_GO_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_GO_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>富集分析结果</td>
											<td>all.counts.g2_vs_g1.edgeR_GO_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_GO_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>富集分析结果</td>
											<td>all.counts.g3_vs_g6.edgeR_GO_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_1_GO_enrichment/all.counts.g3_vs_g6.edgeR_GO_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集散点图</td>
											<td>all.counts.g3_vs_g6.edgeR_GO_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_1_GO_enrichment/all.counts.g3_vs_g6.edgeR_GO_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>富集分析结果</td>
											<td>all.counts.g3_vs_g9.edgeR_GO_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_1_GO_enrichment/all.counts.g3_vs_g9.edgeR_GO_enrichment.xls">下载</a></td>
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
											<td>富集分析结果</td>
											<td>all.counts.g2_vs_g1.edgeR_GO_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_GO_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_enrichment.pdf" target="_blank">下载</a></td>
										</tr>
										</tbody>
									</table>
								</div><div>
								<table class="table table-border table-bordered table-bg mt-20">
									<tbody>
									<tr class="text-c">
										<th>类别</th>
										<th>文件名</th>
										<th>下载</th>
									</tr>
									<tr class="text-c">
										<td>富集分析结果</td>
										<td>all.counts.g2_vs_g1.edgeR_GO_enrichment.xls</td>
										<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_enrichment.xls">下载</a></td>
									</tr>
									<tr class="text-c">
										<td>富集散点图</td>
										<td>all.counts.g2_vs_g1.edgeR_GO_enrichment.pdf</td>
										<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>富集分析结果</td>
											<td>all.counts.g3_vs_g6.edgeR_GO_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_1_GO_enrichment/all.counts.g3_vs_g6.edgeR_GO_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集散点图</td>
											<td>all.counts.g3_vs_g6.edgeR_GO_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_1_GO_enrichment/all.counts.g3_vs_g6.edgeR_GO_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>富集分析结果</td>
											<td>all.counts.g3_vs_g9.edgeR_GO_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_1_GO_enrichment/all.counts.g3_vs_g9.edgeR_GO_enrichment.xls">下载</a></td>
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
											<td>富集分析结果</td>
											<td>all.counts.g2_vs_g1.edgeR_GO_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_GO_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_enrichment.pdf" target="_blank">下载</a></td>
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
			<!--kegg 富集分析-->
			<h4>差异ncRNA靶基因KEGG pathway富集分析</h4>
			<p>各分组详细差异ncRNA靶基因KEGG富集分析结果列表如下：</p>
			<div class="HuiTab">
				<div class="htmleaf-container">
					<br/>
					<div id="container_kegg">
						<div id="parentHorizontalTab_kegg">
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
											<td>富集分析结果</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>富集分析结果</td>
											<td>all.counts.g3_vs_g6.edgeR_KEGG_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_2_KEGG_enrichment/all.counts.g3_vs_g6.edgeR_KEGG_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集散点图</td>
											<td>all.counts.g3_vs_g6.edgeR_KEGG_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_2_KEGG_enrichment/all.counts.g3_vs_g6.edgeR_KEGG_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>富集分析结果</td>
											<td>all.counts.g3_vs_g9.edgeR_KEGG_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_2_KEGG_enrichment/all.counts.g3_vs_g9.edgeR_KEGG_enrichment.xls">下载</a></td>
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
											<td>富集分析结果</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>富集分析结果</td>
											<td>all.counts.g3_vs_g6.edgeR_KEGG_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_2_KEGG_enrichment/all.counts.g3_vs_g6.edgeR_KEGG_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集散点图</td>
											<td>all.counts.g3_vs_g6.edgeR_KEGG_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_2_KEGG_enrichment/all.counts.g3_vs_g6.edgeR_KEGG_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>富集分析结果</td>
											<td>all.counts.g3_vs_g9.edgeR_KEGG_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_2_KEGG_enrichment/all.counts.g3_vs_g9.edgeR_KEGG_enrichment.xls">下载</a></td>
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
											<td>富集分析结果</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>富集分析结果</td>
											<td>all.counts.g3_vs_g6.edgeR_KEGG_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_2_KEGG_enrichment/all.counts.g3_vs_g6.edgeR_KEGG_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集散点图</td>
											<td>all.counts.g3_vs_g6.edgeR_KEGG_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_2_KEGG_enrichment/all.counts.g3_vs_g6.edgeR_KEGG_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>富集分析结果</td>
											<td>all.counts.g3_vs_g9.edgeR_KEGG_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_2_KEGG_enrichment/all.counts.g3_vs_g9.edgeR_KEGG_enrichment.xls">下载</a></td>
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
											<td>富集分析结果</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_2_KEGG_enrichment/all.counts.g2_vs_g1.edgeR_KEGG_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>富集分析结果</td>
											<td>all.counts.g3_vs_g6.edgeR_KEGG_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_2_KEGG_enrichment/all.counts.g3_vs_g6.edgeR_KEGG_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集散点图</td>
											<td>all.counts.g3_vs_g6.edgeR_KEGG_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_2_KEGG_enrichment/all.counts.g3_vs_g6.edgeR_KEGG_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>富集分析结果</td>
											<td>all.counts.g3_vs_g9.edgeR_KEGG_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/5_ncRNA/5_5_diff_ncRNA_target_enrichment/5_5_2_KEGG_enrichment/all.counts.g3_vs_g9.edgeR_KEGG_enrichment.xls">下载</a></td>
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
		$('#parentHorizontalTab_mRNA,#parentHorizontalTab_kegg').easyResponsiveTabs({
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