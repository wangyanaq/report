<?php
namespace reportbh\pc\model;
use reportbh\pc\model\diffHandle;
use think\Model;
use think\view;
use think\Db;
class enrich extends Model{
 //1.go2.kegg
   public function go($path,$flag,$pname){
       $go=[];
       if($flag){
          //mRNA
             $m=$path."/enrich/";
             $th=new diffHandle();
             $go['list']=$th->read_all_file($m,$pname);
             if(count($go['list'])){
               $go['flag']=1;
             }else{
               $go['flag']=0;
             }
             if(file_exists($m.$pname.'_enrichment.zip')){
                $go['enrich']=1;
              }else{
                $go['enrich']=0;
              }
       }else{
         $go['flag']=0;
       }
       return $go;
     }
 //2.pathway
  public function pway($path){
    $p=[];
     if(file_exists($path.'/enrich/pathway.zip')){
        $p['flag']=1;
      }else{
        $p['flag']=0;
      }
      return $p;
  }
}