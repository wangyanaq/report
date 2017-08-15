<?php
namespace reportbh\pc\controller;
use think\Controller;
use think\View;
use reportbh\mobile\model\valid ;
//header('Content-Type:text/html;charset=utf-8');
//session_start();
class  Rowdata  extends Controller
{
        //原始数据
     public function rawData($bh_id)
            {
                $read=new valid();
                $r=$read->valid_exists();
                if($r and isset($bh_id)){

                       $this->assign([
                         'bh_id'=>$bh_id,


                       ]);
                    echo  $this->fetch('rawData');
                }
                else{
                   echo $this->redirect('index/index/index');
                }
            }

}