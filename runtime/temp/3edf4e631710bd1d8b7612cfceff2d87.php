<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"C:\xampp\htdocs\report\public/../application/pc\view\rowdata\rawData.html";i:1502779740;s:70:"C:\xampp\htdocs\report\public/../application/pc\view\common\_meta.html";i:1502851846;}*/ ?>
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
<title>GEO上传指南</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span><?php echo $bh_id; ?><span class="c-gray en">&gt;</span> GEO上传指南<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="main_content">
		<h3 class="main_title"  >GEO介绍</h3>
		<div class="HuiTab">
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				首先对GEO数据库做一个介绍，它来源于美国国立生物技术信息中心(National Center for Biotechnology Information)，即我们所熟知的NCBI是由美国国立卫生研究院（NIH）于1988年创办。是其下面的一个分支数据库。</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Gene Expression Omnibus（GEO）是一个储存高通量功能基因组学数据的数据库，这些高通量功能基因组学数据来自芯片和新一代的测序仪得到的试验数据。GEO除了收录基因表达数据之外还收录其它数据，例如基因组拷贝数变异数据、基因组-蛋白相互作用数据以及基因组甲基化数据等。该数据库既接受原始数据，也接受经过处理的数据，不过这些数据都要符合“有关芯片试验的最小信息（minimum information about a microarray experiment，MIAME）”标准。</p>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				该数据库能存储好几种格式的数据，包括web格式、spreadsheets格式、XML格式和纯文本格式。GEO数据库被分为两个部分收录在Entrez中，分别是 <span style="color:red;">GEO Profiles数据库</span>（它负责收录一个基因在一次试验中的定量基因表达数据）和<span style="color:red;">GEO DataSets 数据库</span>（收录整个试验的数据）。目前，GEO数据库共收录了由世界各地的实验室提交的超过1871121个样本试验数据，16088个芯片平台记录，71339种实验项目以及3848种研究类型的基因表达谱数据。
			</p>
		</div>
		<h3 class="main_title" id="7_2">GEO上传流程</h3>
		<div class="HuiTab">
		 <p>
			 不管上传至哪个数据库，第一步都需要在NCBI上注册账号：</p>
			<p style="text-align: center"><img src="http://college.shbio.com/uploadfiles/20161201/1480577029104864.png" title="1480577029104864.png" alt="2.png"></p>
			<p style="text-align: center"><img src="http://college.shbio.com/uploadfiles/20161201/1480577036114774.png" title="1480577036114774.png" alt="3.png"></p>
			<p><span style="font-size:16px;font-family:'微软雅黑','sans-serif';color:#00B0F0">注意：新建的话，一定填写您常用的邮箱和基本信息，以免影响上传后的客服及时跟您沟通。</span></p>
			 <p> 注册成功后回到主页：</p>
		  <p style="text-align: center"><img src="http://college.shbio.com/uploadfiles/20161201/1480577044303933.png" title="1480577044303933.png" alt="4.png"></p>
			<p>  下拉框中选择“GEO Datasets”或者“GEO Profiles”，再点击“search”。</p>
			<p style="text-align: center"><img src="http://college.shbio.com/uploadfiles/20161201/1480577050676674.png" title="1480577050676674.png" alt="5.png"></p>
			<p>  点击“submit to GEO”提交数据通道。</p>
			<p>  如果对上传数据有了一定的了解，或是再次上传的，在准备工作做好的情况下，可以直接点击“GEOarchive”后面的“Submit”（如下图）</p>
			<p style="text-align: center"><img src="http://college.shbio.com/uploadfiles/20161201/1480577055993646.png" title="1480577055993646.png" alt="6.png"></p>
			<p>  这边还可以了解一下上传需要的数据类型，点击“Complete instructions”，结果如下图：</p>
			<p style="text-align: center"><img src="http://college.shbio.com/uploadfiles/20161201/1480577062742599.png" title="1480577062742599.png" alt="7.png"></p>
			<p> 对于上传所需要的文件内容，每个标题后面都有详细的注解。</p>
			<p> 	 初次上传数据，首先选择您芯片的类型，并点击：</p>
			<p style="text-align: center"><img src="http://college.shbio.com/uploadfiles/20161201/1480577068112979.png" title="1480577068112979.png" alt="8.png"></p>
			<p> 我们以Affymetrix human U133 plus 2.0为例：点击“affymetrix”后:</p>
			<p style="text-align: center"><img src="http://college.shbio.com/uploadfiles/20161201/1480577074497318.png" title="1480577074497318.png" alt="9.png"></p>
			<p>  阅读上图内容，我们了解到需要上传芯片需要准备的文件类型，对于AFFY芯片，我们需要准备的是一张metadata表和processed表（即为matrix表，我后面会重点讲），原始数据（cel格式的文件）。</p>
			<p style="text-align: center"><img src="http://college.shbio.com/uploadfiles/20161201/1480577081102084.png" title="1480577081102084.png" alt="11.png"></p>
			 <p> 每种品牌都有不同类型的芯片，当然根据设计的不同，用途不同，需要的metadata表也不同，这点需要确认清楚，我们的举例芯片是3’IVT格式的芯片，则需要下载是“3’or Whole Gene Expression Array-Matrix table option”</p>
			<p> 下载刚才提到的metadata表和processed表（即为matrix表），他们是同一个工作薄中两个子表。</p>
			<p style="text-align: center"><img src="http://college.shbio.com/uploadfiles/20161201/1480577086130683.png" title="1480577086130683.png" alt="22.png"></p>
			 <p> 这是metadata表，主要填写跟文章相关的样本信息和实验信息，每个填写项都有备注，有助于您填写。在这个工作薄里还有关于这两个表的案例展示（example）。</p>
			<p> 在metadata表中第二部分，查找芯片platform号，我们可以回到“GEOarchive”相关注释的界面上，如下图：</p>
			<p style="text-align: center"><img src="http://college.shbio.com/uploadfiles/20161201/1480577104101197.png" title="1480577104101197.png" alt="33.png"></p>
			<p>  点击“FIND PLATFORM”</p>
			<p style="text-align: center"><img src="http://college.shbio.com/uploadfiles/20161201/1480577114596377.png" title="1480577114596377.png" alt="44.png"></p>
			<p> <span style="font-size:16px;font-family:'微软雅黑','sans-serif';color:#00B0F0">尽可能根据您知道的物种，芯片类型，生产厂家等参数进行筛查。有种最简单直接的是通过您归一化数据实际探针行数来找</span></p>
			<p style="text-align: center"><img src="http://college.shbio.com/uploadfiles/20161201/1480577123978757.png" title="1480577123978757.png" alt="55.png"></p>
			<p>  这是matrix表，将您的归一化数据复制粘贴就行了，<span style="font-size:16px;font-family:'微软雅黑','sans-serif';color:#00B0F0">请用office 07版以上的版本打开它，对于超过2万多个探针的数据03版行数不够。</span></p>
			<p style="text-align: center"> <img src="http://college.shbio.com/uploadfiles/20161201/1480577128192739.png" title="1480577128192739.png" alt="66.png"></p>
			<p> 最后将原始数据和表格一起打包并命名，以便GEO客服更快的找到您的数据进行审核。</p>
			<p>  回到之前“GEOarchive”界面:</p>
			<p style="text-align: center"><img src="http://college.shbio.com/uploadfiles/20161201/1480577134458073.png" title="1480577134458073.png" alt="77.png"></p>
			<p>  点击“submit”</p>
			<p style="text-align: center"><img src="http://college.shbio.com/uploadfiles/20161201/1480577140777799.png" title="1480577140777799.png" alt="88.png"></p>
			<p>  选择压缩文件，上传类型，以及释放日期。</p>
			<p>  点击“submit”后，网页会不停的刷新，根据数据大小，刷新的时间不同。</p>
			<p style="text-align: center"><img src="http://college.shbio.com/uploadfiles/20161201/1480577148815925.png" title="1480577148815925.png" alt="99.png"></p>
			<p><span style="font-size:16px;font-family:'微软雅黑','sans-serif';color:#00B0F0">成功后会出现以上网页，同时您的邮箱中也会接收到正式文件，如果不成功，GEO客服也会以邮件形式告诉您，数据需要补充的内容。</span></p>
			<p>最后还需要给GEO客服写一封信，让他们知道你上传了数据，并让他们尽快发布：</p>
			<p><span style="font-size:16px;font-family:'微软雅黑','sans-serif';color:#00B0F0">这一步的作用是告诉GEO客服，您需要正式发布的数据。</span></p>
			<p style="text-align: center"><img src="http://college.shbio.com/uploadfiles/20161201/1480577154544911.png" title="1480577154544911.png" alt="00.png"></p>
			 <p>信件内容，首先说明此次上传的芯片数据类型，存放的压缩包名字，上传的账户，以及压缩包里包含的数据内容。</p>
			<p>一般大约2,3个工作日，经GEO审核，数据没有问题，他们会以邮件形式告诉您数据的GSM、GSE。您就可用于准备发表的文章中。</p>
		</div>
	</div>
	<br/>
	<br/>
</div>

</body>
</html>