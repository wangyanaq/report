<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"C:\xampp\htdocs\report\public/../application/rnaseq\view\evaluate\evaluate.html";i:1502848695;s:70:"C:\xampp\htdocs\report\public/../application/pc/view/common\_meta.html";i:1502851846;s:72:"C:\xampp\htdocs\report\public/../application/pc/view/common\_footer.html";i:1502778348;}*/ ?>
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
<title>测序质量评估</title>
</head>
<body onLoad="setupZoom();">
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span>BC150548-1<span class="c-gray en">&gt;</span>测序质量评估 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="main_content">
		<h3 class="main_title">评估原理</h3>
		<div class="HuiTab">
			<p> <b>评估原理：</b>应用测序质量Q值进行评估，Q值与测序错误E值之间关系为： <span style="font-size: 20px;">Q=-10Log <sub>10</sub>E</span></p>
			<p>质量与错误率对照表如下</p>
			<table class="table table-border table-bordered table-bg mt-20">
				<tbody>
				<tr>
					<!--<td  style="text-align:center"><b> 原始数据文件名</b></td>-->
					<td  style="text-align:center"><b> 测序错误率(E)</b></td>
					<td style="text-align:center"><b>	测序质量值(Q)</b></td>
				</tr>
				<tr>
					<td   style="text-align:center">5%</td>
					<td style="text-align:center">13</td>
				</tr>
				<tr>
					<td style="text-align:center">1%</td>
					<td style="text-align:center">20</td>
				</tr>
				<tr>
					<td  style="text-align:center">0.1%</td>
					<td style="text-align:center">30</td>
				</tr>
				<tr>
					<td   style="text-align:center">0.01%	</td>
					<td style="text-align:center"> 40(max Q)</td>
				</tr>
				</tbody>
			</table>
	</div>
		<br/>
		<br/>
		<h3 class="main_title" >评估方法</h3>
		<br/>
		<div class="HuiTab">
			<p><b>Q值盒图统计：</b>盒图即是质量分位图，黄色长方形最下面的边为占25%比例的质量Q值，依此往上分别为占50%比例，占75%比例对应的质量Q值，上下的黑线代表占90%和10%对应的质量值，蓝色的线表示质量数值的平均值、绿色背景部分代表高质量数值部分、橘色背景部分代表合理质量数值部分、红色背景部分代表低质量数值部分。</p>
			<div class="center">
				<a href="__RNASEQ__/BC150548-1/qvalue.png" title="Q值盒图统计示意图">
				<img style="width:490px"   src="__RNASEQ__/BC150548-1/qvalue.png" alt="Q值盒图统计示意图">
					</a>
				<p style="text-align: center;margin: 5px 0"><b>Q值盒图统计示意图</b></p>
			</div>
			<p><b>碱基分布图：</b>可以观测测序过程碱基均衡性，一般来说，因采用随机引物扩增但随机引物种类有限而导致reads的前10个碱基的比例不均衡，会出现波动是正常现象。在此波动之后的碱基互补配对原理GC及AT碱基对会分别均衡分布。</p>
			<div class="center">
				<a href="__RNASEQ__/BC150548-1/BaseDistributionMap.png" title="碱基分布示意图">
				<img style="width:490px"   src="__RNASEQ__/BC150548-1/BaseDistributionMap.png" alt="碱基分布示意图"></a>
				<p style="text-align: center;margin: 5px 0"><b>碱基分布示意图。</b>横坐标为reads碱基位置，纵坐标为碱基所占的比例。</p>
			</div>
			<p class="lable" class="clearfix" style="height: 40px;line-height: 40px;margin: 15px 0"> 点击右侧下载测序质量评估结果 <a   href="__RNASEQ__/BC150548-1/1_reads_quality_statistics.rar"  > <img src="__PUBLIC__/image/downloading.gif"  style="float: right;width: 120px;height: 40px"/></a></p>
			<p><b style="color:red">评估结论：</b>所有样本测序结果优良，碱基分布均衡。</p>
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

	$(function(){
		$.Huifold("#Huifold1 .item h4","#Huifold1 .item .info","fast",3,"click"); /*5个参数顺序不可打乱，分别是：相应区,隐藏显示的内容,速度,类型,事件*/
	});
/*三种RNA显示图*/
	$(function() {
		$.Huitab("#tab_demo .tabBar span","#tab_demo .tabCon","current","click","1")
	});


/*中间图显示*/
	$(document).ready(function() {
		//Horizontal Tab
		$('#parentHorizontalTab').easyResponsiveTabs({
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

		// Child Tab
		$('#ChildVerticalTab_1').easyResponsiveTabs({
			type: 'vertical',
			width: 'auto',
			fit: true,
			tabidentify: 'ver_1', // The tab groups identifier
			activetab_bg: '#fff', // background color for active tabs in this group
			inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
			active_border_color: '#c1c1c1', // border color for active tabs heads in this group
			active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
		});
		$('#ChildVerticalTab_2').easyResponsiveTabs({
			type: 'vertical',
			width: 'auto',
			fit: true,
			tabidentify: 'ver_2', // The tab groups identifier
			activetab_bg: '#fff', // background color for active tabs in this group
			inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
			active_border_color: '#c1c1c1', // border color for active tabs heads in this group
			active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
		});
		$('#ChildVerticalTab_3').easyResponsiveTabs({
			type: 'vertical',
			width: 'auto',
			fit: true,
			tabidentify: 'ver_3', // The tab groups identifier
			activetab_bg: '#fff', // background color for active tabs in this group
			inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
			active_border_color: '#c1c1c1', // border color for active tabs heads in this group
			active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
		});

		//Vertical Tab
		$('#parentVerticalTab').easyResponsiveTabs({
			type: 'vertical', //Types: default, vertical, accordion
			width: 'auto', //auto or any width like 600px
			fit: true, // 100% fit in a container
			closed: 'accordion', // Start closed if in accordion view
			tabidentify: 'hor_1', // The tab groups identifier
			activate: function(event) { // Callback function if tab is switched
				var $tab = $(this);
				var $info = $('#nested-tabInfo2');
				var $name = $('span', $info);
				$name.text($tab.text());
				$info.show();
			}
		});
	});

</script>
</body>
</html>