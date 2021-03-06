<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"C:\xampp\htdocs\report\public/../application/pc\view\article_data\qc.html";i:1502779422;s:70:"C:\xampp\htdocs\report\public/../application/pc\view\common\_meta.html";i:1502851846;s:72:"C:\xampp\htdocs\report\public/../application/pc\view\common\_footer.html";i:1502778348;}*/ ?>
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
<title>文章常用数据</title>
</head>
<body onLoad="setupZoom();" >
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span><?php echo $bh_id; ?><span class="c-gray en">&gt;</span> 文章常用数据 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="main_content">
		<h3 class="main_title" id="4_1">数据链接</h3>
		<!--<div class="HuiTab" id="jump">
			<p style="height:40px">如果您需要后期验证，请参照下面文件：</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;♦ LncRNA靶基因<a   href="diff_gene#2_3"  title="差异筛选结果">查看</a></p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;♦ CircRNA MRE<a    href="diff_gene#2_4" title="差异筛选结果">查看</a></p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;♦ 富集分析<a   href="pathway" title="富集分析">查看</a></p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;♦ 热图<a   href="diff_gene#2_7" title="差异筛选结果">查看</a></p></p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;♦原始数据<a   href="rawData" title="原始数据">查看</a></p></p>
		</div>-->
		<div class="HuiTab">
		 
			<table class="table table-border table-bordered table-bg mt-20">
				<tbody>
				<tr>
					<td  style="text-align:center"><b>类型</b></td>
					<td  style="text-align:center"><b>链接</b></td>
				</tr>
				<?php if($bh['circrna_pre']==1): ?>
				<tr>
					<td   style="text-align:center"> CircRNA MRE</td>
					<td   style="text-align:center"><a   href="chipDiff/<?php echo $bh_id; ?>#2_4"  class="jump" title="差异筛选结果">查看</a></td>
				</tr>
				<?php endif; if($bh['lncrna_pre']==1): ?>
				<tr>
					<td   style="text-align:center">  LncRNA靶基因</td>
					<td   style="text-align:center"><a   href="chipDiff/<?php echo $bh_id; ?>#2_3"   class="jump" title="差异筛选结果">查看</a></td>
				</tr>
				<?php endif; ?>
				<tr>
					<td   style="text-align:center"> 热图</td>
					<td   style="text-align:center"><a   href="chipDiff/<?php echo $bh_id; ?>#2_7"  class="jump" title="差异筛选结果">查看</a></td>
				</tr>
				<tr>
					<td   style="text-align:center"> 差异基因列表</td>
					<td   style="text-align:center"><a   href="chipDiff/<?php echo $bh_id; ?>#2_2"  class="jump"  title="差异筛选结果">查看</a></td>
				</tr>
				<tr>
					<td   style="text-align:center"> 富集分析</td>
					<td   style="text-align:center"><a   href="pathway/<?php echo $bh_id; ?>"  class="jump" title="富集分析">查看</a></td>
				</tr>
				<?php if($data['nor_data']==1): ?>
				<tr>
					<td   style="text-align:center">原始数据</td>
					<td   style="text-align:center"><a   href="__MPATH__/<?php echo $analysis_id; ?>/data/rawdata.zip"  >下载</a></td>
				</tr>
				<?php endif; if($data['all_data']==1): ?>
				<tr>
					<td   style="text-align:center">所有结果文件</td>
					<td   style="text-align:center"><a   href="__MPATH__/<?php echo $analysis_id; ?>/All_Data.zip"  >下载</a></td>
				</tr>
				<?php endif; ?>

				</tbody>
			</table>
		</div>

		<!--<div class="HuiTab">
			<ul id="Huifold2" class="Huifold">
				<li class="item">
					<h4>LncRNA靶基因<b>+</b></h4>
					<div class="info"> 内容<br>很多内容 </div>
				</li>
				<li class="item">
					<h4>	CircRNA MRE<b>+</b></h4>
					<div class="info">
						<div class="HuiTab">
						sdfs
						</div>
					</div>
				</li>
				<li class="item">
					<h4>富集分析<b>+</b></h4>
					<div class="info"><img src="pic/1.png" ></div>
				</li>
				<li class="item">
					<h4>Heatmap<b>+</b></h4>
					<div class="info">
						<p style=" text-indent:2em; padding:0 10%; display:block">箱线图（Box plot）说明：箱线图又称为"盒图"，
							用于展示数据的对称与否，分布的分散程度等信息。下图中横坐标为样品名，纵坐标为探针的信号值取了log2之后的值。
							矩形盒上下两边对应数据的上下四分位数（Q1和Q3），矩形盒内部中位线为中位数，上划线为Q1+1.5IQR处，下划线为
							Q3-1.5IQR，其中IQR (Inter Quantile Range)为中四分位范围，IQR=Q3-Q1。</p>
						<a href="http://10.2.2.153/data/pUItWJC9vOTfmsv6xZje8gczoYpKQ79b1ihrcJOgwAdpZtnTDW/qc/box_plot.png" >
							<img src="http://10.2.2.153/data/pUItWJC9vOTfmsv6xZje8gczoYpKQ79b1ihrcJOgwAdpZtnTDW/qc/box_plot.png" width="100%" height="100%" style="padding:0 10%">
						</a>
						<p style=" text-indent:2em; padding:0 10%">备注：对基因芯片数据的标准化处理，主要目的是消除由于实验技术所导致的表达量(Intensity) 的变化，
							并且使各个样本(sample)和平行实验的数据处于相同的水平，从而使我们可以得到具有生物学意义的基因表达量的变化。标准化的方法根据芯片的种类、
							数据处理的阶段和目的不同而有所差异。标准化数据可以通过Box Plot图来观察各样品数据分布的整体特征。<a href="#">点击下载</a>箱线图说明文件。</p>
					</div>
				</li>
				<li class="item">
					<h4>原始数据<b>+</b></h4>
					<div class="info">
						<p style=" text-indent:2em; padding:0 10%; display:block">箱线图（Box plot）说明：箱线图又称为"盒图"，
							用于展示数据的对称与否，分布的分散程度等信息。下图中横坐标为样品名，纵坐标为探针的信号值取了log2之后的值。
							矩形盒上下两边对应数据的上下四分位数（Q1和Q3），矩形盒内部中位线为中位数，上划线为Q1+1.5IQR处，下划线为
							Q3-1.5IQR，其中IQR (Inter Quantile Range)为中四分位范围，IQR=Q3-Q1。</p>
						<a href="http://10.2.2.153/data/pUItWJC9vOTfmsv6xZje8gczoYpKQ79b1ihrcJOgwAdpZtnTDW/qc/box_plot.png" >
							<img src="http://10.2.2.153/data/pUItWJC9vOTfmsv6xZje8gczoYpKQ79b1ihrcJOgwAdpZtnTDW/qc/box_plot.png" width="100%" height="100%" style="padding:0 10%">
						</a>
						<p style=" text-indent:2em; padding:0 10%">备注：对基因芯片数据的标准化处理，主要目的是消除由于实验技术所导致的表达量(Intensity) 的变化，
							并且使各个样本(sample)和平行实验的数据处于相同的水平，从而使我们可以得到具有生物学意义的基因表达量的变化。标准化的方法根据芯片的种类、
							数据处理的阶段和目的不同而有所差异。标准化数据可以通过Box Plot图来观察各样品数据分布的整体特征。<a href="#">点击下载</a>箱线图说明文件。</p>
					</div>
				</li>
			</ul>

		</div>-->
		<!--<h3 class="main_title" id="3_2">质检图</h3>
			<div class="HuiTab">
				<div class="qc_pic">

					<img src="http://10.2.2.153/data/pUItWJC9vOTfmsv6xZje8gczoYpKQ79b1ihrcJOgwAdpZtnTDW/qc/qc_1.png" alt=""/>
					<img src="http://10.2.2.153/data/pUItWJC9vOTfmsv6xZje8gczoYpKQ79b1ihrcJOgwAdpZtnTDW/qc/qc_2.png" alt=""/>
				</div>
				<h4>电泳质控标准：</h4>
				<p class="lable">1.若后续实验为Agilent miRNA芯片或miRNA定量PCR:</p>
				<p class="lable">1.1 RIN（RNA完整系数）>=6.0且28s/18s>=0.7;</p>
				<p class="lable">1.2 无真核或原核生物污染；无DNA或蛋白污染；无过多的5s rRNA。</p>
				<p class="lable">2.若后续实验为非Agilent miRNA芯片或非miRNA定量PCR:</p>
				<p class="lable">2.1 RIN>=7.0且28s/18s>=0.7;</p>
				<p class="lable">2.2 无真核或原核生物污染；无DNA或蛋白污染；无过多的5s rRNA。</p>
				<p class="lable">3.当RIN为“N/A”时，样本质量凭样品管理中心的经验判断。</p>
				<br/>
				<p class="lable">注：以上为RNA质检信息，如果您需要下载完整的质控报告(包含仪器试剂信息)，请 <a href="#">点击下载</a>。</p>
			</div>
		<br/>
		<br/>-->
		
		<h3 class="main_title" id="4_2">已发表文献</h3>
		<div class="HuiTab">
				<p>1. Huang P.Y. et al., 2014. Direct Reprogramming of Human Fibroblasts to Functional and Expandable Hepatocytes. Cell Stem Cell , 14(3) , 370 - 384.</p>
				<br/>
				<p>2. Xu C., Ju X. et al., 2014. An association analysis between psychophysical characteristics and genome-wide gene expression changes in human adaptation to the extreme climate at the Antarctic Dome Argus. Mol Psychiatry. doi:10.1038/mp.2014.72.
				</p><br/>
				<p>3. Wang Y., Gu X.G., et al. 2014.SATB1 over-expression promotes malignant T-cell proliferation in cutaneous CD30+ lymphoproliferative disease by repressing p21. Blood. 23(22):3452-61.</p><br/>
				<p>4. Zhang X., Ma W. et al., 2014. Regulation of p21 by TWIST2 contributes to its tumor-suppressor function in human acute myeloid leukemia. Oncogene. doi:10.1038/onc.</p><br/>
				<p>5. Zhang Y. M., Zhan YZ. et al. 2014. Eupolyphaga sinensis Walker displays inhibition on hepatocellular carcinoma through regulating cell growth and metastasis signaling. Sci Rep-UK. 4: 5518.</p><br/>
				<p>6. Wang F., Zhou Y. et al., 2014. Molecular signatures and transcriptional regulatory networks of human immature decidual NK and mature peripheral NK cells. Eur J Immunol. DOI: 10.1002/eji.201344183.
				</p><br/>
				<p>7. Du J., Wu Y. Y. et al., 2014. Mechanism of SB431542 in inhibiting mouse embryonic stem cell differentiation. Cell Signal. 26(10): 2107–116.</p><br/>
				<p>8. Jia B., Yu Z.J. et al., 2014. Hyperammonaemia induces hepatic injury with alteration of gene expression profiles. Liver Int. 34(5):748-58.</p><br/>
				<p>9. Wang Z. C., Fan Y. T. et al., 2014. Transcriptome Analysis of the Hippocampus in Novel Rat Model of Febrile Seizures. PLoS One. 9(4):e95237.</p><br/>
				<p>10. Li X., Gao Y.Y. et al., 2014. Identification of Gene Expression Changes from Colitis to CRC in the Mouse CAC Model. PloS one. 9(4):e95347.</p><br/>
				<p>etc.</p>
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
	$(function() {
		$('#jump').on('click', 'a', function (e) {
			e.preventDefault();
			var path=$(this).attr('href');
			var title=$(this).attr('title');
			if(path.indexOf('#')!='-1'){
				var arr=path.split('#');
				src_1=arr[0];
				i=arr[1];
				var a='<a data-href="'+src_1+'" target="_self" data-title="'+title+'" href="javascript:void(0)"></a>';

			}
			else{
				src_1=path;
				var a='<a data-href="'+(src_1) +'" target="_self" data-title="'+title+'" href="javascript:void(0)"></a>';
			}
			var exit=	$('#min_title_list',window.parent.document).find('[data-href^="' +src_1+'"]',window.parent.document);
			if(path.indexOf('#')!='-1'){
				if(exit.length){
					$('#min_title_list',window.parent.document).find('[data-href^="' +src_1+'"]',window.parent.document).parent().addClass('active').siblings('.active').removeClass('active');
					$('#iframe_box',window.parent.document).find('[src^="' +src_1+'"]',window.parent.document).attr('src',src_1+'#'+arr[1]).parent().css('display','block').siblings().css('display','none');
				}else{
					Hui_admin_tab(a);
					$('#iframe_box',window.parent.document).find('[src^="' +src_1+'"]',window.parent.document).attr('src',src_1+'#'+arr[1]);
				}

			}else{
				Hui_admin_tab(a);
				$('#iframe_box',window.parent.document).find('[src^="' +src_1+'"]',window.parent.document).attr('src',src_1);
			}
		});
		$('a.jump').on('click', function (e) {
			e.preventDefault();
			var path=$(this).attr('href');
			var title=$(this).attr('title');
			if(path.indexOf('#')!='-1'){
				var arr=path.split('#');
				src_1=arr[0];
				i=arr[1];
				var a='<a data-href="'+src_1+'" target="_self" data-title="'+title+'" href="javascript:void(0)"></a>';

			}
			else{
				src_1=path;
				var a='<a data-href="'+(src_1) +'" target="_self" data-title="'+title+'" href="javascript:void(0)"></a>';
			}
			var exit=	$('#min_title_list',window.parent.document).find('[data-href^="' +src_1+'"]',window.parent.document);
			if(path.indexOf('#')!='-1'){
				if(exit.length){
					$('#min_title_list',window.parent.document).find('[data-href^="' +src_1+'"]',window.parent.document).parent().addClass('active').siblings('.active').removeClass('active');
					$('#iframe_box',window.parent.document).find('[src^="' +src_1+'"]',window.parent.document).attr('src',src_1+'#'+arr[1]).parent().css('display','block').siblings().css('display','none');
				}else{
					Hui_admin_tab(a);
					$('#iframe_box',window.parent.document).find('[src^="' +src_1+'"]',window.parent.document).attr('src',src_1+'#'+arr[1]);
				}

			}else{
				Hui_admin_tab(a);
				$('#iframe_box',window.parent.document).find('[src^="' +src_1+'"]',window.parent.document).attr('src',src_1);
			}
		});
	});
</script> 
</body>
</html>