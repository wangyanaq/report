<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"C:\xampp\htdocs\report\public/../application/rnaseq\view\go\go.html";i:1502848474;s:70:"C:\xampp\htdocs\report\public/../application/pc/view/common\_meta.html";i:1502851846;s:72:"C:\xampp\htdocs\report\public/../application/pc/view/common\_footer.html";i:1502778348;}*/ ?>
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
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span>BC150548-1<span class="c-gray en">&gt;</span> GO富集分析 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="main_content">
		<div id="tab_demo" class="HuiTab">
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;差异表达基因的GO分析可以通过一些图形展示，首先，对生物过程（biological process），细胞成分（cellular component），分子功能（molecular function）三个层次上对应的差异基因数目进行统计
			</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;此外，我们还可以进行GO富集分析。具体原理是把所挑选的差异表达基因向GO数据库的各个条目（term）映射，计算每个条目的基因数目，然后应用超几何检验，与整个基因组背景相比，筛选在差异表达基因中显著富集的GO条目，其计算公式为：</p>
				<p  class="text-c"><img src="__PUBLIC__/image/data/go_formula.png" alt="计算公式" /></p>
				 <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;其中，N为所有基因中具有GO注释的基因数目；n为N中差异表达基因的数目；M为所有基因中注释为某特定GO term的基因数目； m为注释为某特定GO term的差异表达基因数目。计算得到的p-value通过多重假设检验校正之后，以q-value ≤ 0.05为阈值，满足此条件的GO term定义为在差异表达基因中显著富集的GO term。
			</p>
			<p>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;针对GO富集分析的结果，我们以散点图的方式展示。其中Rich Factor指差异表达的基因中位于该GO条目的基因数目与所有该GO条目中基因总数的比值，RichFactor越大，表示富集的程度越大。q-value是多重假设检验校正之后的p-value，值越小表示富集越显著。结果图中只展示富集程度排名前30的GO条目。
			</p>
			<h4>文件表头说明</h4>
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
											<td>差异基因数目统计</td>
											<td>all.counts.g2_vs_g1.edgeR_GO_level2.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_level2.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>功能分类统计图</td>
											<td>all.counts.g2_vs_g1.edgeR_GO_class.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_class.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析结果</td>
											<td>all.counts.g2_vs_g1.edgeR_GO_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_GO_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>差异基因数目统计</td>
											<td>all.counts.g3_vs_g6.edgeR_GO_level2.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g6.edgeR_GO_level2.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>功能分类统计图</td>
											<td>all.counts.g3_vs_g6.edgeR_GO_class.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g6.edgeR_GO_class.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析结果</td>
											<td>all.counts.g3_vs_g6.edgeR_GO_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g6.edgeR_GO_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集散点图</td>
											<td>all.counts.g3_vs_g6.edgeR_GO_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g6.edgeR_GO_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>差异基因数目统计</td>
											<td>all.counts.g3_vs_g9.edgeR_GO_level2.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g9.edgeR_GO_level2.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>功能分类统计图</td>
											<td>all.counts.g3_vs_g9.edgeR_GO_class.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g9.edgeR_GO_class.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析结果</td>
											<td>all.counts.g3_vs_g9.edgeR_GO_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g9.edgeR_GO_enrichment.xls">下载</a></td>
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
											<td>差异基因数目统计</td>
											<td>all.counts.g2_vs_g1.edgeR_GO_level2.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_level2.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>功能分类统计图</td>
											<td>all.counts.g2_vs_g1.edgeR_GO_class.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_class.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析结果</td>
											<td>all.counts.g2_vs_g1.edgeR_GO_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_GO_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>差异基因数目统计</td>
											<td>all.counts.g3_vs_g6.edgeR_GO_level2.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g6.edgeR_GO_level2.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>功能分类统计图</td>
											<td>all.counts.g3_vs_g6.edgeR_GO_class.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g6.edgeR_GO_class.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析结果</td>
											<td>all.counts.g3_vs_g6.edgeR_GO_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g6.edgeR_GO_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集散点图</td>
											<td>all.counts.g3_vs_g6.edgeR_GO_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g6.edgeR_GO_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>差异基因数目统计</td>
											<td>all.counts.g3_vs_g9.edgeR_GO_level2.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g9.edgeR_GO_level2.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>功能分类统计图</td>
											<td>all.counts.g3_vs_g9.edgeR_GO_class.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g9.edgeR_GO_class.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析结果</td>
											<td>all.counts.g3_vs_g9.edgeR_GO_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g9.edgeR_GO_enrichment.xls">下载</a></td>
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
											<td>差异基因数目统计</td>
											<td>all.counts.g2_vs_g1.edgeR_GO_level2.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_level2.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>功能分类统计图</td>
											<td>all.counts.g2_vs_g1.edgeR_GO_class.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_class.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析结果</td>
											<td>all.counts.g2_vs_g1.edgeR_GO_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_GO_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>差异基因数目统计</td>
											<td>all.counts.g3_vs_g6.edgeR_GO_level2.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g6.edgeR_GO_level2.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>功能分类统计图</td>
											<td>all.counts.g3_vs_g6.edgeR_GO_class.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g6.edgeR_GO_class.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析结果</td>
											<td>all.counts.g3_vs_g6.edgeR_GO_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g6.edgeR_GO_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集散点图</td>
											<td>all.counts.g3_vs_g6.edgeR_GO_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g6.edgeR_GO_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>差异基因数目统计</td>
											<td>all.counts.g3_vs_g9.edgeR_GO_level2.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g9.edgeR_GO_level2.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>功能分类统计图</td>
											<td>all.counts.g3_vs_g9.edgeR_GO_class.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g9.edgeR_GO_class.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析结果</td>
											<td>all.counts.g3_vs_g9.edgeR_GO_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g9.edgeR_GO_enrichment.xls">下载</a></td>
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
											<td>差异基因数目统计</td>
											<td>all.counts.g2_vs_g1.edgeR_GO_level2.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_level2.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>功能分类统计图</td>
											<td>all.counts.g2_vs_g1.edgeR_GO_class.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_class.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析结果</td>
											<td>all.counts.g2_vs_g1.edgeR_GO_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集散点图</td>
											<td>all.counts.g2_vs_g1.edgeR_GO_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g2_vs_g1.edgeR_GO_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>差异基因数目统计</td>
											<td>all.counts.g3_vs_g6.edgeR_GO_level2.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g6.edgeR_GO_level2.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>功能分类统计图</td>
											<td>all.counts.g3_vs_g6.edgeR_GO_class.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g6.edgeR_GO_class.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析结果</td>
											<td>all.counts.g3_vs_g6.edgeR_GO_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g6.edgeR_GO_enrichment.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集散点图</td>
											<td>all.counts.g3_vs_g6.edgeR_GO_enrichment.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g6.edgeR_GO_enrichment.pdf" target="_blank">下载</a></td>
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
											<td>差异基因数目统计</td>
											<td>all.counts.g3_vs_g9.edgeR_GO_level2.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g9.edgeR_GO_level2.xls">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>功能分类统计图</td>
											<td>all.counts.g3_vs_g9.edgeR_GO_class.pdf</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g9.edgeR_GO_class.pdf" target="_blank">下载</a></td>
										</tr>
										<tr class="text-c">
											<td>富集分析结果</td>
											<td>all.counts.g3_vs_g9.edgeR_GO_enrichment.xls</td>
											<td><a href="__RNASEQ__/BC150548-1/3_differential_gene_enrichment/3_1_GO_enrichment/all.counts.g3_vs_g9.edgeR_GO_enrichment.xls">下载</a></td>
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