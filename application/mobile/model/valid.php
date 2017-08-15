<?php
namespace reportbh\mobile\model;
use think\Model;
use think\view;
use think\Db;
class valid extends Model{

  protected $connection = 'mysql://qpcr:qpcr2017@10.2.2.153:3306/qpcr#utf8';

  public function valid_exists(){
      $username=session('username');
       if(isset($username)){
           return 1;
         }
       else{
          return 0;
        }
  }
  public function bh_info(){
      $bh_info=db('bh_chip_reportinfo')->where('username',session('username'))->column('bh_id');
      return $bh_info;
  }
  public function bh_reportinfo($bh_id){
    $result=db('bh_chip_reportinfo')->where('bh_id',$bh_id)->find();
      return  $result ;
  }
  //存入分析id的session值
    public function save_analysis_id($bh_id){
     session('analysis_id',null);
      $result=db('bh_chip_analysis')->where('bh_id',$bh_id)->value('analysis_id');
       session('analysis_id',$result);
       return $result;
    }
  public function bh_reportlist(){
      $result=db('bh_report_list')->where(['rank'=>0,'mobile'=>1,'status'=>1])->select();
       $list=[];
       foreach($result as $row){
          $list[]=['level'=>$row['level'],'title'=>htmlspecialchars_decode($row['title'])];
       }
      return   $list;
    }
   public function bh_exists($level){
      $result=db('bh_report_list')->where(['level'=>(int)$level,'rank'=>'0','status'=>1])->value('status');
      return   $result;
    }
    //每个一级标题和二级标题名称
  public function all_title($level){
     $result=db('bh_report_list')->where(['level'=>(int)$level,'mobile'=>1,'status'=>1])->select();
     $list=[];
      foreach($result as $row){
         $list[]=['level'=>$row['level'],'rank'=>$row['rank'],'title'=>htmlspecialchars_decode($row['title']),'status'=>$row['status'],'text'=>strip_tags( htmlspecialchars_decode($row['title']))];
      }
       return   $list;
  }
  public function all_content($level){
    $result=db('bh_report_content')->where(['level'=>(int)$level,'mobile'=>'1','status'=>1])->select();
    $list=[];
    foreach($result as $row){
        $list[]=['level'=>$row['level'],'rank'=>$row['rank'],'content'=>htmlspecialchars_decode($row['content']),'status'=>$row['status'],'up'=>$row['con_up']];
    }
    return $list;
  }
  //1.pca,hclust,correlation图
  public function img_flag(){
     $m_f=[];
      $result=db('bh_chip_analysis')->where('analysis_id',session('analysis_id'))->find();
       if($result['pca_plot']||$result['clust_plot']||$result['corr_plot']){
           $m_f['flag']=1;
           $m_f['sql']=$result;
           $m_f['mlc']['m']=$this->m_f('mRNA');
           $m_f['mlc']['l']=$this->m_f('lncRNA');
           $m_f['mlc']['c']=$this->m_f('circRNA');
           if( ($result['pca_plot']=='1'and  $result['clust_plot']=='1') or ( $result['pca_plot']=='1'and  $result['corr_plot']=='1') or( $result['clust_plot']=='1'and $result['corr_plot']=='1')){
               $m_f['td']=1;
           }else{
               $m_f['td']=0;

           }
       }else{
          $m_f['flag']=0;
       }
       return $m_f;
  }
  public function m_f($r_name){
    $img_all=[];
     $i=0;
    //  $flg=;
     $img_all['title']=$r_name;
    if(file_exists(ROOT_PATH."public/result/".session('analysis_id')."/index/$r_name/hclust.png")||file_exists(ROOT_PATH."public/result/".session('analysis_id')."/index/$r_name/PCA.png")||file_exists(ROOT_PATH."public/result/".session('analysis_id')."/index/$r_name/correlation.png") ){
        $img_all['m_flag']=1;
        if(file_exists(ROOT_PATH."public/result/".session('analysis_id')."/index/$r_name/hclust.png")){
           $img_all['h_flag']=1;
           $i++;
           $file_name="/result/".session('analysis_id')."/index/$r_name/hclust.png";
            $img_all['h_path']=$file_name;
        }else{
           $img_all['h_flag']=0;
        }
        if(file_exists(ROOT_PATH."public/result/".session('analysis_id')."/index/$r_name/PCA.png")){
              $img_all['p_flag']=1;
              $i++;
              $file_name="/result/".session('analysis_id')."/index/$r_name/PCA.png";
             $img_all['p_path']=$file_name;
        }else{
           $img_all['p_flag']=0;
        }
        if(file_exists(ROOT_PATH."public/result/".session('analysis_id')."/index/$r_name/correlation.png")){
            $img_all['c_flag']=1;
             $i++;
            $file_name="/result/".session('analysis_id')."/index/$r_name/correlation.png";
            $img_all['c_path']=$file_name;
        }else{
           $img_all['c_flag']=0;
        }
         $img_all['total']=$i;
          $img_all['td']=round(100/$i, 0);
    }
    else{
         $img_all['m_flag']=0;
    }
    return $img_all;
  }
   //1.差异基因数据统计情况
      public function chip_diff(){
       $result=[];
        $chip_path=ROOT_PATH."public/result/".session('analysis_id')."/diff/diff.txt";
        if(file_exists($chip_path)){
          $result['flag']=1;
          $result['list']=$this->txt_content($chip_path);
        }
        else{
         $result['flag']=0;
        }

        return  $result ;
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
    //2.芯片实验质检情况
    public function chip_list(){
     $result=[];
      $chip_path=ROOT_PATH."public/result/".session('analysis_id')."/qc/qc.txt";
      if(file_exists($chip_path)){
        $result['flag']=1;
        $result['list']=$this->txt_content($chip_path);
      }
      else{
       $result['flag']=0;
      }

      return  $result ;
    }
  //2.箱线图
  public function plot_exists(){
     $img_all=[];
     $result=db('bh_chip_analysis')->where('analysis_id',session('analysis_id'))->find();
      if($result['box_plot']){
         $file_name=ROOT_PATH."public/result/".session('analysis_id')."/qc/box_plot.png";
         if(file_exists($file_name)){
             $img_all['box_flag']=1;
             $file_path="/result/".session('analysis_id')."/qc/box_plot.png";
              $img_all['b_path']=$file_path;
          }else{
             $img_all['box_flag']=0;
          }
      }
       $img_all['flag']=$result;
       return     $img_all ;
  }
  //3.火山图，散点图
  public function vol_plot( ){
     $k_g=[];
    $result=db('bh_chip_analysis')->where('analysis_id',session('analysis_id'))->find();
    if($result['volcano_plot']){
         $m=ROOT_PATH."public/result/".session('analysis_id')."/diff/mRNA/";
         $l=ROOT_PATH."public/result/".session('analysis_id')."/diff/lncRNA/";
         $c=ROOT_PATH."public/result/".session('analysis_id')."/diff/circRNA/";

         $mRNA=$this->file_path('volcano',$m);
         $lncRNA=$this->file_path('volcano',$l);
         $circRNA=$this->file_path('volcano',$c);
          $k_g['volcano']=['mRNA'=> $mRNA,'lncRNA'=>$lncRNA,'circRNA'=>$circRNA];
    }
   if($result['scatter_plot']){
        $m=ROOT_PATH."public/result/".session('analysis_id')."/diff/mRNA/";
       $l=ROOT_PATH."public/result/".session('analysis_id')."/diff/lncRNA/";
       $c=ROOT_PATH."public/result/".session('analysis_id')."/diff/circRNA/";

       $mRNA=$this->file_scatter('scatter',$m);
       $lncRNA=$this->file_scatter('scatter',$l);
       $circRNA=$this->file_scatter('scatter',$c);
       $k_g['scatter']=['mRNA'=> $mRNA,'lncRNA'=>$lncRNA,'circRNA'=>$circRNA];
    }
     $k_g['flag']=$result;
      return  $k_g ;
  }
    //kegg,go结果图
    public function  k_g(){
      $k_g=[];
      $kegg=db('bh_chip_analysis')->where('analysis_id',session('analysis_id'))->find();
      if($kegg['kegg']){
           $bh_path=ROOT_PATH."public/result/".session('analysis_id')."/enrich/";
          $k_g['kegg']=$this->file_path('kegg',$bh_path);
      }
      if($kegg['go']){
           $bh_path=ROOT_PATH."public/result/".session('analysis_id')."/enrich/";
          $k_g['go']=$this->file_path('go',$bh_path);
      }
       $k_g['flag']=$kegg;
       return $k_g;
    }
    //结果图是否存在
    public function file_path($fname,$bh_path){
        $img_all=[];
        $i=0;
        $img_all['title']=$fname;
       if(@$dh = opendir($bh_path)){
          while(($file_name = readdir($dh)) !== false){
                if(preg_match('/(.*?_'.$fname.'_.*?)\.png/i',$file_name,$name)){
                   $img_all['kg_flag']=1;
                     //$file_path="/result/".session('analysis_id')."/enrich/".$file_name;
                    $img_all['p_path'][$i++]=$file_name;
                }
                if($i>=6){
                  break;
                }
          }
            $img_all['total']=$i;
           if($i){
             $img_all['td']=round(100/$i, 0);
           }
       }
       if(empty($img_all['kg_flag'])){
         $img_all['kg_flag']=0;
       }
         return $img_all;
    }
    public function file_scatter($fname,$bh_path){
        $img_all=[];
        $i=0;
        $img_all['title']=$fname;
       if(@$dh = opendir($bh_path)){
          while(($file_name = readdir($dh))!== false){
            if(preg_match('/(.*?scatter.*?)\.png/i',$file_name,$name)){
               $img_all['kg_flag']=1;
                //$file_path="/result/".session('analysis_id')."/enrich/".$file_name;;
               $img_all['p_path'][$i++]=$file_name;
            }
          }
       }
       if(empty($img_all['kg_flag'])){
          $img_all['kg_flag']=0;
       }
         return $img_all;
    }
  //图片路径编码
  public function file_img($file){
      if($fp = fopen($file,"rb", 0))
      {
          $gambar = fread($fp,filesize($file));
          fclose($fp);
          $base64 = chunk_split(base64_encode($gambar));
          $img="data:image/jpg;base64,$base64";
      }
      return $img;
  }
  //读取文件.txt内容
  public function txt_content($file_name){
     $txt=[];
     $content= fopen($file_name, "r");
     $count= count(file($file_name));
     fclose($content);
    if($count!=1){
        $txt['flag']=1;
        $f_obj = fopen($file_name, "r");
        //  $i=1;
         // fgets($f_obj);
         while (!feof($f_obj))
        {
            if(($string=fgets($f_obj))!==false){
               $arry=explode("\t",$string);
            // $arry=explode(",",$string);
               $p[]=$arry ;
            }
        }
       fclose($f_obj);
    }
    else{
        $txt['flag']=0;
    }
    $txt['content'] =$p;
    return $txt;
  }
}