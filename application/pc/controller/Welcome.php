<?php
namespace reportbh\pc\controller;
use think\Controller;
use think\View;
use reportbh\mobile\model\valid ;
//header('Content-Type:text/html;charset=utf-8');
//session_start();
class  Welcome  extends Controller
{
    public function welcome($bh_id)
        {
            $read=new valid();
            $r=$read->valid_exists();
            if($r and isset($bh_id)){
             $ana_row=db('bh_chip_analysis')->where('bh_id',$bh_id)->find();
             $curr_bh=db('bh_chip_reportinfo')->where('bh_id',$bh_id)->find();
             $username= $curr_bh['username'];
             $login=db('bh_login')->where('username',$username)->find();

          //根据合同号的前两个字母判断芯片报告还是测序报告
             if(preg_match("/^BH/i", $bh_id, $matches)){
                  $bh_style='bh';
             } else  if(preg_match("/^BC/i", $bh_id, $matches)){
                  $bh_style='bc';
             }
                $this->assign([
                 'bh_id'=>$bh_id, //当前合同编号,
                 'bh_status'=>$bh_style, //合同类别
                 'curr_bh'=>$curr_bh, //当前报告信息
                 'ana_row'=>$ana_row,  //当前分析类别
                 'last_login_time'=>$login['last_login_time'], //最后一次登录时间
                 'last_login_ip'=>$login['last_login_ip'], //最后一次登录ip
                ]);
                echo  $this->fetch('welcome');
            }
            else{
               echo $this->redirect('index/index/index');
            }
        }
}