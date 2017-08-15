<?php
namespace reportbh\pc\model;
use think\Model;
use think\view;
use think\Db;
class getString extends Model{
//写入当前分析字符串
 public function getstring(){
    $curr_analysis_id=db('bh_chip_analysis')->where('bh_id',session('curr_bh_id'))->find();
      if(empty($curr_analysis_id)){

      }else{
        session('curr_analysis_id', $curr_analysis_id);
      }
 }
 //获取所有合同信息，芯片，测序，其他
 public function getAllBh(){
    //芯片所有合同
    $bh_id_all=db('bh_chip_reportinfo')->where('username',session('username'))->select();
    //测序所有合同
    $bc_id_all=db('bc_seq_reportinfo')->where('username',session('username'))->select();
    //其他合同

    //合并所有合同信息
     $bh_all=array_merge_recursive( $bh_id_all, $bc_id_all);

     return $bh_all;
 }
}