<?php
namespace reportbh\pc\controller;
use think\Controller;
use think\View;
use reportbh\mobile\model\valid ;
use reportbh\pc\model\qchandle ;
//header('Content-Type:text/html;charset=utf-8');
//session_start();
class  Article  extends Controller
{
        //项目概况
    public function article_list($bh_id)
        {
            //echo $bh_id;
            $read=new valid();
            $r=$read->valid_exists();
            if($r and isset($bh_id)){
                 $bh=db('bh_chip_analysis')->where('bh_id',$bh_id)->find();
                 $analysis_id=$bh['analysis_id'];
                $path=ROOT_PATH.'/public/result/'.$analysis_id;
                //一 1.返回当前合同号，2.截图3.质控报告4.箱线图
                //1.读取根目录下result/50个字符串/qc/Sample_QC_Report 文件夹的下所有.doc文档,获取文件名（不带_QC_Report.doc后缀），并对路径进行加密，存放在qc中

                 $qchandle=new qchandle();
                 $qc_sample=$qchandle->qc_1($path);
                 $qc_img=$qchandle->qc_2($path);//2.截图
                 $qc_report=$qchandle->qc_3($path);//3.质控报告
                 $qc_box=$qchandle->qc_4($path,$bh['box_plot']);//4.箱线图
                 //样本分组
                 $sam_group=$qchandle->sample_group($analysis_id,$path);//pca,hclust,corr
                 //数据分析文档
                 $data_doc=$qchandle->data_doc($path,$bh_id);
                 //实验文档
                 $exper_doc=$qchandle->exper_doc($path,$bh_id);

                 $this->assign([
                   'bh_id'=> $bh_id,
                    'analysis_id'=>$analysis_id,
                    'sample'=> $qc_sample,
                    'qc_img'=>$qc_img,
                     'qc_report'=>$qc_report,
                     'qc_box'=>$qc_box,
                     'sample_group'=>$sam_group,
                     'data_doc'=>$data_doc,
                     'exp_doc'=>$exper_doc

                 ]);
                 echo  $this->fetch('article_list');
            }
            else{
               echo $this->redirect('index/index/index');
            }
        }

}