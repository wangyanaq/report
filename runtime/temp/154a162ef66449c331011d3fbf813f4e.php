<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:102:"C:\xampp\htdocs\report\public/../application/rnaseq\view\correlation_analysis\correlationAnalysis.html";i:1502788444;s:70:"C:\xampp\htdocs\report\public/../application/pc/view/common\_meta.html";i:1502851846;s:72:"C:\xampp\htdocs\report\public/../application/pc/view/common\_footer.html";i:1502778348;}*/ ?>
﻿ <!DOCTYPE HTML>
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
<title>差异筛选结果</title>
</head>
<body onLoad="setupZoom();">
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span>BC150548-1<span class="c-gray en">&gt;</span> 表达相关性分析 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="main_content">
		<!--   相关系数   -->
		<h3 class="main_title" id="2_5">样品相关系数图</h3>
		<div class="HuiTab">
			<p>相关系数越接近1，表明样品之间相似度越高。根据FPKM定量结果，我们计算出所有样品两两之间的相关性，如下图所示：</p>
			<div class="htmleaf-container">
				<br/>
				<div id="container_mRNA">
					<div id="parentHorizontalTab_mRNA">
						<ul class="resp-tabs-list hor_1">
							<li>mRNA</li>
							<li>lncRNA</li>
							<li>circRNA</li>
						</ul>
						<div class="resp-tabs-container hor_1">
							<div>
								<p>
								<div>
										<a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_2_correlation_analysis/correlation.png" title="heatmap">
											<img style="width:490px" src="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_2_correlation_analysis/correlation.png" alt="">
										</a>
								</div>
								</p>
								<p>mRNA</p>
							</div>
							<div>
								<p>
								<div>
								<a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_2_correlation_analysis/correlation.png" title="heatmap">
									<img style="width:490px" src="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_2_correlation_analysis/correlation.png" alt="">
								</a>
								</div>
								</p>
								<br>
								<p>lncRNA</p>
							</div>
							<div>
								<p>
								<div>
								<a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_2_correlation_analysis/correlation.png" title="heatmap">
									<img style="width:490px" src="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_2_correlation_analysis/correlation.png" alt="">
								</a>
								</div>
								</p>
								<br>
								<p>circRNA</p>
							</div>
						</div>
					</div>
				</div>
			<br/>

		</div>
			<p class="lable">基因表达相关性heatmap图。颜色越深表明相关性越大，数值指相关性系数。</p>
			<br/>
		</div>

				<!--    pca    -->
		<h3 class="main_title" id="2_6">样品PCA图</h3>
			<div class="HuiTab">
				<p>
					主成分分析（Principal component analysis，PCA）可以降低数据的复杂性，深入挖掘样品之间的关系和变异大小。基本原理是，利用数学的方法，将原来变量重新组合成一组新的互相无关的几个综合变量（即主成分），对所有因素按重要性排序，通常靠后的微小因素被忽略掉，从而起到简化数据的作用。实际项目中，我们可以通过PCA找出离群样品、判别相似性高的样品簇等。PCA结果如下图所示：
				</p>
				<div class="htmleaf-container">
					<br/>
					<div id="container_circRNA">
						<div id="parentHorizontalTab_circRNA">
							<ul class="resp-tabs-list hor_1">
								<li>mRNA</li>
								<li>lncRNA</li>
								<li>circRNA</li>
							</ul>
							<div class="resp-tabs-container hor_1">
								<div>
									<p>
									<div>
									<a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_2_correlation_analysis/PCA.png" title="PCA">
										<img style="width:490px" src="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_2_correlation_analysis/PCA.png" alt="">
									</a>
								</div>
									</p>
									<p>mRNA</p>
								</div>
								<div>
									<p>
									<div>
									<a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_2_correlation_analysis/PCA.png" title="PCA">
										<img style="width:490px" src="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_2_correlation_analysis/PCA.png" alt="">
									</a>
								</div>
									</p>
									<br>
									<p>lncRNA</p>
								</div>
								<div>
									<p>
									<div>
									<a href="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_2_correlation_analysis/PCA.png" title="PCA">
										<img style="width:490px" src="__RNASEQ__/BC150548-1/2_gene_expression_analysis/2_2_correlation_analysis/PCA.png" alt="">
									</a>
								</div>
									</p>
									<br>
									<p>circRNA</p>
								</div>
							</div>
						</div>
					</div>
					<br/>

				</div>
				<br/>
			</div>
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