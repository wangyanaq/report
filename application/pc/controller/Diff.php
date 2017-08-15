<?php
namespace reportbh\pc\controller;
use think\Controller;
use think\View;
use reportbh\mobile\model\valid ;
use reportbh\pc\model\diffHandle;
//header('Content-Type:text/html;charset=utf-8');
//session_start();
class  Diff  extends Controller
{
    //差异基因筛选
    public function diff_gene($bh_id)
        {
            $read=new valid();
            $r=$read->valid_exists();
            if($r and isset($bh_id)){
              $bh=db('bh_chip_analysis')->where('bh_id',$bh_id)->find();
               $analysis_id=$bh['analysis_id'];
              //$bh=session('curr_analysis_id');
            //  $analysis_id=$bh['analysis_id'];
              $path=ROOT_PATH.'/public/result/'.$analysis_id;
              $diff=new diffHandle();
              //差异基因数目统计
              $diff_num=$diff->diff_1($path);
              //差异基因列表
              $diff_list=$diff->diff_2($path);
            //  $result=db('bh_chip_analysis')->where('bh_id',session('curr_bh_id'))->find();
              //lncRNA靶基因
               $lnc_pre=$diff->diff_3($path,$bh['lncrna_pre']);
              //cirRNA RME
               $circ_pre=$diff->diff_4($path,$bh['circrna_pre']);
              //火山图
              $volcano=$diff->diff_5($path,$bh['volcano_plot']);
              //散点图
              $scatter=$diff->diff_6($path,$bh['scatter_plot']);
              //热图
              $heatmap=$diff->diff_7($path,$bh['heatmap']);
               $this->assign([
                 'bh_id'=> $bh_id,
                 'analysis_id'=>$analysis_id,
                 'diff_num'=>$diff_num,
                  'diff_list'=>$diff_list,
                  'lnc_pre'=>$lnc_pre,
                  'circ_pre'=>$circ_pre,
                  'volcano'=>$volcano,
                  'scatter'=>$scatter,
                  'heatmap'=>$heatmap,

               ]);
              echo  $this->fetch('diff_gene');
            }
            else{
               echo $this->redirect('index/index/index');
            }
        }
}