<?php
namespace reportbh\rnaseq\controller;
use think\Controller;
use think\View;
use reportbh\mobile\model\valid ;
//header('Content-Type:text/html;charset=utf-8');
//session_start();
class  CorrelationAnalysis  extends Controller
{
    public function correlationAnalysis()
    {
        $read=new valid();
        $r=$read->valid_exists();
        if($r){

            /*$this->assign([


            ]);*/
            return  $this->fetch('correlationAnalysis');
        }
        else{
           echo $this->redirect('index/index/index');
        }
    }

}