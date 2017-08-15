<?php
namespace reportbh\pc\controller;
use think\Controller;
use think\View;
use reportbh\mobile\model\valid ;
//header('Content-Type:text/html;charset=utf-8');
//session_start();
class  Source  extends Controller
{
      //其他系统
    public function source($bh_id)
        {
            $read=new valid();
            $r=$read->valid_exists();
            if($r and isset($bh_id)){
               $this->assign([
                 'bh_id'=>$bh_id,
               ]);
                echo  $this->fetch('source');
            }
            else{
               echo $this->redirect('index/index/index');
            }
        }

}