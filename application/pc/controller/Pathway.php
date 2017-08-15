<?php
namespace reportbh\pc\controller;
use think\Controller;
use think\View;
use reportbh\mobile\model\valid ;
use reportbh\pc\model\enrich;
//header('Content-Type:text/html;charset=utf-8');
//session_start();
class  Pathway  extends Controller
{
        //富集分析
   public function pathway($bh_id)
        {
            $read=new valid();
            $r=$read->valid_exists();
           if($r and isset($bh_id)){
             $bh=db('bh_chip_analysis')->where('bh_id',$bh_id)->find();
             $analysis_id=$bh['analysis_id'];
              $path=ROOT_PATH.'/public/result/'.$analysis_id;
                $enrich=new enrich();
                //go
                $go=$enrich->go($path,$bh['go'],'go');
                $kegg=$enrich->go($path,$bh['kegg'],'kegg');
                $pathway=$enrich->pway($path);
               $this->assign([
                 'bh_id'=>$bh_id,
                 'analysis_id'=>$analysis_id,
                 'go'=>$go,
                 'kegg'=>$kegg,
                 'pathway'=>$pathway,
               ]);
                echo  $this->fetch('pathway');
            }
            else{
               echo $this->redirect('index/index/index');
            }
        }
}