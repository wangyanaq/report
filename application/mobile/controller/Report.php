<?php
namespace reportbh\mobile\controller;
use think\Controller;
use think\view;
use reportbh\mobile\model\valid;
//header('Content-Type:text/html;charset=utf-8');
class Report  extends Controller
{
    public function report_info( )
    {
      $read=new valid();
      $r=$read->valid_exists( );
      if($r){
           $username=session('username');
           $read=new valid();
           $bh_info=$read->bh_info();
           // $view=new View();
          //   $view->username=$username;
          // $view->bh_info=$bh_info;
           //return $view->fetch('report_info');
           $this->assign([
            'username' =>$username,
            'bh_info'=>$bh_info
           ]);
         echo $this->fetch('report_info');
      }else{
         echo $this->redirect('index/index/index');
      }
     }
    public function report($bh_id)
      {
        $read=new valid();
        $r=$read->valid_exists();
        if($r){
          $read=new valid();
           $bh_info=$read->bh_reportinfo($bh_id);
           if($bh_info['status']=='1'){
              $read=new valid();
              //分析id存入session值
              $read->save_analysis_id($bh_id);
              $report_list=$read->bh_reportlist();
              $this->assign([
                  'bh_id'=>$bh_id ,
                  'bh_info'=>$bh_info,
                  'report_list'=>$report_list,
               ]);
           }
           else{
             $this->assign([
                'bh_id'=>$bh_id ,
                'bh_info'=>$bh_info
             ]);
           }
          echo $this->fetch('report');
        }
        else{
          echo $this->redirect('index/index/index');
        }
      }
    public function report_1($bh_id,$level)
    {
      $read=new valid();
      $r=$read->valid_exists( );
      if($r){
        $bh_1_exists=$read->bh_exists($level);
        $bh_all_title =$read->all_title($level);
        $all_content=$read->all_content($level);
        $img_flag=$read->img_flag();
         $chip_list=$read->chip_diff();
        $this->assign([
            'bh_id'=>$bh_id,
            'analysis_id'=>session('analysis_id'),
            'level'=>$level,
            'bh_1'=>$bh_1_exists,
            'all_title'=>$bh_all_title,
            'all_content'=>$all_content,
            'img_flag'=>$img_flag ,
            'chip_list'=>$chip_list
         ]);
        echo $this->fetch('report_1');
      }
      else{
         echo $this->redirect('index/index/index');
       }
    }
    public function report_2($bh_id,$level)
    {
      $read=new valid();
     $r=$read->valid_exists( );
     if($r){
          $bh_2_exists=$read->bh_exists($level);
          $bh_all_title =$read->all_title($level);
          $all_content=$read->all_content($level);
          $plot=$read->plot_exists();
          //跨库查询
          //$qc_info=$read->qc_info($bh_id);

          $chip_list=$read->chip_list();
           $this->assign([
               'bh_id'=>$bh_id,
                'analysis_id'=>session('analysis_id'),
                'level'=>$level,
               'bh_2'=>$bh_2_exists,
               'all_title'=>$bh_all_title,
               'all_content'=>$all_content,
               'plot'=>$plot,
              // 'qc_info'=>$qc_info,
               'chip_list'=>$chip_list
            ]);

         echo $this->fetch('report_2');
        }
      else{
         echo $this->redirect('index/index/index');
       }
    }
    public function report_3($bh_id,$level)
    {
       $read=new valid();
        $r=$read->valid_exists( );
        if($r){
           $bh_3_exists=$read->bh_exists($level);
            $bh_all_title =$read->all_title($level);
            $all_content=$read->all_content($level);
            $img_flag=$read->vol_plot( );
            $this->assign([
                'bh_id'=>$bh_id,
                 'analysis_id'=>session('analysis_id'),
                 'level'=>$level,
                'bh_3'=>$bh_3_exists,
                'all_title'=>$bh_all_title,
                 'all_content'=>$all_content,
                 'img_flag'=>$img_flag
             ]);
          echo $this->fetch('report_3');
         }
       else{
          echo $this->redirect('index/index/index');
        }
    }
    public function report_4($bh_id,$level)
    {
      $read=new valid();
      $r=$read->valid_exists( );
      if($r){
           $bh_4_exists=$read->bh_exists($level);
           $bh_all_title =$read->all_title($level);
           $all_content=$read->all_content($level);
           $img_flag=$read->k_g();
           $this->assign([
               'bh_id'=>$bh_id,
                'analysis_id'=>session('analysis_id'),
               'level'=>$level,
               'bh_4'=>$bh_4_exists,
               'all_title'=>$bh_all_title,
               'all_content'=>$all_content,
                'img_flag'=>$img_flag
            ]);
         echo $this->fetch('report_4');
        }
      else{
         echo $this->redirect('index/index/index');
       }
    }
    public function mRNA()
    {
      $read=new valid();
       $r=$read->valid_exists( );
       if($r){
          $img_flag=$read->img_flag();
          $this->assign([
              'img_flag'=>$img_flag,
                'analysis_id'=>session('analysis_id'),
           ]);
         echo $this->fetch('mRNA');
        }
      else{
         echo $this->redirect('index/index/index');
       }
    }
   public function lncRNA()
    {
      $read=new valid();
     $r=$read->valid_exists( );
     if($r){
          $img_flag=$read->img_flag();
          $this->assign([
              'img_flag'=>$img_flag,
                'analysis_id'=>session('analysis_id'),
           ]);
         echo $this->fetch('lncRNA');
        }
      else{
         echo $this->redirect('index/index/index');
       }
    }
   public function circRNA()
    {
      $read=new valid();
     $r=$read->valid_exists( );
     if($r){
        $img_flag=$read->img_flag();
        $this->assign([
            'img_flag'=>$img_flag,
              'analysis_id'=>session('analysis_id'),
         ]);
         echo $this->fetch('circRNA');
        }
      else{
         echo $this->redirect('index/index/index');
       }
    }
   public function box_plot()
    {
      $read=new valid();
     $r=$read->valid_exists( );
     if($r){
          $plot=$read->plot_exists();
          $this->assign([
                'plot'=>$plot,
                  'analysis_id'=>session('analysis_id'),
           ]);
         echo $this->fetch('box_plot');
        }
      else{
         echo $this->redirect('index/index/index');
       }
    }
    public function volcano()
    {
     $read=new valid();
    $r=$read->valid_exists( );
    if($r){
        $img_flag=$read->vol_plot();
        $this->assign([
             'img_flag'=>$img_flag,
               'analysis_id'=>session('analysis_id'),
         ]);
         echo $this->fetch('volcano');
      }
      else{
         echo $this->redirect('index/index/index');
       }
    }
     public function scatter()
    {
     $read=new valid();
    $r=$read->valid_exists( );
    if($r){
        $img_flag=$read->vol_plot();
        $this->assign([
             'img_flag'=>$img_flag,
               'analysis_id'=>session('analysis_id'),
         ]);
         echo $this->fetch('scatter');
        }
      else{
         echo $this->redirect('index/index/index');
       }
    }
     public function go()
      {
        $read=new valid();
       $r=$read->valid_exists( );
       if($r){
       $img_flag=$read->k_g();
        $this->assign([
             'img_flag'=>$img_flag,
               'analysis_id'=>session('analysis_id'),
         ]);
         echo $this->fetch('go');
        }
      else{
         echo $this->redirect('index/index/index');
       }
      }
     public function kegg()
      {
        $read=new valid();
       $r=$read->valid_exists( );
       if($r){
         $img_flag=$read->k_g();
         $this->assign([
              'img_flag'=>$img_flag,
                'analysis_id'=>session('analysis_id'),
          ]);
         echo $this->fetch('kegg');
        }
      else{
         echo $this->redirect('index/index/index');
        }
      }
}