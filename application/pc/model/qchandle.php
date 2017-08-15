<?php
namespace reportbh\pc\model;
use think\Model;
use think\view;
use think\Db;
class qchandle extends Model{
//1.质控信息
  public function qc_1($path){
     $sample=[];
     if(@$dh = opendir($path."/qc/Sample_QC_Report")){
             while(($file_name = readdir($dh)) !== false){
                 if(preg_match('/(.*?)\_QC_Report.doc/i',$file_name, $name)){

                    $file_path=$path."/qc/Sample_QC_Report/".$file_name;
                    $sample[$name[1]]=$file_name;
                 }
             }
             closedir($dh);
     }
       return $sample;
 }
   public function qc_2($path){
      $qc_img=[];
      if(@$dh = opendir($path."/data")){
            while(($file_name = readdir($dh)) !== false){
                if(preg_match('/(.*?)\.jpg/i',$file_name, $name)){
                  //文件名作为键，加密后的路径作为键值
                   //$file_path=$path."/data/".$file_name;
                   //$qc_img[$name[1]]=$this->file_img($file_path);
                   $qc_img[$name[1]]=$file_name;
                }
                if(preg_match('/(.*?)\.png/i',$file_name, $name)){
                  //文件名作为键，加密后的路径作为键值
                   // $file_path=$path."/data/".$file_name;
                   //$qc_img[$name[1]]=$this->file_img($file_path);
                   $qc_img[$name[1]]=$file_name;
                }
            }
                 closedir($dh);
      }
       return $qc_img;
   }
   public function qc_3($path){
     $qc_report=[];
     if(file_exists($path.'/qc/qc.txt') and file_exists($path.'/qc/Chip_QC_Report.doc')){
        $qc_report['flag']=1;
        //使用函数，传递文件路径名，读取txt所有内容，以tab键分割
        $qc_report['content']=$this->read_txt($path.'/qc/qc.txt');
     }
     else{
        $qc_report['flag']=0;
     }
    return  $qc_report;
   }
   public function qc_4($path,$flag){
      //数据库中查看box_plot是否为1
      if(file_exists($path.'/qc/box_plot.png') and ( $flag==1)){
         $qc_box=1;
      }
      else{
         $qc_box=0;
      }
     return  $qc_box;
    }
    //2.样本分组
    public function sample_group($analysis_id,$path){
      $m_f=[];
      $result=db('bh_chip_analysis')->where('analysis_id',$analysis_id)->find();
       if($result['pca_plot']||$result['clust_plot']||$result['corr_plot']){
           $m_f['flag']=1;
           //mRNA
           if($result['pca_plot'] and file_exists($path.'/index/mRNA/PCA.png')){
               $m_f['m_pca']=1;
           }else{
               $m_f['m_pca']=0;
           }
           if($result['clust_plot'] and file_exists($path.'/index/mRNA/hclust.png')){
                $m_f['m_hclust']=1;
            }else{
                $m_f['m_hclust']=0;
            }
           if($result['corr_plot'] and file_exists($path.'/index/mRNA/correlation.png')){
                $m_f['m_correlation']=1;
            }else{
                $m_f['m_correlation']=0;
            }
           //lncRNA
           if($result['pca_plot'] and file_exists($path.'/index/lncRNA/PCA.png')){
               $m_f['l_pca']=1;
           }else{
               $m_f['l_pca']=0;
           }
           if($result['clust_plot'] and file_exists($path.'/index/lncRNA/hclust.png')){
                $m_f['l_hclust']=1;
            }else{
                $m_f['l_hclust']=0;
            }
           if($result['corr_plot'] and file_exists($path.'/index/lncRNA/correlation.png')){
                $m_f['l_correlation']=1;
            }else{
                $m_f['l_correlation']=0;
            }
           //circRNA
           if($result['pca_plot'] and file_exists($path.'/index/circRNA/PCA.png')){
               $m_f['c_pca']=1;
           }else{
               $m_f['c_pca']=0;
           }
           if($result['clust_plot'] and file_exists($path.'/index/circRNA/hclust.png')){
                $m_f['c_hclust']=1;
            }else{
                $m_f['c_hclust']=0;
            }
           if($result['corr_plot'] and file_exists($path.'/index/circRNA/correlation.png')){
                $m_f['c_correlation']=1;
            }else{
                $m_f['c_correlation']=0;
            }
            if( file_exists($path.'/index/data.zip')){
              $m_f['data']=1;
            }else{
              $m_f['data']=0;
            }
       }else{
           $m_f['flag']=0;
       }
       return $m_f;
    }
    //3.数据分析文档
    public function data_doc($path,$bh_id){
       $doc=[];
       $doc['data']=$this->pub_sql($bh_id);
       $doc['flag']=$this->pub_file($path,'Chip_data_analysis.docx');
       return $doc;
    }

    //4.实验文档
    public function exper_doc($path,$bh_id){
       $exp=[];
       $exp['data']=$this->pub_sql($bh_id);
       $exp['flag']=$this->pub_file($path,'ExperimentalMethod.doc');
       return $exp;
    }
    //3和4公共函数
    public function pub_sql($bh_id){
      $result=db('bh_chip_reportinfo')->where('bh_id',$bh_id)->find();
           if(empty($result)){
           }else{
            return $result;
           }
    }
    public function pub_file($path,$file_name){
     if(file_exists($path.'/qc/'.$file_name)){
        return 1;
     }else{
        return 0;
     }
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
}