<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"C:\xampp\htdocs\report\public/../application/pc\view\login\login.html";i:1502851827;s:72:"C:\xampp\htdocs\report\public/../application/pc\view\common\_header.html";i:1502765597;s:68:"C:\xampp\htdocs\report\public/../application/pc\view\login\body.html";i:1502939333;}*/ ?>
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
<title>上海伯豪生物报告系统</title>
<meta name="keywords" content="上海伯豪生物报告">
<meta name="description" content="上海伯豪生物报告系统由公司内部人员开发，用于展示客户在本公司项目结果展示以及下载。">
	<style>
	.bk_2 	a{width: 100%;
		display: block;
		}
		a:hover{
			text-decoration: none;
		}
	</style>
	<link rel="stylesheet" href="__PUBLIC__/js/skin/layer.css" id="layui_layer_skinlayercss">
</head>
<?php if($curr_bh['status']==1): ?>
<body >
<?php else: ?>
<body class="big-page" >
<?php endif; ?>
<div id="tbody">
	<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl">
			<a class="logo navbar-logo f-l mr-10 hidden-xs" href="http://www.shbio.com" target="_blank">上海伯豪生物技术有限公司</a>
			<!--<a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a>
      <span class="logo navbar-slogan f-l mr-10 hidden-xs">v2.5</span>
      <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>-->
			<nav class="nav navbar-nav">
				<ul class="cl">
					<li class="dropDown dropDown_hover">
						<a href="javascript:;" class="dropDown_A">
							<!--<i class="Hui-iconfont">&#xe600;</i>-->&nbsp;合同列表 <i class="Hui-iconfont">&#xe6d5;</i>
						</a>
						<ul class="dropDown-menu menu radius box-shadow" id="menu">
							<?php if($status==1): if(is_array($bh_id_all) || $bh_id_all instanceof \think\Collection): if( count($bh_id_all)==0 ) : echo "" ;else: foreach($bh_id_all as $key=>$vo): ?>
							<li>
								<a href="javascript:void(0);"  class="update">
									<i class="Hui-iconfont">&#xe60d;</i>&nbsp; <span><?php echo $vo['bh_id']; ?></span></a>
							</li>
							<?php endforeach; endif; else: echo "" ;endif; else: endif; ?>
						</ul>
					</li>
				</ul>
			</nav>
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li>欢迎，</li>
					<li><?php echo $username; ?></li>
					<li>&nbsp;</li>
					<li>&nbsp;</li>
					<li>&nbsp;</li>
					<?php if($status==1): ?>
					<li>当前合同号：</li>
					<li class="curr_bh"><?php echo $bh_id; ?></li>
					<?php else: ?>
					<li><?php echo $bh_id; ?></li>
					<?php endif; ?>
					<li>&nbsp;</li>
					<li>&nbsp;</li>
					<li>&nbsp;</li>
					<li><a href="__PATH__">退出</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>
 
