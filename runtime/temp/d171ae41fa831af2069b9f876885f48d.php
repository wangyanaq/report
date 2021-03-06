<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"C:\xampp\htdocs\report\public/../application/pc\view\pathway\pathway.html";i:1502779585;s:70:"C:\xampp\htdocs\report\public/../application/pc\view\common\_meta.html";i:1502851846;s:72:"C:\xampp\htdocs\report\public/../application/pc\view\common\_footer.html";i:1502778348;}*/ ?>
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
<title>富集分析</title>
</head>
<body onLoad="setupZoom();">
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> <?php echo $bh_id; ?> <span class="c-gray en">&gt;</span> 富集分析 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="main_content">
		<h3 class="main_title">富集分析</h3>
		<div class="HuiTab">
			<div class="go-photo">
				<div class="photo-title" id="3_1">GO富集</div>
			</div>
			<?php if($go['flag']==1): ?>
			<div class="go-photo" style="float:left">
				<?php if(is_array($go['list']) || $go['list'] instanceof \think\Collection): if( count($go['list'])==0 ) : echo "" ;else: foreach($go['list'] as $k=>$vo): ?>
				<a href="__MPATH__/<?php echo $analysis_id; ?>/enrich/<?php echo $vo; ?>" title="<?php echo $k; ?>" style="float:left;">
					<img src="__MPATH__/<?php echo $analysis_id; ?>/enrich/<?php echo $vo; ?>" alt=""/>
				</a>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<p class="lable">基因本体（Gene Ontology， GO）是一个在生物信息学领域中广泛使用的本体。
				1998年由研究三种模式（果蝇、小鼠和酵母）基因组的研究者共同发起组织了一个称为基因本体
				联盟的专业团队。创建基因本体的初衷是希望提供一个可具代表性的规范化的基因和基因产物
				特性的术语描绘或词义解释的工作平台 。 现在已包含数十个动物、植物、微生物的数据库。
				基因本体涉及的基因和基因产物词汇分为三大类，涵盖生物学的三个方面：</p>

			<p>细胞组分（cellular component）：细胞的每个部分和细胞外环境。</p>
			<p>分子功能（molecular function）：可以描述为分子水平的活性（activity），如催化（catalytic）或结合（binding）活性。</p>
			<p>生物过程（biological process）：生物过程系指由一个或多个分子功能有序组合而产生的系列事件。其定义有广义和狭义之分，在词义上可以区分为泛指和特指。一般规律是，一个过程是由多个不同的步骤组成。 </p>
			<p>注：生物过程与途径或通路（pathway）不是同一回事。</p>
			<?php if($go['enrich']==1): ?>
			<p class="clearfix" style="height: 40px;line-height: 40px;">如果您需要查看GO分析数据，请点击右侧按钮下载！
				<a   href="__MPATH__/<?php echo $analysis_id; ?>/enrich/go_enrichment.zip"> <img src="__PUBLIC__/image/downloading.gif"  style="float: right;width: 120px;height: 40px"/></a>
			</p>
			<?php endif; ?>
			<br/>
			<?php else: ?>
			<p>没有相关结果数据</p>
			<?php endif; ?>
			<div class="kegg-photo">
				<div class="photo-title" id="3_2">KEGG富集</div>
			</div>
			<?php if($kegg['flag']==1): ?>
			<div class="go-photo" style="float:left">
				<?php if(is_array($kegg['list']) || $kegg['list'] instanceof \think\Collection): if( count($kegg['list'])==0 ) : echo "" ;else: foreach($kegg['list'] as $k=>$vo): ?>
				<a href="__MPATH__/<?php echo $analysis_id; ?>/enrich/<?php echo $vo; ?>" title="<?php echo $k; ?>" style="float:left;">
					<img src="__MPATH__/<?php echo $analysis_id; ?>/enrich/<?php echo $vo; ?>" alt=""/>
				</a>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<br/>
			<p class="lable">KEGG(Kyoto Encyclopedia of Genes and Genomes)是系统分析基因功能、基因组信息数据库，
				它有助于研究者把基因及表达信息作为一个整体网络进行研究。基因组信息存储在 GENES 数据库里，包括完整和
				部分测序的基因组序列；更高级的功能信息存储在 PATHWAY 数据库里，包括图解的细胞生化过程如代谢、膜转
				运、信号传递、细胞周期，还包括同系保守的子通路等信息。 KEGG 提供的整合代谢途径 (pathway)，包括碳
				水化合物、核苷、氨基酸等的代谢及有机物的生物降解，不仅提供了所有可能的代谢途径，而且对催化各步反应
				的酶进行了全面的注解，包含有氨基酸序列、 PDB 库的链接等等。 KEGG 是进行生物体内代谢分析、代谢网络研
				究的强有力工具。</p>
			<p>将差异表达基因进行 KEGG 富集分析，可以把差异显著的 pathway 进行富集，有助于找到实验条件下显著性差异变化的生物学调控通路。</p>
			<?php if($kegg['enrich']==1): ?>
			<p class="clearfix" style="height: 40px;line-height: 40px;">注:如果您需要查看KEGG分析数据，请点击右侧按钮下载！
				<a   href="__MPATH__/<?php echo $analysis_id; ?>/enrich/kegg_enrichment.zip"> <img src="__PUBLIC__/image/downloading.gif"  style="float: right;width: 120px;height: 40px"/></a>
			</p>
			<?php endif; else: ?>
				<p>没有相关数据结果</p>
			<?php endif; ?>
		</div>
		<br/>
		<br/>
<?php if($pathway['flag']==1): ?>
		<h3 class="main_title">Pathway通路图下载</h3><br/>
		<div class="HuiTab">
			<p class="clearfix" style="height: 40px;line-height: 40px;">此文件包含了您项目中基因的通路图信息，点击右侧下载全部信息。(数据源采用KEGG数据库)
				<a   href="__MPATH__/<?php echo $analysis_id; ?>/enrich/pathway.zip">
					<img src="__PUBLIC__/image/downloading.gif"  style="float: right;width: 120px;height: 40px"/>
				</a>
			</p>
		</div>
<?php endif; ?>
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
/*资讯-添加*/
function article_add(title,url,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*资讯-编辑*/
function article_edit(title,url,id,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*资讯-删除*/
function article_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$(obj).parents("tr").remove();
		layer.msg('已删除!',{icon:1,time:1000});
	});
}
/*资讯-审核*/
function article_shenhe(obj,id){
	layer.confirm('审核文章？', {
		btn: ['通过','不通过','取消'], 
		shade: false,
		closeBtn: 0
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="article_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布', {icon:6,time:1000});
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="article_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
		$(obj).remove();
    	layer.msg('未通过', {icon:5,time:1000});
	});	
}
/*资讯-下架*/
function article_stop(obj,id){
	layer.confirm('确认要下架吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="article_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
		$(obj).remove();
		layer.msg('已下架!',{icon: 5,time:1000});
	});
}

/*资讯-发布*/
function article_start(obj,id){
	layer.confirm('确认要发布吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="article_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布!',{icon: 6,time:1000});
	});
}
/*资讯-申请上线*/
function article_shenqing(obj,id){
	$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
	$(obj).parents("tr").find(".td-manage").html("");
	layer.msg('已提交申请，耐心等待审核!', {icon: 1,time:2000});
}

</script> 
</body>
</html>