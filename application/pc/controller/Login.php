<?php
namespace reportbh\pc\controller;
use think\Controller;
use think\View;
use reportbh\mobile\model\valid ;
use reportbh\pc\model\getString ;
//header('Content-Type:text/html;charset=utf-8');
//session_start();
class  Login  extends Controller
{
    public function login()
    {
        $read=new valid();
        $r=$read->valid_exists();
       if($r){
         $data=input('post.');
            if(isset($data['bh_id'])){
               $status=1;
               $bh_id=$data['bh_id'];
               session('curr_bh_id',$bh_id); //当前合同编号
               //获取当前合同编号的50个字符串，存入session值
                 $get=new getString();
                 $r=$get->getstring();
                return 1;
            }
            else{
               //获取所有合同信息
              $get=new getString();
              $bh_id_all=$get->getAllBh();
              //var_dump($bh_id_all);

                if(empty($bh_id_all)){
                //没有任何合同存在
                   $status=0;
                   $bh_id="没有任何合同";
                }else{
                //存在合同
                    $status=1;
                    //找出最新添加的合同记录
                    $bh_id_flag=$bh_id_all[0];
                    foreach($bh_id_all as $vo){
                       if(strtotime($bh_id_flag['add_date'])<=strtotime($vo['add_date'])){
                         $bh_id_flag=$vo;
                       }
                    }
                    //判断合同类别查询该合同信息
                     if(preg_match("/^BH/i", $bh_id_flag['bh_id'],$matches)){
                          $curr_bh=db('bh_chip_reportinfo')->where(['username'=>session('username'),'add_date'=> $bh_id_flag['add_date']])->find();
                      }else if(preg_match("/^BC/i",$bh_id_flag['bh_id'], $matches)){
                          $curr_bh=db('bc_seq_reportinfo')->where(['username'=>session('username'),'add_date'=> $bh_id_flag['add_date']])->find();
                      }


                     $bh_id=$curr_bh['bh_id'];
                     session('curr_bh_id',$bh_id); //最新合同编号
                     $ana_row=db('bh_chip_analysis')->where('bh_id',session('curr_bh_id'))->find();
                     //获取当前合同编号的50个字符串，存入session值
                        $get=new getString();
                         $r=$get->getstring();
                     //根据合同号的前两个字母判断芯片报告还是测序报告
                      if(preg_match("/^BH/i", $bh_id, $matches)){
                            $bh_style='bh';
                       } else  if(preg_match("/^BC/i", $bh_id, $matches)){
                            $bh_style='bc';
                       }
                }
               $this->assign([
                 'status'=>$status,//是否存在合同 0 没有合同 / 1 有合同存在
                  'username'=>session('username'), //用户名
                  'bh_id_all'=>$bh_id_all,  //芯片所有合同信息
                  'curr_bh'=>$curr_bh,  //最新合同信息列表
                  'bh_id'=> session('curr_bh_id'), //最新合同编号,
                  'bh_status'=>$bh_style, //合同类别 bc / bh
                  'ana_row'=>$ana_row,  //最新合同分析项目列表
               ]);
                return  $this->fetch('login');

            }
       }
        else{
           echo $this->redirect('index/index/index');
        }
    }
    public function current(){

            $read=new valid();
            $r=$read->valid_exists();
            if($r){


               $bh_id=session('curr_bh_id');
             //根据合同号的前两个字母判断芯片报告还是测序报告
              if(preg_match("/^BH/i",$bh_id, $matches)){
                   $bh_style='bh';
                   $pre="bh_chip";
               } else  if(preg_match("/^BC/i", $bh_id, $matches)){
                   $bh_style='bc';
                   $pre="bc_seq";
               }
                //获取所有合同信息
                $get=new getString();
                $bh_id_all=$get->getAllBh();
                 //最新合同信息列表
               $curr_bh=db($pre.'_reportinfo')->where('bh_id',session('curr_bh_id'))->find();
               //最新合同分析项目列表
               $ana_row=db($pre.'_analysis')->where('bh_id',session('curr_bh_id'))->find();
               $status=1;
              $this->assign([
                       'status'=>$status,
                        'username'=>session('username'),
                        'bh_id_all'=>$bh_id_all,
                        'bh_id'=> session('curr_bh_id'), //最新合同编号,
                        'bh_status'=>$bh_style,  //合同类别
                        'curr_bh'=>$curr_bh,   //最新合同信息列表
                        'ana_row'=>$ana_row, //最新合同分析项目列表
                    ]);
                  return  $this->fetch('login');
            }
            else{
               echo $this->redirect('index/index/index');
            }

    }


}