<?php if($bh_status=='bh'): ?>
<!--芯片报告-->
  <?php if($status==1): ?>
  <aside class="Hui-aside">
    <input runat="server" id="divScrollValue" type="hidden" value="" />
    <div class="menu_dropdown bk_2">
      <dl id="menu-article">
        <dt><a data-href="article/<?php echo $bh_id; ?>" data-title="项目概况"   href="javascript:void(0)"><i class="Hui-iconfont">&#xe616;</i>&nbsp;项目概况<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></a></dt>
        <dd>
          <ul>
            <!--<li><a  data-i="#1_1"  target="_self" data-title="项目概况"  href="javascript:void(0)">差异基因信息</a></li>-->
            <li><a  data-i="#1_1"  target="_self" data-title="项目概况"  href="javascript:void(0)">质控信息</a></li>
            <li><a  data-i="#1_2"  target="_self" data-title="项目概况" href="javascript:void(0)">样本分组情况</a></li>
            <li><a  data-i="#1_3"  target="_self" data-title="项目概况" href="javascript:void(0)">数据分析文档</a></li>
            <li><a  data-i="#1_4"  target="_self" data-title="项目概况" href="javascript:void(0)">实验文档</a></li>
          </ul>
        </dd>
      </dl>
      <dl id="menu-picture">
        <dt><a data-href="chipDiff/<?php echo $bh_id; ?>" data-title="差异筛选结果" href="javascript:void(0)"><i class="Hui-iconfont">&#xe613;</i>&nbsp;差异筛选结果<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></a></dt>
        <dd>
          <ul>
            <li><a data-i="#2_1" data-title="差异筛选结果" href="javascript:void(0)">差异基因数目统计</a></li>
            <li><a data-i="#2_2" data-title="差异筛选结果" href="javascript:void(0)">差异基因列表</a></li>
            <?php if($ana_row['lncrna_pre']==1 /*or $curr_bh['chip_company']=='lncRNA'*/): ?>
            <li><a data-i="#2_3" data-title="差异筛选结果" href="javascript:void(0)">LncRNA靶基因</a></li>
            <?php endif; if($ana_row['circrna_pre']==1/* and $curr_bh['chip_company']!='lncRNA'*/): ?>
            <li><a data-i="#2_4"  data-title="差异筛选结果" href="javascript:void(0)">CircRNA MRE</a></li>
            <?php endif; if($ana_row['volcano_plot']==1): ?>
            <li><a data-i="#2_5"  data-title="差异筛选结果" href="javascript:void(0)">火山图</a></li>
            <?php endif; if($ana_row['scatter_plot']==1): ?>
            <li><a data-i="#2_6"  data-title="差异筛选结果" href="javascript:void(0)">散点图</a></li>
            <?php endif; if($ana_row['heatmap']==1): ?>
            <li><a data-i="#2_7"  data-title="差异筛选结果" href="javascript:void(0)">热图</a></li>
            <?php endif; ?>
          </ul>
        </dd>
      </dl>
      <dl id="menu-comments">
        <dt><a data-href="pathway/<?php echo $bh_id; ?>" data-title="富集分析" href="javascript:void(0)"><i class="Hui-iconfont">&#xe622;</i>&nbsp;富集分析 <i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></a></dt>
        <dd>
          <ul>
            <li><a data-i="#3_1" data-title="富集分析" href="javascript:void(0)">GO富集分析</a></li>
            <li><a data-i="#3_2"  data-title="富集分析" href="javascript:void(0)">KEGG富集分析</a></li>
          </ul>
        </dd>
      </dl>
      <dl id="menu-product">
        <dt><a data-href="data/<?php echo $bh_id; ?>" data-title="文章常用数据" href="javascript:void(0)"><i class="Hui-iconfont">&#xe620;</i>&nbsp;文章常用数据<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></a></dt>
        <dd>
          <ul>
            <li><a data-i="#4_1" data-title="文章常用数据" href="javascript:void(0)">数据链接：差异基因表</a></li>
            <li><a data-i="#4_2" data-title="文章常用数据" href="javascript:void(0)">已发表文献</a></li>
          </ul>
        </dd>
      </dl>
      <dl id="menu-admin">
        <dt><a data-href="validchip/<?php echo $bh_id; ?>" data-title="表达谱芯片验证" href="javascript:void(0)"><i class="Hui-iconfont">&#xe61a;</i> 表达谱芯片验证 <!--<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>--></a></dt>
       <!-- <dd>
          <ul>
            <li><a data-i="#5_1" data-title="表达谱芯片验证" href="javascript:void(0)">芯片验证</a></li>
          </ul>
        </dd>-->
      </dl>
      <dl id="menu-tongji">
        <dt><a data-href="source/<?php echo $bh_id; ?>" data-title="SAS使用指南" href="javascript:void(0)"><i class="Hui-iconfont">&#xe62d;</i>&nbsp;SAS使用指南 </a></dt>
      </dl>
      <dl id="menu-member">
        <dt><a data-href="rawData/<?php echo $bh_id; ?>" data-title="GEO上传指南" href="javascript:void(0)"><i class="Hui-iconfont">&#xe60d;</i>&nbsp;GEO上传指南 </a></dt>
      </dl>
    </div>
  </aside>
  <?php endif; ?>
  <div class="dislpayArrow hidden-xs">
    <?php if($curr_bh['status']==1): ?>
    <a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a>
    <?php else: ?>
    <a class="pngfix open" href="javascript:void(0);" onClick="displaynavbar(this)" style="display: none;"></a>
    <?php endif; ?>
  </div>
  <section class="Hui-article-box">
    <div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
      <div class="Hui-tabNav-wp">
        <ul id="min_title_list" class="acrossTab cl">
          <li class="active"><span title="我的桌面" data-href="welcome.html">我的桌面</span><em></em></li>
        </ul>
      </div>
      <div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
    </div>
    <div id="iframe_box" class="Hui-article">
      <div class="show_iframe">
        <div style="display:none" class="loading"></div>
        <iframe scrolling="yes" frameborder="0" src="welcome/<?php echo $bh_id; ?>"></iframe>
      </div>
    </div>
  </section>
