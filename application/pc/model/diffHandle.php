<?php
namespace reportbh\pc\model;
use think\Model;
use think\view;
use think\Db;
class diffHandle extends Model{
//差异基因数目统计
  public function diff_1($path){
     $diff_num=[];
     if(file_exists($path."/diff/mRNA/diffgene.txt") or file_exists($path."/diff/lncRNA/diffgene.txt") or file_exists($path."/diff/circRNA/diffgene.txt")){
        $diff_num['flag']=1;
        //mRNA
          $diff_num['mRNA']=$this->pub_diff_1($path,'m','mRNA');

        //lncRNA
           $diff_num['lncRNA']=$this->pub_diff_1($path,'l','lncRNA');
        //circRNA
            $diff_num['circRNA']=$this->pub_diff_1($path,'c','circRNA');
     }else{
         $diff_num['flag']==0;
     }
     return  $diff_num;
 }
 //封装公共的数目统计
 public function pub_diff_1($path,$pf,$fname){
      $diff_num=[];
      if(file_exists($path."/diff/".$fname."/diffgene.txt")){
          if(isset($diff_num['curr'])){

          }else{
             $diff_num['curr']=$pf;
          }
            $diff_num[$pf.'_f']=1;
            $p=$path.'/diff/'.$fname.'/diffgene.txt';
           //读取txt文本
            $diff_num[$pf.'_content']=$this->read_txt($p);
              //excel是否存在,存在判断文本内容行数，状态置1，否则置0
             if(file_exists($path."/diff/".$fname."/diff_up_down_gene_count.xls")){
                 $diff_num[$pf.'_x']=1;
                 $diff_num[$pf.'_count']=count( $diff_num[$pf.'_content'])-1;
             }else{
                $diff_num[$pf.'_x']=0;
             }

      }else{
         $diff_num[$pf.'_f']=0;
      }
      return  $diff_num;
 }
  //读取txt文件内容
   public function read_txt($path){
     $p=[];
      $fh=fopen($path,'r');
      while(!feof($fh)){
          if(($string=fgets($fh))!==false){
             $arry=explode("\t",$string);
          // $arry=explode(",",$string);
             $p[]=$arry ;
          }
       }
      fclose($fh);
      return $p;
    }
   //差异基因列表
    public function diff_2($path){
      $diff_list=[];
      //总表
      if(file_exists($path.'/diff/SummaryListing/Normalized_Data.xlsx') and file_exists($path.'/diff/SummaryListing/total.png')){
           $diff_list['total_flag']=1;
           //读取SummaryListing文件夹下的所有文件，不包括.png文件
           $p=$path.'/diff/SummaryListing';
           $diff_list['total_list']=$this->read_all_file($p,'total');

      }else{
           $diff_list['total_flag']=0;
      }
      //差异表
      //mRNA
        $diff_list['mRNA']=$this->pub_diff_2($path,'m','mRNA');

      //lncRNA
         $diff_list['lncRNA']=$this->pub_diff_2($path,'l','lncRNA');
      //circRNA
          $diff_list['circRNA']=$this->pub_diff_2($path,'c','circRNA');
      if(file_exists($path.'diff/DifferencesListing/mRNA/header_m_ceR.pdf')){
                $diff_list['m_header']=1;
           }else{
              $diff_list['m_header']=0;
           }
      if(file_exists($path.'diff/DifferencesListing/lncRNA/header_lnc_ceR.pdf')){
                 $diff_list['l_header']=1;
            }else{
               $diff_list['l_header']=0;
            }
       if(file_exists($path.'diff/DifferencesListing/circRNA/header_ciec_ceR.pdf')){
                 $diff_list['c_header']=1;
             }else{
                 $diff_list['c_header']=0;
             }
    return $diff_list;
    }
    public function pub_diff_2($path,$pf,$fname){
        $result=[];
       if(file_exists($path.'/diff/DifferencesListing/Differentially_expressed_genes_'.$fname.'.xlsx') and file_exists($path.'/diff/DifferencesListing/'.$fname.'.png')){
           $result[$pf.'_f']=1;
           $p=$path.'/diff/DifferencesListing/'.$fname.'/list';
            $result[$pf.'_list']=$this->read_all_file($p,'differ');
       }else{
           $result[$pf.'_f']=0;
       }
       return $result;
    }
     //lncRNA靶基因
     public function diff_3($path,$flag){
        $lnc_pre=[];
        if($flag){
          $lnc_pre['flag']=1;
           if(file_exists($path.'/predication/DIFF_GENES_CIS.xlsx')){
              $lnc_pre['cis']=1;
            }else{
              $lnc_pre['cis']=0;
           }
           if(file_exists($path.'/predication/DIFF_GENES_TRANS.xlsx')){
              $lnc_pre['trans']=1;
            }else{
              $lnc_pre['trans']=0;
           }
          if(file_exists($path.'/predication/LncRNA_Target_genetic_prediction.pdf')){
             $lnc_pre['pre']=1;
           }else{
             $lnc_pre['pre']=0;
          }

        }else{
          $lnc_pre['flag']=0;
        }
        return $lnc_pre;
     }
     //cirRNA RME
     public function diff_4($path,$flag){
         $circ_pre=[];
        if($flag){
          $circ_pre['flag']=1;
          $p=$path.'/MRE/';
          $circ_pre['list']=$this->read_all_file($p,'MRE');
          if(file_exists($p.'circRNA_microRNA_MRE_result.pdf')){
              $circ_pre['pre']=1;
          }else{
              $circ_pre['pre']=0;
          }
        }else{
          $circ_pre['flag']=0;
        }
        return $circ_pre;
      }
      //火山图
     public function diff_5($path,$flag){
       $volcano=[];
       if($flag){
         $volcano['flag']=1;
          //mRNA
             $m=$path."/diff/mRNA/";
             $volcano['mRNA']['list']=$this->read_all_file($m,'volcano');
             if(count($volcano['mRNA']['list'])){
               $volcano['mRNA']['flag']=1;
             }else{
               $volcano['mRNA']['flag']=0;
             }
          //lncRNA
           $l=$path."/diff/lncRNA/";
            $volcano['lncRNA']['list']=$this->read_all_file($l,'volcano');
             if(count($volcano['lncRNA']['list'])){
                $volcano['lncRNA']['flag']=1;
              }else{
                $volcano['lncRNA']['flag']=0;
              }
          //circRNA
            $c=$path."/diff/circRNA/";
             $volcano['circRNA']['list']=$this->read_all_file($c,'volcano');
              if(count($volcano['circRNA']['list'])){
                 $volcano['circRNA']['flag']=1;
               }else{
                 $volcano['circRNA']['flag']=0;
               }

       }else{
         $volcano['flag']=0;
       }
       return $volcano;
     }
     //散点图
     public function diff_6($path,$flag){
       $scatter=[];
       if($flag){
         $scatter['flag']=1;
          //mRNA
             $m=$path."/diff/mRNA/";
             $scatter['mRNA']['list']=$this->read_all_file($m,'scatter');
             if(count($scatter['mRNA']['list'])){
               $scatter['mRNA']['flag']=1;
             }else{
               $scatter['mRNA']['flag']=0;
             }
          //lncRNA
           $l=$path."/diff/lncRNA/";
            $scatter['lncRNA']['list']=$this->read_all_file($l,'scatter');
             if(count($scatter['lncRNA']['list'])){
                $scatter['lncRNA']['flag']=1;
              }else{
                $scatter['lncRNA']['flag']=0;
              }
          //circRNA
            $c=$path."/diff/circRNA/";
             $scatter['circRNA']['list']=$this->read_all_file($c,'scatter');
              if(count($scatter['circRNA']['list'])){
                 $scatter['circRNA']['flag']=1;
               }else{
                 $scatter['circRNA']['flag']=0;
               }

       }else{
         $scatter['flag']=0;
       }
       return $scatter;
     }
      //热图
     public function diff_7($path,$flag){
      $heatmap=[];
       if($flag){
         $heatmap['flag']=1;
          //mRNA
             $m=$path."/diff/mRNA/";
             $heatmap['mRNA']['list']=$this->read_all_file($m,'heatmap');
             if(count($heatmap['mRNA']['list'])){
               $heatmap['mRNA']['flag']=1;
             }else{
               $heatmap['mRNA']['flag']=0;
             }
          //lncRNA
           $l=$path."/diff/lncRNA/";
            $heatmap['lncRNA']['list']=$this->read_all_file($l,'heatmap');
             if(count($heatmap['lncRNA']['list'])){
                $heatmap['lncRNA']['flag']=1;
              }else{
                $heatmap['lncRNA']['flag']=0;
              }
          //circRNA
            $c=$path."/diff/circRNA/";
             $heatmap['circRNA']['list']=$this->read_all_file($c,'heatmap');
              if(count($heatmap['circRNA']['list'])){
                 $heatmap['circRNA']['flag']=1;
               }else{
                 $heatmap['circRNA']['flag']=0;
               }

       }else{
         $heatmap['flag']=0;
       }
       return $heatmap;
     }

    //读取某文件夹下的所有文件，不包括.png文件
    public function read_all_file($path,$judge){
        $result=[];
        if(@$fn=opendir($path)){
          while(($file_name=readdir($fn))!==false){
            if($judge=='total'||$judge=='differ'||$judge=='MRE'){
               if(preg_match('/(.*?).(txt|xlsx|xls)/i',$file_name,$name)){
                  if($judge=='total'){
                     $result[$name[2]]=$file_name;
                  }else if($judge=='differ'){
                    $result[$file_name]=$name[2];
                  }else{
                    $result[]=$file_name;
                  }
               }
            }else if($judge=='volcano'||$judge=='heatmap'||$judge=='go'||$judge=='kegg'){
                if(preg_match('/(.*?_'.$judge.'_.*?)\.png/i',$file_name,$name)){
                   $result[$name[1]]=$name[0];
                }
            }else{
                 if(preg_match('/(.*?scatter.*?)\.png/i',$file_name,$name)){
                   $result[$name[1]]=$name[0];
                 }
            }

          }
          closedir($fn);
        }
        return $result;
    }
}