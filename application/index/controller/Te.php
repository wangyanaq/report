<?php
namespace reportbh\index\controller;
use think\Controller;
use reportbh\index\model\test;
use think\view;
class Te  extends Controller
{
    public function index()
    {


  /*	{if  condition='$qc_info["flag"]=="1"'}
    															<div class="content-block-title">
    																{$vo.title}
    															</div>
    															{foreach $all_content as $title}
    																{if condition=' $title.up=="1" AND  $title.rank==$vo.rank  AND $title.level==$vo.level '}
    																<div class="content-block">{$title.content}</div>
    																{/if}
    															{/foreach}
    														<div class="content-block">
    															<div class="row  no-gutter">

    																<div class="col-25">样本名称 </div>
    																<div class="col-25">A260/A280</div>
    																<div class="col-15">RIN</div>
    																<div class="col-15">28S/18S</div>
    																<div class="col-20">Result</div>
    															</div>
    															{foreach name="$qc_info['info']"  item="vo"}
    																	<div class="row  no-gutter">
    																		<div class="col-25"> {$vo.COL_YPMC }</div>
    																		<div class="col-25">{$vo.COL_A260A280 }</div>
    																		<div class="col-15">{$vo.COL_RIN }</div>
    																		<div class="col-15">{$vo.COL_28S18S }</div>
    																		<div class="col-20">{$vo.COL_JG }</div>
    																	</div>
    															{/foreach}
    														</div>
    														{foreach $all_content as $title}
    															{if condition=' $title.up=="0" AND  $title.rank==$vo.rank  AND $title.level==$vo.level '}
    															<div class="content-block">{$title.content}</div>
    															{/if}
    														{/foreach}
    													{/if}*/

    													//   //跨库查询
                                          //$qc_info=$read->qc_info($bh_id);
       $read=new test();
       $flg=$read->conn();
       echo json_encode($flg);
    }
}