<?php elseif($bh_status=='bc'): ?>
<!--rna测序报告-->
  <aside class="Hui-aside">
    <input runat="server" id="divScrollValue2" type="hidden" value="" />
    <div class="menu_dropdown bk_2">
      <dl id="menu-project">
        <dt><a  data-title="项目概况"   href="javascript:void(0)"><i class="Hui-iconfont">&#xe616;</i>&nbsp;项目概况<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></a></dt>
        <dd>
          <ul>
            <li><a  data-href="project"  target="_self" data-title="分组信息" href="javascript:void(0)">分组信息</a></li>
            <li><a  data-href="chart"  target="_self" data-title="分析流程图"  href="javascript:void(0)">分析流程图</a></li>
            <li><a  data-href="format"  target="_self" data-title="测序序列格式展示"  href="javascript:void(0)">测序序列格式展示</a></li>
            <li><a  data-href="evaluate"  target="_self" data-title="测序质量评估" href="javascript:void(0)">测序质量评估</a></li>
            <li><a  data-href="pretreatment "  target="_self" data-title="数据预处理" href="javascript:void(0)">数据预处理</a></li>
            <li><a  data-href="mapping"  target="_self" data-title="基因组比对" href="javascript:void(0)">基因组比对</a></li>
          </ul>
        </dd>
      </dl>
      <!--<dl id="menu-article">
        <dt><a  data-title="测序质量评估"   href="javascript:void(0)"><i class="Hui-iconfont">&#xe616;</i>&nbsp; 测序质量评估<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></a></dt>
        <dd>
          <ul>
            <li><a  data-href="qc/L58_no_rRNA.1qc" target="_self" data-title="L58_no_rRNA.1qc" href="javascript:void(0)">L58_no_rRNA.1qc</a></li>
            <li><a  data-href="qc/L58_no_rRNA.2qc"  target="_self" data-title="L58_no_rRNA.2qc" href="javascript:void(0)">L58_no_rRNA.2qc</a></li>
            <li><a  data-href="qc/L581_no_rRNA.1qc" target="_self" data-title="L581_no_rRNA.1qc" href="javascript:void(0)">L581_no_rRNA.1qc</a></li>
            <li><a  data-href="qc/L581_no_rRNA.2qc"  target="_self" data-title="L581_no_rRNA.2qc" href="javascript:void(0)">L581_no_rRNA.2qc</a></li>
            <li><a  data-href="qc/L58_no_rRNA.1qc" target="_self" data-title="L58_no_rRNA.1qc" href="javascript:void(0)">L58_no_rRNA.1qc</a></li>
            <li><a  data-href="qc/L58_no_rRNA.2qc"  target="_self" data-title="L58_no_rRNA.2qc" href="javascript:void(0)">L58_no_rRNA.2qc</a></li>
            <li><a  data-href="qc/L581_no_rRNA.1qc" target="_self" data-title="L581_no_rRNA.1qc" href="javascript:void(0)">L581_no_rRNA.1qc</a></li>
            <li><a  data-href="qc/L581_no_rRNA.2qc"  target="_self" data-title="L581_no_rRNA.2qc" href="javascript:void(0)">L581_no_rRNA.2qc</a></li>
            <li><a  data-href="qc/L58_no_rRNA.1qc" target="_self" data-title="L58_no_rRNA.1qc" href="javascript:void(0)">L58_no_rRNA.1qc</a></li>
            <li><a  data-href="qc/L58_no_rRNA.2qc"  target="_self" data-title="L58_no_rRNA.2qc" href="javascript:void(0)">L58_no_rRNA.2qc</a></li>
            <li><a  data-href="qc/L581_no_rRNA.1qc" target="_self" data-title="L581_no_rRNA.1qc" href="javascript:void(0)">L581_no_rRNA.1qc</a></li>
            <li><a  data-href="qc/L581_no_rRNA.2qc"  target="_self" data-title="L581_no_rRNA.2qc" href="javascript:void(0)">L581_no_rRNA.2qc</a></li>
            <li><a  data-href="qc/L58_no_rRNA.1qc" target="_self" data-title="L58_no_rRNA.1qc" href="javascript:void(0)">L58_no_rRNA.1qc</a></li>
            <li><a  data-href="qc/L58_no_rRNA.2qc"  target="_self" data-title="L58_no_rRNA.2qc" href="javascript:void(0)">L58_no_rRNA.2qc</a></li>
            <li><a  data-href="qc/L581_no_rRNA.1qc" target="_self" data-title="L581_no_rRNA.1qc" href="javascript:void(0)">L581_no_rRNA.1qc</a></li>
            <li><a  data-href="qc/L581_no_rRNA.2qc"  target="_self" data-title="L581_no_rRNA.2qc" href="javascript:void(0)">L581_no_rRNA.2qc</a></li>
            <li><a  data-href="qc/L58_no_rRNA.1qc" target="_self" data-title="L58_no_rRNA.1qc" href="javascript:void(0)">L58_no_rRNA.1qc</a></li>
            <li><a  data-href="qc/L58_no_rRNA.2qc"  target="_self" data-title="L58_no_rRNA.2qc" href="javascript:void(0)">L58_no_rRNA.2qc</a></li>
            <li><a  data-href="qc/L581_no_rRNA.1qc" target="_self" data-title="L581_no_rRNA.1qc" href="javascript:void(0)">L581_no_rRNA.1qc</a></li>
            <li><a  data-href="qc/L581_no_rRNA.2qc"  target="_self" data-title="L581_no_rRNA.2qc" href="javascript:void(0)">L581_no_rRNA.2qc</a></li>
            <li><a  data-href="qc/L58_no_rRNA.1qc" target="_self" data-title="L58_no_rRNA.1qc" href="javascript:void(0)">L58_no_rRNA.1qc</a></li>
            <li><a  data-href="qc/L58_no_rRNA.2qc"  target="_self" data-title="L58_no_rRNA.2qc" href="javascript:void(0)">L58_no_rRNA.2qc</a></li>
            <li><a  data-href="qc/L581_no_rRNA.1qc" target="_self" data-title="L581_no_rRNA.1qc" href="javascript:void(0)">L581_no_rRNA.1qc</a></li>
            <li><a  data-href="qc/L581_no_rRNA.2qc"  target="_self" data-title="L581_no_rRNA.2qc" href="javascript:void(0)">L581_no_rRNA.2qc</a></li>
            <li><a  data-href="qc/L58_no_rRNA.1qc" target="_self" data-title="L58_no_rRNA.1qc" href="javascript:void(0)">L58_no_rRNA.1qc</a></li>
            <li><a  data-href="qc/L58_no_rRNA.2qc"  target="_self" data-title="L58_no_rRNA.2qc" href="javascript:void(0)">L58_no_rRNA.2qc</a></li>
            <li><a  data-href="qc/L581_no_rRNA.1qc" target="_self" data-title="L581_no_rRNA.1qc" href="javascript:void(0)">L581_no_rRNA.1qc</a></li>
            <li><a  data-href="qc/L581_no_rRNA.2qc"  target="_self" data-title="L581_no_rRNA.2qc" href="javascript:void(0)">L581_no_rRNA.2qc</a></li>
            <li><a  data-href="qc/L58_no_rRNA.1qc" target="_self" data-title="L58_no_rRNA.1qc" href="javascript:void(0)">L58_no_rRNA.1qc</a></li>
            <li><a  data-href="qc/L58_no_rRNA.2qc"  target="_self" data-title="L58_no_rRNA.2qc" href="javascript:void(0)">L58_no_rRNA.2qc</a></li>
            <li><a  data-href="qc/L581_no_rRNA.1qc" target="_self" data-title="L581_no_rRNA.1qc" href="javascript:void(0)">L581_no_rRNA.1qc</a></li>
            <li><a  data-href="qc/L581_no_rRNA.2qc"  target="_self" data-title="L581_no_rRNA.2qc" href="javascript:void(0)">L581_no_rRNA.2qc</a></li>
            <li><a  data-href="qc/L58_no_rRNA.1qc" target="_self" data-title="L58_no_rRNA.1qc" href="javascript:void(0)">L58_no_rRNA.1qc</a></li>
            <li><a  data-href="qc/L58_no_rRNA.2qc"  target="_self" data-title="L58_no_rRNA.2qc" href="javascript:void(0)">L58_no_rRNA.2qc</a></li>
            <li><a  data-href="qc/L581_no_rRNA.1qc" target="_self" data-title="L581_no_rRNA.1qc" href="javascript:void(0)">L581_no_rRNA.1qc</a></li>
            <li><a  data-href="qc/L581_no_rRNA.2qc"  target="_self" data-title="L581_no_rRNA.2qc" href="javascript:void(0)">L581_no_rRNA.2qc</a></li>
            <li><a  data-href="qc/L58_no_rRNA.1qc" target="_self" data-title="L58_no_rRNA.1qc" href="javascript:void(0)">L58_no_rRNA.1qc</a></li>
            <li><a  data-href="qc/L58_no_rRNA.2qc"  target="_self" data-title="L58_no_rRNA.2qc" href="javascript:void(0)">L58_no_rRNA.2qc</a></li>
            <li><a  data-href="qc/L581_no_rRNA.1qc" target="_self" data-title="L581_no_rRNA.1qc" href="javascript:void(0)">L581_no_rRNA.1qc</a></li>
            <li><a  data-href="qc/L581_no_rRNA.2qc"  target="_self" data-title="L581_no_rRNA.2qc" href="javascript:void(0)">L581_no_rRNA.2qc</a></li>
            <li><a  data-href="qc/L58_no_rRNA.1qc" target="_self" data-title="L58_no_rRNA.1qc" href="javascript:void(0)">L58_no_rRNA.1qc</a></li>
            <li><a  data-href="qc/L58_no_rRNA.2qc"  target="_self" data-title="L58_no_rRNA.2qc" href="javascript:void(0)">L58_no_rRNA.2qc</a></li>
            <li><a  data-href="qc/L581_no_rRNA.1qc" target="_self" data-title="L581_no_rRNA.1qc" href="javascript:void(0)">L581_no_rRNA.1qc</a></li>
            <li><a  data-href="qc/L581_no_rRNA.2qc"  target="_self" data-title="L581_no_rRNA.2qc" href="javascript:void(0)">L581_no_rRNA.2qc</a></li>
            <li><a  data-href="qc/L58_no_rRNA.1qc" target="_self" data-title="L58_no_rRNA.1qc" href="javascript:void(0)">L58_no_rRNA.1qc</a></li>
            <li><a  data-href="qc/L58_no_rRNA.2qc"  target="_self" data-title="L58_no_rRNA.2qc" href="javascript:void(0)">L58_no_rRNA.2qc</a></li>
            <li><a  data-href="qc/L581_no_rRNA.1qc" target="_self" data-title="L581_no_rRNA.1qc" href="javascript:void(0)">L581_no_rRNA.1qc</a></li>
            <li><a  data-href="qc/L581_no_rRNA.2qc"  target="_self" data-title="L581_no_rRNA.2qc" href="javascript:void(0)">L581_no_rRNA.2qc</a></li>
            <li><a  data-href="qc/L58_no_rRNA.1qc" target="_self" data-title="L58_no_rRNA.1qc" href="javascript:void(0)">L58_no_rRNA.1qc</a></li>
            <li><a  data-href="qc/L58_no_rRNA.2qc"  target="_self" data-title="L58_no_rRNA.2qc" href="javascript:void(0)">L58_no_rRNA.2qc</a></li>
            <li><a  data-href="qc/L581_no_rRNA.1qc" target="_self" data-title="L581_no_rRNA.1qc" href="javascript:void(0)">L581_no_rRNA.1qc</a></li>
            <li><a  data-href="qc/L581_no_rRNA.2qc"  target="_self" data-title="L581_no_rRNA.2qc" href="javascript:void(0)">L581_no_rRNA.2qc</a></li>
          </ul>
        </dd>
      </dl>-->
      <dl id="menu-picture2">
        <dt><a  data-title="基因表达分析结果" href="javascript:void(0)"><i class="Hui-iconfont">&#xe613;</i>&nbsp;基因表达分析结果<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></a></dt>
        <dd>
          <ul>
            <li><a  data-href="geneExpression" data-title="基因表达定量" href="javascript:void(0)">基因表达定量</a></li>
            <li><a  data-href="correlationAnalysis" data-title="表达相关性分析" href="javascript:void(0)">表达相关性分析</a></li>
            <li><a data-href="diffGene" data-title="基因差异表达分析" href="javascript:void(0)">基因差异表达分析</a></li>
          </ul>
        </dd>
      </dl>
      <dl id="menu-comments2">
        <dt><a  data-title="富集分析" href="javascript:void(0)"><i class="Hui-iconfont">&#xe622;</i>&nbsp;富集分析 <i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></a></dt>
        <dd>
          <ul>
            <li><a  data-href="go"data-title="GO富集分析" href="javascript:void(0)">GO富集分析</a></li>
            <li><a data-href="kegg"  data-title="KEGG富集分析" href="javascript:void(0)">KEGG富集分析</a></li>
          </ul>
        </dd>
      </dl>
      <dl id="menu-product2">
        <dt><a  data-title="新基因分析" href="javascript:void(0)"><i class="Hui-iconfont">&#xe620;</i>&nbsp;新基因分析<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></a></dt>
        <dd>
          <ul>
            <li><a  data-href="novelGene" data-title="新基因序列和表达定量" href="javascript:void(0)">新基因序列和表达定量</a></li>
            <li><a data-href="diffNovel" data-title="新基因差异表达分析" href="javascript:void(0)">新基因差异表达分析</a></li>
          </ul>
        </dd>
      </dl>
      <dl id="menu-admin2">
        <dt><a data-title="ncRNA分析" href="javascript:void(0)"><i class="Hui-iconfont">&#xe61a;</i> ncRNA分析  <i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i> </a></dt>
        <dd>
          <ul>
            <li><a data-href="prediction"  data-title="ncRNA预测" href="javascript:void(0)">ncRNA预测</a></li>
            <li><a data-href="expression"  data-title="ncRNA表达定量" href="javascript:void(0)">ncRNA表达定量</a></li>
            <li><a data-href="diff" data-title="ncRNA差异表达" href="javascript:void(0)">ncRNA差异表达</a></li>
            <li><a data-href="target"  data-title="ncRNA靶基因" href="javascript:void(0)">ncRNA靶基因</a></li>
            <li><a data-href="targetEnrichment" data-title="差异ncRNA的靶基因富集分析" href="javascript:void(0)">ncRNA靶基因富集分析</a></li>
            <li><a data-href="coExpression" data-title="差异ncRNA与差异mRNA共表达" href="javascript:void(0)">ncRNA与mRNA共表达</a></li>
          </ul>
        </dd>
      </dl>
      <dl id="menu-down">
        <dt><a  data-href="all"  data-title="下载所有数据" href="javascript:void(0)"><i class="Hui-iconfont">&#xe622;</i>&nbsp;下载所有数据</a></dt>
      </dl>
    </div>
  </aside>
  <div class="dislpayArrow hidden-xs">
    <?php if($curr_bh['status']==1): ?>
    <a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a>
    <?php else: ?>
    <a class="pngfix open" href="javascript:void(0);" onClick="displaynavbar(this)" style="display: none;"></a>
    <?php endif; ?>
  </div>
  <section class="Hui-article-box">
    <div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
      <div class="Hui-tabNav-wp">
        <ul id="min_title_list" class="acrossTab cl">
          <li class="active"><span title="我的桌面" data-href="welcome.html">我的桌面</span><em></em></li>
        </ul>
      </div>
      <div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
    </div>
    <div id="iframe_box" class="Hui-article">
      <div class="show_iframe">
        <div style="display:none" class="loading"></div>
        <iframe scrolling="yes" frameborder="0" src="welcome/<?php echo $bh_id; ?>"></iframe>
      </div>
    </div>
  </section>
<?php endif; ?>
</div>

<script>
	var PATH="__PATH__";
</script>
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.11.3.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/H-ui.js"></script>
<!--login-->
<script type="text/javascript" src="__PUBLIC__/js/layer.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.contextmenu.r2.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/num.js"></script>
<script type="text/javascript">
	/*
$(function(){
	$(".Hui-tabNav-wp").contextMenu('myMenu1', {
		bindings: {
			'open': function(t) {
				alert('Trigger was '+t.id+'\nAction was Open');
			},
			'email': function(t) {
				alert('Trigger was '+t.id+'\nAction was Email');
			},
			'save': function(t) {
				alert('Trigger was '+t.id+'\nAction was Save');
			},
			'delete': function(t) {
				alert('Trigger was '+t.id+'\nAction was Delete')
			}
		}
	});
});*/
</script>
</body>
</html>