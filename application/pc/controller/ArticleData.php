<?php
namespace reportbh\pc\controller;
use think\Controller;
use think\View;
use reportbh\mobile\model\valid ;
use reportbh\pc\model\data;
//header('Content-Type:text/html;charset=utf-8');
//session_start();
class  ArticleData  extends Controller
{
        //文章常用数据
    public function qc($bh_id)
        {
            $read=new valid();
            $r=$read->valid_exists();
            if($r and isset($bh_id)){
                $bh=db('bh_chip_analysis')->where('bh_id',$bh_id)->find();
                $analysis_id=$bh['analysis_id'];
                  $path=ROOT_PATH.'/public/result/'.$analysis_id;
                  $d=new data();
                  $menu=$d->judge($path,$bh);
                   $this->assign([
                     'bh_id'=>$bh_id,
                     'analysis_id'=>$analysis_id,
                     'data'=>$menu,
                     'bh'=>$bh,

                   ]);
                echo  $this->fetch('qc');
            }
            else{
               echo $this->redirect('index/index/index');
            }
        }

}