<?php
namespace reportbh\pc\model;
use think\Model;
use think\view;
use think\Db;
class data extends Model{

   public function judge($path,$data){
       $content=[];
       if($data['nor_data'] and file_exists($path.'/data/rawdata.zip')){
           $content['nor_data']=1;
       }else{
           $content['nor_data']=0;
       }
       if(file_exists($path.'/All_Data.zip')){
            $content['all_data']=1;
       }else{
             $content['all_data']=0;
       }
       return $content;
     }
}