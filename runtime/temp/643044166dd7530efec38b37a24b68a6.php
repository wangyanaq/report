<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"C:\xampp\htdocs\report\public/../application/rnaseq\view\format\format.html";i:1502847327;s:70:"C:\xampp\htdocs\report\public/../application/pc/view/common\_meta.html";i:1502851846;}*/ ?>
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
<title>测序序列格式展示</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span>BC150548-1<span class="c-gray en">&gt;</span>测序序列格式展示<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="main_content">
		<h3 class="main_title" >测序序列格式展示</h3>
		<div class="HuiTab">
			<p style="margin-top: 20px;">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NGS（Next Generation Sequencing，二代高通量测序）技术应用高通量测序仪（如：illumina Hiseq 2000/2500、Miseq）对cDNA进行测序。首先得到的原始图像文件，然后经过碱基识别及误差过滤，最终得到可以用于分析的原始测序片段，我们称之为Reads，结果以fastq格式储存，它包括序列的碱基组成信息以及其对应的序列质量信息，双端测序(pair-end)会分为两个Reads文件：_1 ，_2。
			</p>
				<h4>fastq格式文件展示如下：</h4>
				<div class="center">
					<img     src="__PUBLIC__/image/data/format.png" alt="fastq格式文件">
				</div>
				<p>第一行：reads名称</p>
				<p>第二行：碱基序列</p>
				<p>第三行：+，无任何意义</p>
				<P>第四行：测序质量值，每个碱基对应一个质量值</p>
		</div>
		<br/>
	</div>
</div>
</body>
</html>