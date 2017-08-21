<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"C:\xampp\htdocs\report\public/../application/pc\view\diff\diff_gene.html";i:1502779494;s:70:"C:\xampp\htdocs\report\public/../application/pc\view\common\_meta.html";i:1502851846;s:72:"C:\xampp\htdocs\report\public/../application/pc\view\common\_footer.html";i:1502778348;}*/ ?>
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
<title>差异筛选结果</title>
</head>
<body onLoad="setupZoom();">
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span><?php echo $bh_id; ?><span class="c-gray en">&gt;</span> 差异筛选结果 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="main_content">
		<h3 class="main_title" id="2_1">差异基因数目统计</h3>
		<div id="tab_demo" class="HuiTab">
			<?php if($diff_num['flag']==1): ?>
			<p>原始数据归一化后，采用Fold-change (表达差异倍数)以及T检验（Student's t-test）统计学方法对差异基因进行筛选，挑选条件如下：</p>
			<p>1) Fold Change (linear) =< 0.5 或者Fold Change (linear) >= 2。</p>
			<p>2) T-test p-value < 0.05 或 <0.01。</p>
			<p>详细差异基因列表见：</p>
			<div class="tabBar clearfix">
				<?php if($diff_num['mRNA']['m_f']==1): if($diff_num['mRNA']['curr']=='m'): ?>
					<span class="current">		mRNA信息表</span>
						<?php else: ?>
						<span>		mRNA信息表</span>
						<?php endif; endif; if($diff_num['lncRNA']['l_f']==1): if($diff_num['lncRNA']['curr']=='l'): ?>
					<span class="current">	lncRNA信息表</span>
					<?php else: ?>
					<span>	lncRNA信息表</span>
					<?php endif; endif; if($diff_num['circRNA']['c_f']==1): if($diff_num['circRNA']['curr']=='c'): ?>
					<span class="current">	circRNA信息表</span>
					<?php else: ?>
					<span>circRNA信息表</span>
					<?php endif; endif; ?>
			</div>
			<?php if($diff_num['mRNA']['m_f']==1): ?>
			<div class="tabCon">
				<table class="table table-border table-bordered table-bg mt-20">
					<tbody>
					<?php if(is_array($diff_num['mRNA']['m_content']) || $diff_num['mRNA']['m_content'] instanceof \think\Collection): if( count($diff_num['mRNA']['m_content'])==0 ) : echo "<tr><td>没有数据</td></tr>" ;else: foreach($diff_num['mRNA']['m_content'] as $k=>$vo): ?>
					<tr class="text-c">
						<?php if($k==0): ?>
							<th> <?php echo $vo[0]; ?></th>
							<th width="10%"><?php echo $vo[1]; ?></th>
							<th width="15%"><?php echo $vo[2]; ?></th>
							<th width="15%"><?php echo $vo[3]; ?></th>
							<th width="10%"> <?php echo $vo[4]; ?></th>
							<th width="10%"><?php echo $vo[5]; ?></th>
							<?php if($diff_num['mRNA']['m_x']==1): ?>
							<th width="10%">文件</th>
							<?php endif; else: if(is_array($vo) || $vo instanceof \think\Collection): if( count($vo)==0 ) : echo "" ;else: foreach($vo as $key=>$v): ?>
					 			<td>
									<?php if($v==''): ?>
										-
									<?php else: ?>
										<?php echo $v; endif; ?>
								</td>
						  <?php endforeach; endif; else: echo "" ;endif; if($diff_num['mRNA']['m_x']==1 and $k==1): ?>
							<td width="10%" rowspan="<?php echo $diff_num['mRNA']['m_count']; ?>"><a href="__MPATH__/<?php echo $analysis_id; ?>/diff/mRNA/diff_up_down_gene_count.xls">下载</a></td>
							<?php endif; endif; ?>
					</tr>
					<?php endforeach; endif; else: echo "<tr><td>没有数据</td></tr>" ;endif; ?>
					</tbody>
				</table>
			</div>
			<?php endif; if($diff_num['lncRNA']['l_f']==1): ?>
			<div class="tabCon">
				<table class="table table-border table-bordered table-bg mt-20">
					<tbody>
					<?php if(is_array($diff_num['lncRNA']['l_content']) || $diff_num['lncRNA']['l_content'] instanceof \think\Collection): if( count($diff_num['lncRNA']['l_content'])==0 ) : echo "<tr><td>没有数据</td></tr>" ;else: foreach($diff_num['lncRNA']['l_content'] as $k=>$vo): ?>
					<tr class="text-c">
						<?php if($k==0): ?>
						<th> <?php echo $vo[0]; ?></th>
						<th width="10%"><?php echo $vo[1]; ?></th>
						<th width="15%"><?php echo $vo[2]; ?></th>
						<th width="15%"><?php echo $vo[3]; ?></th>
						<th width="10%"> <?php echo $vo[4]; ?></th>
						<th width="10%"><?php echo $vo[5]; ?></th>
						<?php if($diff_num['lncRNA']['l_x']==1): ?>
						<th width="10%">文件</th>
						<?php endif; else: if(is_array($vo) || $vo instanceof \think\Collection): if( count($vo)==0 ) : echo "" ;else: foreach($vo as $key=>$v): ?>
						<td>
							<?php if($v==''): ?>
							-
							<?php else: ?>
							<?php echo $v; endif; ?>
						</td>
						<?php endforeach; endif; else: echo "" ;endif; if($diff_num['lncRNA']['l_x']==1 and $k==1): ?>
						<td width="10%" rowspan="<?php echo $diff_num['lncRNA']['l_count']; ?>"><a href="__MPATH__/<?php echo $analysis_id; ?>/diff/lncRNA/diff_up_down_gene_count.xls">下载</a></td>
						<?php endif; endif; ?>
					</tr>
					<?php endforeach; endif; else: echo "<tr><td>没有数据</td></tr>" ;endif; ?>
					</tbody>
				</table>
			</div>
			<?php endif; if($diff_num['circRNA']['c_f']==1): ?>
			<div class="tabCon">
				<table class="table table-border table-bordered table-bg mt-20">
					<tbody>
					<?php if(is_array($diff_num['circRNA']['c_content']) || $diff_num['circRNA']['c_content'] instanceof \think\Collection): if( count($diff_num['circRNA']['c_content'])==0 ) : echo "<tr><td>没有数据</td></tr>" ;else: foreach($diff_num['circRNA']['c_content'] as $k=>$vo): ?>
					<tr class="text-c">
						<?php if($k==0): ?>
						<th> <?php echo $vo[0]; ?></th>
						<th width="10%"><?php echo $vo[1]; ?></th>
						<th width="15%"><?php echo $vo[2]; ?></th>
						<th width="15%"><?php echo $vo[3]; ?></th>
						<th width="10%"> <?php echo $vo[4]; ?></th>
						<th width="10%"><?php echo $vo[5]; ?></th>
						<?php if($diff_num['circRNA']['c_x']==1): ?>
						<th width="10%">文件</th>
						<?php endif; else: if(is_array($vo) || $vo instanceof \think\Collection): if( count($vo)==0 ) : echo "" ;else: foreach($vo as $key=>$v): ?>
						<td>
							<?php if($v==''): ?>
							-
							<?php else: ?>
							<?php echo $v; endif; ?>
						</td>
						<?php endforeach; endif; else: echo "" ;endif; if($diff_num['circRNA']['c_x']==1 and $k==1): ?>
						<td width="10%" rowspan="<?php echo $diff_num['circRNA']['c_count']; ?>"><a href="__MPATH__/<?php echo $analysis_id; ?>/diff/circRNA/diff_up_down_gene_count.xls">下载</a></td>
						<?php endif; endif; ?>
					</tr>
					<?php endforeach; endif; else: echo "<tr><td>没有数据</td></tr>" ;endif; ?>
					</tbody>
				</table>
			</div>
			<?php endif; endif; ?>
			<p class="lable" style="margin: 10px 0 0">如果您对差异基因表命名方式有疑问，请<a href="__PPATH__/info/index_info.png" title="说明文件">点击</a> 查看示例</p>
			<br/>
		</div>
		<br/>
		<h3 class="main_title" id="2_2">差异基因列表</h3>

		<div class="HuiTab">
			<p>1.总表</p>
			<?php if($diff_list['total_flag']==1): ?>
			<p style="margin: 10px 0">
				<a href="__MPATH__/<?php echo $analysis_id; ?>/diff/SummaryListing/total.png" title="总表">
					<img width="90%" src="__MPATH__/<?php echo $analysis_id; ?>/diff/SummaryListing/total.png" alt=""/>
				</a>
			</p>
			<p style="text-align: center;margin: 10px 0"><a  target="_self" href="__MPATH__/<?php echo $analysis_id; ?>/diff/SummaryListing/Normalized_Data.xlsx">总表下载</a></p>
				<!--<p class="lable" class="clearfix" style="height: 40px;line-height: 40px;margin: 15px 0"> 点击右侧下载差异基因总表
			<a   href="__MPATH__/pUItWJC9vOTfmsv6xZje8gczoYpKQ79b1ihrcJOgwAdpZtnTDW/MRE/circRNA_microRNA_MRE结果说明.pdf" target="_blank">
				<img src="__PUBLIC__/image/downloading.gif"  style="float: right;width: 120px;height: 40px"/>
			</a>
			</p>
			<p>-->
			<div class="info">
				<table class="table table-border table-bordered table-bg mt-20">
					<tbody>
					<tr>
						<td  style="text-align:center" colspan="2"><b>总表列表</b></td>
					</tr>
					<tr>
						<td  style="text-align:center"><b>文件名</b></td>
						<td  style="text-align:center"><b>下载链接</b></td>
					</tr>
					<?php if(is_array($diff_list['total_list']) || $diff_list['total_list'] instanceof \think\Collection): if( count($diff_list['total_list'])==0 ) : echo "<tr><td colspan='2'>没有相关文件</td></tr>" ;else: foreach($diff_list['total_list'] as $k=>$vo): ?>
					<tr>
						<td   style="text-align:center"> <?php echo $vo; ?></td>
						<?php if($k=='txt'): ?>
						<td   style="text-align:center"><a  target="_blank" href="__MPATH__/<?php echo $analysis_id; ?>/diff/SummaryListing/<?php echo $vo; ?>">下载</a></td>
						<?php else: ?>
						<td   style="text-align:center"><a  target="_self" href="__MPATH__/<?php echo $analysis_id; ?>/diff/SummaryListing/<?php echo $vo; ?>">下载</a></td>
						<?php endif; ?>
					</tr>
					<?php endforeach; endif; else: echo "<tr><td colspan='2'>没有相关文件</td></tr>" ;endif; ?>
					</tbody>
				</table>
			</div>
			<?php else: ?>
			<p>没有相关数据</p>
			<?php endif; ?>
			<p>2.差异表</p>
			<div id="tab_dem" class="HuiTab">
				<?php if($diff_list['mRNA']['m_f']==1 or $diff_list['lncRNA']['l_f']==1 or $diff_list['circRNA']['c_f']==1): ?>
				<div class="tabBar clearfix">
					<?php if($diff_list['mRNA']['m_f']==1): ?>
					<span>mRNA差异表</span>
					<?php endif; if($diff_list['lncRNA']['l_f']==1): ?>
					<span>lncRNA差异表</span>
					<?php endif; if($diff_list['circRNA']['c_f']==1): ?>
					<span>circRNA差异表</span>
					<?php endif; ?>
				</div>
					<?php if($diff_list['mRNA']['m_f']==1): ?>
					<div class="tabCon">
						<p style="margin: 20px auto 0;">
							<a href="__MPATH__/<?php echo $analysis_id; ?>/diff/DifferencesListing/mRNA.png" title="mRNA差异表">
								<img width="90%" src="__MPATH__/<?php echo $analysis_id; ?>/diff/DifferencesListing/mRNA.png" alt=""/>
							</a>
						</p>
						<p style="text-align: center;margin: 10px 0"><a  target="_self" href="__MPATH__/<?php echo $analysis_id; ?>/diff/DifferencesListing/Differentially_expressed_genes_mRNA.xlsx">mRNA差异表下载</a></p>
						<table class="table table-border table-bordered table-bg mt-20">
							<tbody>
							<tr class="text-c">
								<th>文件名称</th>
								<th >下载链接</th>
							</tr>
							<?php if(is_array($diff_list['mRNA']['m_list']) || $diff_list['mRNA']['m_list'] instanceof \think\Collection): if( count($diff_list['mRNA']['m_list'])==0 ) : echo "<tr><td colspan='2'>没有数据</td></tr>" ;else: foreach($diff_list['mRNA']['m_list'] as $k=>$vo): ?>
							<tr class="text-c">
								<td style="text-align: left;"><?php echo $k; ?></td>
								<td  >
									<?php if($vo=='txt'): ?>
									<a href="__MPATH__/<?php echo $analysis_id; ?>/diff/DifferencesListing/mRNA/list/<?php echo $k; ?>" target="_blank">下载</a>
									<?php else: ?>
									<a href="__MPATH__/<?php echo $analysis_id; ?>/diff/DifferencesListing/mRNA/list/<?php echo $k; ?>" target="_self">下载</a>
									<?php endif; ?>
								</td>
							</tr>
							<?php endforeach; endif; else: echo "<tr><td colspan='2'>没有数据</td></tr>" ;endif; ?>
							</tbody>
						</table>
						<?php if($diff_list['m_header']==1): ?>
						<p class="lable" class="clearfix" style="height: 40px;line-height: 40px;margin: 10px 0"> 点击右侧下载查看mRNA表头说明文档   <a   href="__MPATH__/pUItWJC9vOTfmsv6xZje8gczoYpKQ79b1ihrcJOgwAdpZtnTDW/diff/DifferencesListing/mRNA/header_m_ceR.pdf" target="_blank"> <img src="__PUBLIC__/image/downloading.gif"  style="float: right;width: 120px;height: 40px"/></a></p>
						<?php endif; ?>
					</div>
					<?php endif; if($diff_list['lncRNA']['l_f']==1): ?>
					<div class="tabCon">
						<p style="margin: 20px auto 0;">
							<a href="__MPATH__/<?php echo $analysis_id; ?>/diff/DifferencesListing/lncRNA.png" title="lncRNA差异表">
								<img width="90%" src="__MPATH__/<?php echo $analysis_id; ?>/diff/DifferencesListing/lncRNA.png" alt=""/>
							</a>
						</p>
						<p style="text-align: center;margin: 10px 0"><a  target="_self" href="__MPATH__/<?php echo $analysis_id; ?>/diff/DifferencesListing/Differentially_expressed_genes_lncRNA.xlsx">lncRNA差异表下载</a></p>
						<table class="table table-border table-bordered table-bg mt-20">
							<tbody>
							<tr class="text-c">
								<th>文件名称</th>
								<th >下载链接</th>
							</tr>
							<?php if(is_array($diff_list['lncRNA']['l_list']) || $diff_list['lncRNA']['l_list'] instanceof \think\Collection): if( count($diff_list['lncRNA']['l_list'])==0 ) : echo "<tr><td colspan='2'>没有数据</td></tr>" ;else: foreach($diff_list['lncRNA']['l_list'] as $k=>$vo): ?>
							<tr class="text-c">
								<td style="text-align: left;"><?php echo $vo; ?></td>
								<td  >
									<?php if($vo=='txt'): ?>
									<a href="__MPATH__/<?php echo $analysis_id; ?>/diff/DifferencesListing/lncRNA/list/<?php echo $k; ?>" target="_blank">下载</a>
									<?php else: ?>
									<a href="__MPATH__/<?php echo $analysis_id; ?>/diff/DifferencesListing/lncRNA/list/<?php echo $k; ?>" target="_self">下载</a>
									<?php endif; ?>
								</td>
							</tr>
							<?php endforeach; endif; else: echo "<tr><td colspan='2'>没有数据</td></tr>" ;endif; ?>
							</tbody>
						</table>
						<?php if($diff_list['l_header']==1): ?>
						<p class="lable" class="clearfix" style="height: 40px;line-height: 40px;margin: 10px 0"> 点击右侧下载查看lncRNA表头说明文档   <a   href="__MPATH__/pUItWJC9vOTfmsv6xZje8gczoYpKQ79b1ihrcJOgwAdpZtnTDW/diff/DifferencesListing/lncRNA/header_m_ceR.pdf" target="_blank"> <img src="__PUBLIC__/image/downloading.gif"  style="float: right;width: 120px;height: 40px"/></a></p>
						<?php endif; ?>
					</div>
					<?php endif; if($diff_list['circRNA']['c_f']==1): ?>
					<div class="tabCon">
						<p style="margin: 20px auto 0;">
							<a href="__MPATH__/<?php echo $analysis_id; ?>/diff/DifferencesListing/circRNA.png" title="circRNA差异表">
								<img width="90%" src="__MPATH__/<?php echo $analysis_id; ?>/diff/DifferencesListing/circRNA.png" alt=""/>
							</a>
						</p>
						<p style="text-align: center;margin: 10px 0"><a  target="_self" href="__MPATH__/<?php echo $analysis_id; ?>/diff/DifferencesListing/Differentially_expressed_genes_circRNA.xlsx">circRNA差异表下载</a></p>
						<table class="table table-border table-bordered table-bg mt-20">
							<tbody>
							<tr class="text-c">
								<th>文件名称</th>
								<th >下载链接</th>
							</tr>
							<?php if(is_array($diff_list['circRNA']['c_list']) || $diff_list['circRNA']['c_list'] instanceof \think\Collection): if( count($diff_list['circRNA']['c_list'])==0 ) : echo "<tr><td colspan='2'>没有数据</td></tr>" ;else: foreach($diff_list['circRNA']['c_list'] as $k=>$vo): ?>
							<tr class="text-c">
								<td style="text-align: left;"><?php echo $vo; ?></td>
								<td>
									<?php if($vo=='txt'): ?>
									<a href="__MPATH__/<?php echo $analysis_id; ?>/diff/DifferencesListing/circRNA/list/<?php echo $k; ?>" target="_blank">下载</a>
									<?php else: ?>
									<a href="__MPATH__/<?php echo $analysis_id; ?>/diff/DifferencesListing/circRNA/list/<?php echo $k; ?>" target="_self">下载</a>
									<?php endif; ?>
								</td>
							</tr>
							<?php endforeach; endif; else: echo "<tr><td colspan='2'>没有数据</td></tr>" ;endif; ?>
							</tbody>
						</table>
						<?php if($diff_list['c_header']==1): ?>
						<p class="lable" class="clearfix" style="height: 40px;line-height: 40px;margin: 10px 0"> 点击右侧下载查看circRNA表头说明文档   <a   href="__MPATH__/<?php echo $analysis_id; ?>/diff/DifferencesListing/circRNA/header_m_ceR.pdf" target="_blank"> <img src="__PUBLIC__/image/downloading.gif"  style="float: right;width: 120px;height: 40px"/></a></p>
						<?php endif; ?>
					</div>
					<?php endif; else: ?>
					没有相关数据
				<?php endif; ?>
			</div>
		</div>
		<?php if($lnc_pre['flag']==1): ?>
		<h3 class="main_title" id="2_3">LncRNA靶基因</h3>
		<div class="HuiTab">
			<table class="table table-border table-bordered table-bg mt-20">
				<tbody>
				<tr class="text-c">
					<th >靶基因类型</th>
					<th width="20%" >下载链接</th>
				</tr>
				<tr class="text-c">
					<td>cis靶基因</td>
					<td width="20%">
						<?php if($lnc_pre['cis']): ?>
							<a  href="__MPATH__/<?php echo $analysis_id; ?>/predication/DIFF_GENES_CIS.xlsx">下载</a>
						<?php else: ?>
							没有该数据结果
						<?php endif; ?>
					</td>
				</tr>
				<tr class="text-c">
					<td>Trans靶基因</td>
					<td width="20%">
						<?php if($lnc_pre['trans']): ?>
							<a  href="__MPATH__/<?php echo $analysis_id; ?>/predication/DIFF_GENES_TRANS.xlsx">下载</a>
						<?php else: ?>
							没有该数据结果
						<?php endif; ?>
					</td>
				</tr>
				</tbody>
			</table>
			<br/>
			<?php if($lnc_pre['cis']==1): ?>
			<p>cis靶基因预测: 选取lncRNA上下游10kb范围内的基因作为此lncRNA的cis作用靶基因。</p>
			<?php endif; if($lnc_pre['trans']==1): ?>
			<p>Trans靶基因预测: 采用数据库中对应物种的基因序列。先通过blast选择出序列上具有互补性或相似性的序列，再利用RNAplex计算两序列之间的互补能量，选择e≤−30的基因作为此lncRNA的trans作用靶基因。
			</p>
			<?php endif; if($lnc_pre['pre']==1): ?>
			<p class="lable" class="clearfix" style="height: 40px;line-height: 40px;"> 点击右侧下载靶基因预测说明文档   <a   href="__MPATH__/<?php echo $analysis_id; ?>/predication/LncRNA_Target_genetic_prediction.pdf" target="_blank"> <img src="__PUBLIC__/image/downloading.gif"  style="float: right;width: 120px;height: 40px"/></a>
			</p>
			<?php endif; ?>
		</div>
		<?php endif; if($circ_pre['flag']==1): ?>
		<h3 class="main_title" id="2_4">CircRNA MRE</h3>
		<div class="HuiTab">
			<table class="table table-border table-bordered table-bg mt-20">
				<tbody>
				<tr class="text-c">
					<th >文件名</th>
					<th width="20%" >下载链接</th>
				</tr>
				<?php if(is_array($circ_pre['list']) || $circ_pre['list'] instanceof \think\Collection): if( count($circ_pre['list'])==0 ) : echo "<tr><td colspan=" ;else: foreach($circ_pre['list'] as $key=>$vo): ?>
				<tr class="text-c">
					<td><?php echo $vo; ?></td>
					<td width="20%"><a  href="__MPATH__/<?php echo $analysis_id; ?>/MRE/<?php echo $vo; ?>">下载</a></td>
				</tr>
				<?php endforeach; endif; else: echo "<tr><td colspan=" ;endif; ?>
				</tbody>
			</table>
			<?php if($circ_pre['pre']==1): ?>
			<p class="lable" class="clearfix" style="height: 40px;line-height: 40px;margin: 10px 0"> 点击右侧下载查看CircRNA MRE结果说明文件   <a   href="__MPATH__/<?php echo $analysis_id; ?>/MRE/circRNA_microRNA_MRE_result.pdf" target="_blank"> <img src="__PUBLIC__/image/downloading.gif"  style="float: right;width: 120px;height: 40px"/></a></p>
			<?php endif; ?>
			<!--<table class="table table-border table-bordered table-bg mt-20">
				<tbody>
				<tr class="text-c">
					<th >文件名</th>
					<th width="20%" >下载链接</th>
				</tr>
				<tr class="text-c">
					<td>g1_VS_g2_p005fc2_cis.txt</td>
					<td width="20%"><a href="#">下载</a></td>
				</tr>
				<tr class="text-c">
					<td>g1_VS_g2_p005fc2_trans.txt</td>
					<td width="20%"><a href="#">下载</a></td>
				</tr>
				</tbody>
			</table>
			<br/>
			<p>cis靶基因预测: 选取lncRNA上下游10kb范围内的基因作为此lncRNA的cis作用靶基因。</p>
			<p>Trans靶基因预测: 采用数据库中对应物种的基因序列。先通过blast选择出序列上具有互补性或相似性的序列，再利用RNAplex计算两序列之间的互补能量，选择e≤−30的基因作为此lncRNA的trans作用靶基因。
			</p>-->
		</div>
		<?php endif; ?>
		<!--    火山图     -->
		<?php if($volcano['flag']==1): ?>
		<h3 class="main_title" id="2_5">火山图</h3>
		<div class="HuiTab">
			<div class="htmleaf-container">
				<br/>
				<div id="container_mRNA">
					<div id="parentHorizontalTab_mRNA">
						<ul class="resp-tabs-list hor_1">
							<?php if($volcano['mRNA']['flag']==1): ?>
							<li>mRNA</li>
							<?php endif; if($volcano['lncRNA']['flag']==1): ?>
							<li>lncRNA</li>
							<?php endif; if($volcano['circRNA']['flag']==1): ?>
							<li>circRNA</li>
							<?php endif; ?>
						</ul>
						<div class="resp-tabs-container hor_1">
							<?php if($volcano['mRNA']['flag']==1): ?>
							<div>
								<p>
									<?php if(is_array($volcano['mRNA']['list']) || $volcano['mRNA']['list'] instanceof \think\Collection): if( count($volcano['mRNA']['list'])==0 ) : echo "" ;else: foreach($volcano['mRNA']['list'] as $k=>$vo): ?>
									<div>
											<a href="__MPATH__/<?php echo $analysis_id; ?>/diff/mRNA/<?php echo $vo; ?>" title="<?php echo $k; ?>">
												<img style="width:490px" src="__MPATH__/<?php echo $analysis_id; ?>/diff/mRNA/<?php echo $vo; ?>" alt="">
											</a>
									</div>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</p>
								<p>mRNA</p>
							</div>
							<?php endif; if($volcano['lncRNA']['flag']==1): ?>
							<div>
								<p>
									<?php if(is_array($volcano['lncRNA']['list']) || $volcano['lncRNA']['list'] instanceof \think\Collection): if( count($volcano['lncRNA']['list'])==0 ) : echo "" ;else: foreach($volcano['lncRNA']['list'] as $k=>$vo): ?>
								<div>
										<a href="__MPATH__/<?php echo $analysis_id; ?>/diff/lncRNA/<?php echo $vo; ?>" title="<?php echo $k; ?>" >
											<img style="width:490px" src="__MPATH__/<?php echo $analysis_id; ?>/diff/lncRNA/<?php echo $vo; ?>" alt="">
										</a>
								</div>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</p>
								<br>
								<p>lncRNA</p>
							</div>
							<?php endif; if($volcano['circRNA']['flag']==1): ?>
							<div>
								<p>
									<?php if(is_array($volcano['circRNA']['list']) || $volcano['circRNA']['list'] instanceof \think\Collection): if( count($volcano['circRNA']['list'])==0 ) : echo "" ;else: foreach($volcano['circRNA']['list'] as $k=>$vo): ?>
								<div>
										<a href="__MPATH__/<?php echo $analysis_id; ?>/diff/circRNA/<?php echo $vo; ?>" title="<?php echo $k; ?>">
											<img style="width:490px" src="__MPATH__/<?php echo $analysis_id; ?>/diff/circRNA/<?php echo $vo; ?>" alt="">
										</a>
								</div>
								<?php endforeach; endif; else: echo "" ;endif; ?>
								</p>
								<br>
								<p>circRNA</p>
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			<br/>

		</div>
			<p class="lable">用芯片组间T检验分析得到p-value值与Fold change值两个因素共同绘制Volcano plot——火山图，用于显示
				两组样品数据的显著性差异。详细说明文件请 <a href="__PPATH__/info/volcanoInstructions.pdf" target="_blank">点击下载</a>火山图说明文件</p>
			<br/>
		</div>
		<?php endif; if($scatter['flag']==1): ?>
				<!--    散点图     -->
		<h3 class="main_title" id="2_6">散点图</h3>
			<div class="HuiTab">
				<div class="htmleaf-container">
					<br/>
					<div id="container_circRNA">
						<div id="parentHorizontalTab_circRNA">
							<ul class="resp-tabs-list hor_1">
								<?php if($scatter['mRNA']['flag']==1): ?>
								<li>mRNA</li>
								<?php endif; if($scatter['lncRNA']['flag']==1): ?>
								<li>lncRNA</li>
								<?php endif; if($scatter['circRNA']['flag']==1): ?>
								<li>circRNA</li>
								<?php endif; ?>
							</ul>
							<div class="resp-tabs-container hor_1">
								<?php if($scatter['mRNA']['flag']==1): ?>
								<div>
									<p>
										<?php if(is_array($scatter['mRNA']['list']) || $scatter['mRNA']['list'] instanceof \think\Collection): if( count($scatter['mRNA']['list'])==0 ) : echo "" ;else: foreach($scatter['mRNA']['list'] as $k=>$vo): ?>
										<div>
											<a href="__MPATH__/<?php echo $analysis_id; ?>/diff/mRNA/<?php echo $vo; ?>" title="<?php echo $k; ?>">
												<img style="width:490px" src="__MPATH__/<?php echo $analysis_id; ?>/diff/mRNA/<?php echo $vo; ?>" alt="">
											</a>
										 </div>
									<?php endforeach; endif; else: echo "" ;endif; ?>
									</p>
									<p>mRNA</p>
								</div>
								<?php endif; if($scatter['lncRNA']['flag']==1): ?>
								<div>
									<p>
										<?php if(is_array($scatter['lncRNA']['list']) || $scatter['lncRNA']['list'] instanceof \think\Collection): if( count($scatter['lncRNA']['list'])==0 ) : echo "" ;else: foreach($scatter['lncRNA']['list'] as $k=>$vo): ?>
											<div>
												<a href="__MPATH__/<?php echo $analysis_id; ?>/diff/lncRNA/<?php echo $vo; ?>" title="<?php echo $k; ?>">
													<img style="width:490px" src="__MPATH__/<?php echo $analysis_id; ?>/diff/lncRNA/<?php echo $vo; ?>" alt="">
												</a>
											</div>
										<?php endforeach; endif; else: echo "" ;endif; ?>
									</p>
									<br>
									<p>lncRNA</p>
								</div>
								<?php endif; if($scatter['circRNA']['flag']==1): ?>
								<div>
									<p>
										<?php if(is_array($scatter['circRNA']['list']) || $scatter['circRNA']['list'] instanceof \think\Collection): if( count($scatter['circRNA']['list'])==0 ) : echo "" ;else: foreach($scatter['circRNA']['list'] as $k=>$vo): ?>
											<div>
												<a href="__MPATH__/<?php echo $analysis_id; ?>/diff/circRNA/<?php echo $vo; ?>" title="<?php echo $k; ?>">
													<img style="width:490px" src="__MPATH__/<?php echo $analysis_id; ?>/diff/circRNA/<?php echo $vo; ?>" alt="">
												</a>
											</div>
										<?php endforeach; endif; else: echo "" ;endif; ?>
									</p>
									<br>
									<p>circRNA</p>
								</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
					<br/>

				</div>
				<p class="lable">芯片数据的散点图常用于评估两组数据总体分布集中趋势。详细说明文件请 <a href="__PPATH__/info/scatterInstructions.pdf" target="_blank">点击下载</a>散点图说明文件</p>
				<br/>
			</div>
		<?php endif; ?>
		<!--    热图     -->
		<?php if($heatmap['flag']==1): ?>
		<h3 class="main_title" id="2_7">热图</h3>
		<div class="HuiTab">
			<div class="htmleaf-container">
				<br/>
				<div id="container_lncRNA">
					<div id="parentHorizontalTab_lncRNA">
						<ul class="resp-tabs-list hor_1">
							<?php if($heatmap['mRNA']['flag']==1): ?>
							<li>mRNA</li>
							<?php endif; if($heatmap['lncRNA']['flag']==1): ?>
							<li>lncRNA</li>
							<?php endif; if($heatmap['circRNA']['flag']==1): ?>
							<li>circRNA</li>
							<?php endif; ?>
						</ul>
						<div class="resp-tabs-container hor_1">
							<?php if($heatmap['mRNA']['flag']==1): ?>
							<div>
								<p>
									<?php if(is_array($heatmap['mRNA']['list']) || $heatmap['mRNA']['list'] instanceof \think\Collection): if( count($heatmap['mRNA']['list'])==0 ) : echo "" ;else: foreach($heatmap['mRNA']['list'] as $k=>$vo): ?>
								<div>
									<a href="__MPATH__/<?php echo $analysis_id; ?>/diff/mRNA/<?php echo $vo; ?>" title="<?php echo $k; ?>">
										<img style="width:490px" src="__MPATH__/<?php echo $analysis_id; ?>/diff/mRNA/<?php echo $vo; ?>" alt="">
									</a>
								</div>
								<?php endforeach; endif; else: echo "" ;endif; ?>
								</p>
								<p>mRNA</p>
							</div>
							<?php endif; if($heatmap['lncRNA']['flag']==1): ?>
							<div>
								<p>
									<?php if(is_array($heatmap['lncRNA']['list']) || $heatmap['lncRNA']['list'] instanceof \think\Collection): if( count($heatmap['lncRNA']['list'])==0 ) : echo "" ;else: foreach($heatmap['lncRNA']['list'] as $k=>$vo): ?>
								<div>
									<a href="__MPATH__/<?php echo $analysis_id; ?>/diff/lncRNA/<?php echo $vo; ?>" title="<?php echo $k; ?>">
										<img style="width:490px" src="__MPATH__/<?php echo $analysis_id; ?>/diff/lncRNA/<?php echo $vo; ?>" alt="">
									</a>
								</div>
								<?php endforeach; endif; else: echo "" ;endif; ?>
								</p>
								<br>
								<p>lncRNA</p>
							</div>
							<?php endif; if($heatmap['circRNA']['flag']==1): ?>
							<div>
								<p>
									<?php if(is_array($heatmap['circRNA']['list']) || $heatmap['circRNA']['list'] instanceof \think\Collection): if( count($heatmap['circRNA']['list'])==0 ) : echo "" ;else: foreach($heatmap['circRNA']['list'] as $k=>$vo): ?>
								<div>
									<a href="__MPATH__/<?php echo $analysis_id; ?>/diff/circRNA/<?php echo $vo; ?>" title="<?php echo $k; ?>">
										<img style="width:490px" src="__MPATH__/<?php echo $analysis_id; ?>/diff/circRNA/<?php echo $vo; ?>" alt="">
									</a>
								</div>
								<?php endforeach; endif; else: echo "" ;endif; ?>
								</p>
								<br>
								<p>circRNA</p>
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<br/>
			</div>
			<p class="lable">左上角的图标表示色阶，横坐标为Z-score，即为 (基因表达值 － 均值) / 方差，其中均值，
				方差都是针对同一基因在不同样本中的归一化信号值计算的。纵坐标为对应探针的计数。主图横坐标是样本名称，样本
				会按计算所得的距离远近排序（分组）；纵坐标是探针号（或基因名称）。<a href="__PPATH__/info/heatmapInstructions.pdf" target="_blank">点击下载</a>热图说明文件</p>
			<br/>
		</div>
		<?php endif; ?>
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
<script type="text/javascript">
/*三种RNA显示图*/
	$(function() {
		$.Huitab("#tab_demo .tabBar span","#tab_demo .tabCon","current","click","0")
	});
$(function() {
	$.Huitab("#tab_dem .tabBar span","#tab_dem .tabCon","current","click","0")
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