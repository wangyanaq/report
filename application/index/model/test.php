<?php
//在模型里单独设置数据库连接信息
namespace reportbh\index\model;
use think\Model;
use think\Db;
class test extends Model
{
//或者使用字符串定义
 protected $connection = 'mysql://qpcr:qpcr2017@10.2.2.153:3306/qpcr#utf8';
  public function conn(){
  // $bh=Db::connect($connection)->query("SELECT * FROM   tbl_ypxx  WHERE COL_HTBH='BC150034'");
   $bh= $this->db(1, 'connection')->query("SELECT * FROM   tbl_ypxx  WHERE COL_HTBH='BC150034'");
    return $bh;
  }
   //2.对应合同号的信息,跨库查询
      public function qc_info($bh_id){
         //$result=db('bh_chip_qcinfo')->where('bh_id',$bh_id)->select();
        $result=$bh= $this->db(1, 'connection')->query("SELECT * FROM   tbl_ypxx  WHERE COL_HTBH='BC150034'");
        $info=[];
        $i=1;
        if(empty($result)){
           $info['flag']=0;
        }else{
       foreach($result as $row ){
          if($row){
             $info['flag']=1;
              $info['info'][$i++]=$row;
          }
          else{
             $info['flag']=0;
          }
       }}
           return   $info;
      }
}
?>