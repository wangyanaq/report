<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"C:\xampp\htdocs\report\public/../application/rnaseq\view\mapping\mapping.html";i:1502848350;s:70:"C:\xampp\htdocs\report\public/../application/pc/view/common\_meta.html";i:1502851846;s:72:"C:\xampp\htdocs\report\public/../application/pc/view/common\_footer.html";i:1502778348;}*/ ?>
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
<title>基因组比对</title>
</head>
<body onLoad="setupZoom();">
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span>BC150548-1<span class="c-gray en">&gt;</span>基因组比对（Mapping genome）<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="main_content">
		<div class="HuiTab">
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;应用bowtie2（version: 2-2.0.5）[2]采用局部比对对预处理后reads进行Genome mapping，较适用于原核转录组测序数据</p>
			<p>	采用基因组版本为 Mycobacterium_smegmatis_MC2_155_uid57701，下载地址为：http://www.ncbi.nlm.nih.gov/genome/?term=Mycobacterium%20smegmatis%20MC2%20155。</p>
	</div>
		<br/>
		<br/>
		<h3 class="main_title" >基因组比对结果统计</h3>
		<div class="HuiTab">
			<table class="table table-border table-bordered table-bg mt-20">
				<tbody>
				<tr>
					<td  style="text-align:center"><b>	Samples_ID</b></td>
					<td style="text-align:center"><b>All reads	</b></td>
					<td style="text-align:center"><b>Mapped reads</b></td>
					<td style="text-align:center"><b>	Mapped <br>Pair<br> Reads</b></td>
					<td style="text-align:center"><b>	Mapped <br>broken-pair<br> reads</b></td>
					<td style="text-align:center"><b>	Mapped <br>Unique<br> reads</b></td>
					<td style="text-align:center"><b>	Mapped<br> Multi <br> reads</b></td>
					<td style="text-align:center"><b>	Mapping ratio</b></td>
				</tr>
				<tr>
					<td   style="text-align:center">L15351</td>
					<td style="text-align:center">18,856,908</td>
					<td style="text-align:center">18,033,043</td>
					<td style="text-align:center">17,831,552 </td>
					<td style="text-align:center">201,491</td>
					<td style="text-align:center">17,189,116</td>
					<td style="text-align:center">177,665 </td>
					<td style="text-align:center">95.63%</td>
				</tr>
				<tr>
					<td   style="text-align:center">L15352</td>
					<td style="text-align:center">26,197,638</td>
					<td style="text-align:center">17,892,300</td>
					<td style="text-align:center">17,831,552 </td>
					<td style="text-align:center">201,491</td>
					<td style="text-align:center">17,189,116</td>
					<td style="text-align:center">177,665 </td>
					<td style="text-align:center">95.63%</td>
				</tr>
				<tr>
					<td   style="text-align:center">L15351</td>
					<td style="text-align:center">18,856,908</td>
					<td style="text-align:center">18,033,043</td>
					<td style="text-align:center">17,831,552 </td>
					<td style="text-align:center">201,491</td>
					<td style="text-align:center">17,189,116</td>
					<td style="text-align:center">177,665 </td>
					<td style="text-align:center">95.63%</td>
				</tr>
				<tr>
					<td   style="text-align:center">L15352</td>
					<td style="text-align:center">26,197,638</td>
					<td style="text-align:center">17,892,300</td>
					<td style="text-align:center">17,831,552 </td>
					<td style="text-align:center">201,491</td>
					<td style="text-align:center">17,189,116</td>
					<td style="text-align:center">177,665 </td>
					<td style="text-align:center">95.63%</td>
				</tr>
				<tr>
					<td   style="text-align:center">L15351</td>
					<td style="text-align:center">18,856,908</td>
					<td style="text-align:center">18,033,043</td>
					<td style="text-align:center">17,831,552 </td>
					<td style="text-align:center">201,491</td>
					<td style="text-align:center">17,189,116</td>
					<td style="text-align:center">177,665 </td>
					<td style="text-align:center">95.63%</td>
				</tr>
				<tr>
					<td   style="text-align:center">L15352</td>
					<td style="text-align:center">26,197,638</td>
					<td style="text-align:center">17,892,300</td>
					<td style="text-align:center">17,831,552 </td>
					<td style="text-align:center">201,491</td>
					<td style="text-align:center">17,189,116</td>
					<td style="text-align:center">177,665 </td>
					<td style="text-align:center">95.63%</td>
				</tr>
				<tr>
					<td   style="text-align:center">L15351</td>
					<td style="text-align:center">18,856,908</td>
					<td style="text-align:center">18,033,043</td>
					<td style="text-align:center">17,831,552 </td>
					<td style="text-align:center">201,491</td>
					<td style="text-align:center">17,189,116</td>
					<td style="text-align:center">177,665 </td>
					<td style="text-align:center">95.63%</td>
				</tr>
				<tr>
					<td   style="text-align:center">L15352</td>
					<td style="text-align:center">26,197,638</td>
					<td style="text-align:center">17,892,300</td>
					<td style="text-align:center">17,831,552 </td>
					<td style="text-align:center">201,491</td>
					<td style="text-align:center">17,189,116</td>
					<td style="text-align:center">177,665 </td>
					<td style="text-align:center">95.63%</td>
				</tr>
				<tr>
					<td   style="text-align:center">L15351</td>
					<td style="text-align:center">18,856,908</td>
					<td style="text-align:center">18,033,043</td>
					<td style="text-align:center">17,831,552 </td>
					<td style="text-align:center">201,491</td>
					<td style="text-align:center">17,189,116</td>
					<td style="text-align:center">177,665 </td>
					<td style="text-align:center">95.63%</td>
				</tr>
				<tr>
					<td   style="text-align:center">L15352</td>
					<td style="text-align:center">26,197,638</td>
					<td style="text-align:center">17,892,300</td>
					<td style="text-align:center">17,831,552 </td>
					<td style="text-align:center">201,491</td>
					<td style="text-align:center">17,189,116</td>
					<td style="text-align:center">177,665 </td>
					<td style="text-align:center">95.63%</td>
				</tr>
				<tr>
					<td   style="text-align:center">L15351</td>
					<td style="text-align:center">18,856,908</td>
					<td style="text-align:center">18,033,043</td>
					<td style="text-align:center">17,831,552 </td>
					<td style="text-align:center">201,491</td>
					<td style="text-align:center">17,189,116</td>
					<td style="text-align:center">177,665 </td>
					<td style="text-align:center">95.63%</td>
				</tr>
				<tr>
					<td   style="text-align:center">L15352</td>
					<td style="text-align:center">26,197,638</td>
					<td style="text-align:center">17,892,300</td>
					<td style="text-align:center">17,831,552 </td>
					<td style="text-align:center">201,491</td>
					<td style="text-align:center">17,189,116</td>
					<td style="text-align:center">177,665 </td>
					<td style="text-align:center">95.63%</td>
				</tr>
				<tr>
					<td   style="text-align:center">L15351</td>
					<td style="text-align:center">18,856,908</td>
					<td style="text-align:center">18,033,043</td>
					<td style="text-align:center">17,831,552 </td>
					<td style="text-align:center">201,491</td>
					<td style="text-align:center">17,189,116</td>
					<td style="text-align:center">177,665 </td>
					<td style="text-align:center">95.63%</td>
				</tr>
				<tr>
					<td   style="text-align:center">L15352</td>
					<td style="text-align:center">26,197,638</td>
					<td style="text-align:center">17,892,300</td>
					<td style="text-align:center">17,831,552 </td>
					<td style="text-align:center">201,491</td>
					<td style="text-align:center">17,189,116</td>
					<td style="text-align:center">177,665 </td>
					<td style="text-align:center">95.63%</td>
				</tr>
				<tr>
					<td   style="text-align:center">L15351</td>
					<td style="text-align:center">18,856,908</td>
					<td style="text-align:center">18,033,043</td>
					<td style="text-align:center">17,831,552 </td>
					<td style="text-align:center">201,491</td>
					<td style="text-align:center">17,189,116</td>
					<td style="text-align:center">177,665 </td>
					<td style="text-align:center">95.63%</td>
				</tr>
				<tr>
					<td   style="text-align:center">L15352</td>
					<td style="text-align:center">26,197,638</td>
					<td style="text-align:center">17,892,300</td>
					<td style="text-align:center">17,831,552 </td>
					<td style="text-align:center">201,491</td>
					<td style="text-align:center">17,189,116</td>
					<td style="text-align:center">177,665 </td>
					<td style="text-align:center">95.63%</td>
				</tr>
				<tr>
					<td   style="text-align:center">L15351</td>
					<td style="text-align:center">18,856,908</td>
					<td style="text-align:center">18,033,043</td>
					<td style="text-align:center">17,831,552 </td>
					<td style="text-align:center">201,491</td>
					<td style="text-align:center">17,189,116</td>
					<td style="text-align:center">177,665 </td>
					<td style="text-align:center">95.63%</td>
				</tr>
				<tr>
					<td   style="text-align:center">L15352</td>
					<td style="text-align:center">26,197,638</td>
					<td style="text-align:center">17,892,300</td>
					<td style="text-align:center">17,831,552 </td>
					<td style="text-align:center">201,491</td>
					<td style="text-align:center">17,189,116</td>
					<td style="text-align:center">177,665 </td>
					<td style="text-align:center">95.63%</td>
				</tr>
				<tr>
					<td   style="text-align:center">L15351</td>
					<td style="text-align:center">18,856,908</td>
					<td style="text-align:center">18,033,043</td>
					<td style="text-align:center">17,831,552 </td>
					<td style="text-align:center">201,491</td>
					<td style="text-align:center">17,189,116</td>
					<td style="text-align:center">177,665 </td>
					<td style="text-align:center">95.63%</td>
				</tr>
				<tr>
					<td   style="text-align:center">L15352</td>
					<td style="text-align:center">26,197,638</td>
					<td style="text-align:center">17,892,300</td>
					<td style="text-align:center">17,831,552 </td>
					<td style="text-align:center">201,491</td>
					<td style="text-align:center">17,189,116</td>
					<td style="text-align:center">177,665 </td>
					<td style="text-align:center">95.63%</td>
				</tr>
				<tr>
					<td   style="text-align:center">L15351</td>
					<td style="text-align:center">18,856,908</td>
					<td style="text-align:center">18,033,043</td>
					<td style="text-align:center">17,831,552 </td>
					<td style="text-align:center">201,491</td>
					<td style="text-align:center">17,189,116</td>
					<td style="text-align:center">177,665 </td>
					<td style="text-align:center">95.63%</td>
				</tr>
				<tr>
					<td   style="text-align:center">L15352</td>
					<td style="text-align:center">26,197,638</td>
					<td style="text-align:center">17,892,300</td>
					<td style="text-align:center">17,831,552 </td>
					<td style="text-align:center">201,491</td>
					<td style="text-align:center">17,189,116</td>
					<td style="text-align:center">177,665 </td>
					<td style="text-align:center">95.63%</td>
				</tr>
				<tr>
					<td   style="text-align:center">L15351</td>
					<td style="text-align:center">18,856,908</td>
					<td style="text-align:center">18,033,043</td>
					<td style="text-align:center">17,831,552 </td>
					<td style="text-align:center">201,491</td>
					<td style="text-align:center">17,189,116</td>
					<td style="text-align:center">177,665 </td>
					<td style="text-align:center">95.63%</td>
				</tr>
				<tr>
					<td   style="text-align:center">L15352</td>
					<td style="text-align:center">26,197,638</td>
					<td style="text-align:center">17,892,300</td>
					<td style="text-align:center">17,831,552 </td>
					<td style="text-align:center">201,491</td>
					<td style="text-align:center">17,189,116</td>
					<td style="text-align:center">177,665 </td>
					<td style="text-align:center">95.63%</td>
				</tr>

				</tr>
				</tbody>
			</table>
			<p style="margin-top: 20px">备注：1.Mapping ratio=Mapped reads/All reads,2. Mapped Unique reads：在基因组仅有一个位置匹配的reads。</p>
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