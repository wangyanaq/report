<?php
namespace reportbh\rnaseq\controller;
use think\Controller;
use think\View;
use reportbh\mobile\model\valid ;
//header('Content-Type:text/html;charset=utf-8');
//session_start();
class  GeneExpression  extends Controller
{
    public function geneExpression()
    {
        $read=new valid();
        $r=$read->valid_exists();
        if($r){

            /*$this->assign([


            ]);*/
            return  $this->fetch('geneExpression');
        }
        else{
           echo $this->redirect('index/index/index');
        }
    }

}