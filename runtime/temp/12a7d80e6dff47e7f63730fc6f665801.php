<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"C:\xampp\htdocs\report\public/../application/pc\view\welcome\welcome.html";i:1502349805;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
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
<title>我的桌面</title>
</head>
<body>
<div class="page-container">
	<?php if($bh_status=='bh'): ?>
	<p class="f-20 text-success">欢迎使用伯豪生物芯片报告系统<span class="f-14"></span></p>
	<!--s<p>登录次数：18 </p>-->
	<p>上次登录IP：<?php echo $last_login_ip; ?>  上次登录时间：<?php echo $last_login_time; ?></p>
	<table class="table table-border table-bordered table-bg">
		<thead>
			<tr>
				<th colspan="6" scope="col">项目信息</th>
			</tr>
			<tr class="text-c">
				<th>项目编号</th>
				<th>项目类型</th>
				<th>芯片数量</th>
				<th>报告状态</th>
				<!--<th>查看地址</th>-->
			<!--	<th>管理员</th>-->
			</tr>
		</thead>
		<tbody>
			<tr class="text-c">
				<td> <?php echo $bh_id; ?></td>
				<td> <?php echo $curr_bh['chip_company']; ?>芯片</td>
				<td> <?php echo $curr_bh['chip_num']; ?></td>
				<td>
					<?php if($curr_bh['status']==1): ?>
					已完成
					<?php else: ?>
					正在处理
					<?php endif; ?>

				</td>
				<!--<td><a href="#">查看报告</a></td>-->
			<!--	<td>20</td>-->
			</tr>
		</tbody>
	</table>
	<table class="table table-border table-bordered table-bg mt-20">
		<br/>
		<p>对数据进行分析，包括数据预处理、基因表达分析、差异基因分析、差异基因GO/KEGG富集分析等分析。（根据客户需求）
		</p>
		<thead>
			<tr>
				<th  scope="col">分析内容</th>
				<th  scope="col" style="text-align:center">是否选择</th>
			</tr>
		</thead>
		<tbody>
		<?php  $i = 1;if($ana_row['nor_data'] == '1'): ?>
		<tr>
			<td width="70%"><?php echo $i; ?>.原始数据的归一化处理 </td>
			<!--<td><span id="lbServerName">http://127.0.0.1/</span></td>-->
			<td class="text-c">√</td>
		</tr>
	 <?php endif; if($ana_row['box_plot'] == '1'): ?>
		<tr>
			<td><?php echo ++$i; ?>. Box Plot图 </td>
			<td class="text-c">√</td>
		</tr>
		<?php endif; if($ana_row['pca_plot'] == '1'): ?>
		<tr>
			<td><?php echo ++$i; ?>.PCA图 </td>
			<td class="text-c">√</td>
		</tr>
		<?php endif; if($ana_row['clust_plot'] == '1'): ?>
		<tr>
			<td><?php echo ++$i; ?>.样本聚类图 </td>
			<td class="text-c">√</td>
		</tr>
		<?php endif; if($ana_row['corr_plot'] == '1'): ?>
		<tr>
			<td><?php echo ++$i; ?>.样本相关性分析 </td>
			<td class="text-c">√</td>
		</tr>
		<?php endif; if($ana_row['express_filter'] == '1'): ?>
		<tr>
			<td><?php echo ++$i; ?>.基因水平表达差异筛选 </td>
			<td class="text-c">√</td>
		</tr>
		<?php endif; if($ana_row['extron_filter'] == '1'): ?>
		<tr>
			<td><?php echo ++$i; ?>.外显子水平表达差异筛选 </td>
			<td class="text-c">√</td>
		</tr>
		<?php endif; if($ana_row['heatmap'] == '1'): ?>
		<tr>
			<td><?php echo ++$i; ?>.热图</td>
			<td class="text-c">√</td>
		</tr>
		<?php endif; if($ana_row['scatter_plot'] == '1'): ?>
		<tr>
			<td><?php echo ++$i; ?>.散点图 </td>
			<td class="text-c">√</td>
		</tr>
		<?php endif; if($ana_row['volcano_plot'] == '1'): ?>
		<tr>
			<td><?php echo ++$i; ?>.火山图</td>
			<td class="text-c">√</td>
		</tr>
		<?php endif; if($ana_row['chrom'] == '1'): ?>
		<tr>
			<td><?php echo ++$i; ?>.差异基因的染色体分布 </td>
			<td class="text-c">√</td>
		</tr>
		<?php endif; if($ana_row['diff_clust'] == '1'): ?>
		<tr>
			<td><?php echo ++$i; ?>.差异基因层级聚类 </td>
			<td class="text-c">√</td>
		</tr>
		<?php endif; if($ana_row['lncrna_pre'] == '1'): ?>
		<tr>
			<td><?php echo ++$i; ?>.lncRNA靶基因预测 </td>
			<td class="text-c">√</td>
		</tr>
		<?php endif; if($ana_row['go'] == '1'): ?>
		<tr>
			<td><?php echo ++$i; ?>.GO富集分析 </td>
			<td class="text-c">√</td>
		</tr>
		<?php endif; if($ana_row['kegg'] == '1'): ?>
		<tr>
			<td><?php echo ++$i; ?>.KEGG富集分析</td>
			<td class="text-c">√</td>
		</tr>
		<?php endif; if($ana_row['circrna_pre'] == '1'): ?>
		<tr>
			<td><?php echo ++$i; ?>.circRNA吸附miRNA预测 </td>
			<td class="text-c">√</td>
		</tr>
	 <?php endif; ?>

		<!--	<tr>
				<td width="70%">1. Box Plot图</td>
				<td class="text-c">√</td>
			</tr>
			<tr>
				<td>2. PCA图.</td>
				<td class="text-c">√</td>
			</tr>
			<tr>
				<td>3. 样本聚类图</td>
				<td class="text-c">√</td>
			</tr>
			<tr>
				<td> 4. 样本相关性分析</td>
				<td class="text-c">√</td>
			</tr>
			<tr>
				<td> 5. 基因水平表达差异筛选</td>
				<td class="text-c">√</td>
			</tr>
			<tr>
				<td> 6. 热图 </td>
				<td class="text-c">√</td>
			</tr>
			<tr>
				<td> 7. 散点图</td>
				<td class="text-c">√</td>
			</tr>
			<tr>
				<td>8. 火山图	 </td>
				<td class="text-c">√</td>
			</tr>
			<tr>
				<td>9. 差异基因层级聚类 </td>
				<td class="text-c">√</td>
			</tr>
			<tr>
				<td>10. lncRNA靶基因预测 </td>
				<td class="text-c">√</td>
			</tr>
			<tr>
				<td> 11. GO富集分析 </td>
				<td class="text-c">√</td>
			</tr>
			<tr>
				<td>12. KEGG富集分析 </td>
				<td class="text-c">√</td>
			</tr>-->
		</tbody>
	</table>
	<?php elseif($bh_status=='bc'): ?>
	<p class="f-20 text-success">欢迎使用伯豪生物RNA-seq报告系统<span class="f-14"></span></p>
	<p>上次登录IP：222.35.131.79.1  上次登录时间：2014-6-14 11:19:55</p>
	<table class="table table-border table-bordered table-bg">
		<thead>
		<tr>
			<th colspan="6" scope="col">项目信息</th>
		</tr>
		<tr class="text-c">
			<th>项目编号</th>
			<th>项目类型</th>
			<th>报告状态</th>
			<!--	<th>管理员</th>-->
		</tr>
		</thead>
		<tbody>
		<tr class="text-c">
			<td>BC150548-1</td>
			<td> 原核RNA测序 </td>
			<td> 已完成</td>
			<!--	<td>20</td>-->
		</tr>
		</tbody>
	</table>
	<table class="table table-border table-bordered table-bg mt-20">
		<br/>
		<p>数据分析项目列表
		</p>
		<thead>
		<tr>
			<th  scope="col">分析项目</th>
			<th  scope="col" style="text-align:center">是否选择</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td width="70%">1.测序序列质量评估</td>
			<!--<td><span id="lbServerName">http://127.0.0.1/</span></td>-->
			<td class="text-c">√</td>
		</tr>
		<tr>
			<td>2.数据预处理</td>
			<td class="text-c">√</td>
		</tr>
		<tr>
			<td>3.基因组比对</td>
			<td class="text-c">√</td>
		</tr>
		<tr>
			<td> 4.基因表达定量分析</td>
			<td class="text-c">√</td>
		</tr>
		<tr>
			<td> 5.表达相关性分析</td>
			<td class="text-c">√</td>
		</tr>
		<tr>
			<td> 6.基因差异表达分析 </td>
			<td class="text-c">√</td>
		</tr>
		<tr>
			<td> 7.差异基因GO富集分析</td>
			<td class="text-c">√</td>
		</tr>
		<tr>
			<td>8.差异基因KEGG富集分析</td>
			<td class="text-c">√</td>
		</tr>
		<tr>
			<td>9.新基因分析</td>
			<td class="text-c">√</td>
		</tr>
		<tr>
			<td>10.ncRNA分析 </td>
			<td class="text-c">√</td>
		</tr>
		</tbody>
	</table>

	<?php endif; ?>
</div>
<footer class="footer mt-20">
	<div class="container">
		<p>Copyright &copy;2017 伯豪生物 沪ICP备-14007085   <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=31011502003090" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;/* float: left; */margin-left: 10px;  color: #999;"><img src="http://www.beian.gov.cn/img/ghs.png" style="float:left;">沪公网安备 31011502003090号</a>
	 </p>
	</div>
</footer>
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.11.3.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/H-ui.js"></script>
<script>
/*var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?080836300300be57b7f34f4b3e97d911";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F080836300300be57b7f34f4b3e97d911' type='text/javascript'%3E%3C/script%3E"));*/
</script>
</body>
</html>