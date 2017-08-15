<?php
namespace reportbh\pc\model;
use think\Model;
use think\view;
use think\Db;
class getMsg extends Model{
   /**
        *判断是否是通过手机访问
        */
       public static function isMobile() {
           // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
           if (isset($_SERVER['HTTP_X_WAP_PROFILE'])) {
               return 1;
           }
           //如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
           if (isset($_SERVER['HTTP_VIA'])) {
               //找不到为flase,否则为true
               return stristr($_SERVER['HTTP_VIA'], "wap") ? 1 :0;
           }
           //判断手机发送的客户端标志,兼容性有待提高
           if (isset($_SERVER['HTTP_USER_AGENT'])) {
               $clientkeywords = array('nokia', 'sony', 'ericsson', 'mot', 'samsung', 'htc', 'sgh', 'lg', 'sharp',
                       'sie-', 'philips', 'panasonic', 'alcatel', 'lenovo', 'iphone', 'ipod', 'blackberry', 'meizu',
                       'android', 'netfront', 'symbian', 'ucweb', 'windowsce', 'palm', 'operamini', 'operamobi',
                       'openwave', 'nexusone', 'cldc', 'midp', 'wap', 'mobile');
               // 从HTTP_USER_AGENT中查找手机浏览器的关键字
               if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
                   return 1;
               }
           }
           //协议法，因为有可能不准确，放到最后判断
           if (isset($_SERVER['HTTP_ACCEPT'])) {
               // 如果只支持wml并且不支持html那一定是移动设备
               // 如果支持wml和html但是wml在html之前则是移动设备
               if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
                   return 1;
               }
           }
           return 0;
       }

  public function valid_user($username,$password){
     $password=SHA1(md5($password));
     $map['username']=$username;
     $map['password']=$password;
      $user=db('bh_login')->where($map)->find();
    if($user){
      if($user['status']){
        return 1;//密码正确,账号有效
      }
      else{
        return 0;//密码正确,账号失效
      }
      session('username',$username);
      session('password',$password);
    }
    else{
      return  -1;  //密码错误
    }
  }
  public function user($username){
    $user=db('user')->where('username',$username)->find();
     session('path',$user['file_id']);
     session('bh_id',$user['bh_id']);
     session('analysis_id',$user['file_id']);

     $analysis_all=$this->analysis($user['file_id']);
     return  $analysis_all;
  }
  public function report_info($username){
    $report_info=db('reportinfo')->where('username',$username)->find();
    return $report_info;
  }
  public function analysis($analysis_id){
    $analysis=db('analysis')->where('analysis_id',$analysis_id)->find();
    return  $analysis;
  }
  public function sel_page($num){
    $result=[];
    $path=session("path");
    $path=ROOT_PATH.'public/data/'.$path;
    if($num==1){
    /*差异基因信息*/
      if(file_exists($path."/index/mRNA.png")){
        $result['exit_mRNA']=1;
      }
      else{
         $result['exit_mRNA']=0;
      }
      if(file_exists($path."/index/lncRNA.png")){
        $result['exit_lncRNA']=1;
      }
      else{
         $result['exit_lncRNA']=0;
      }
      if(file_exists($path."/index/circRNA.png")){
        $result['exit_circRNA']=1;
      }
      else{
         $result['exit_circRNA']=0;
      }
      /*pca、样本聚类、correlation*/
      $analysis=$this->analysis(session('analysis_id'));
      if($analysis['pca_plot']||$analysis['clust_plot']||$analysis['corr_plot']){
        $result['exit_phc']=1;
        /*PCA*/
        if($analysis['pca_plot']){
          $result['exit_pca']=1;
          if(file_exists($path."/index/mRNA/PCA.png")){
              $result['m_pca']=1;
          }
          else{
              $result['m_pca']=0;
          }
           if(file_exists($path."/index/lncRNA/PCA.png")){
              $result['l_pca']=1;
           }
           else{
              $result['l_pca']=0;
           }
           if(file_exists($path."/index/circRNA/PCA.png")){
              $result['c_pca']=1;
           }
           else{
              $result['c_pca']=0;
           }
        }
        else{
           $result['exit_pca']=0;
        }
        /*hclust*/
        if($analysis['clust_plot']){
          $result['exit_hclust']=1;
          if(file_exists($path."/index/mRNA/hclust.png")){
              $result['m_hclust']=1;
          }
          else{
              $result['m_hclust']=0;
          }
          if(file_exists($path."/index/lncRNA/hclust.png")){
              $result['l_hclust']=1;
           }
          else{
             $result['l_hclust']=0;
           }
           if(file_exists($path."/index/circRNA/hclust.png")){
              $result['c_hclust']=1;
           }
           else{
              $result['c_hclust']=0;
           }
        }
        else{
           $result['exit_hclust']=0;
        }
        /*correlation*/
        if($analysis['corr_plot']){
          $result['exit_corr']=1;
          if(file_exists($path."/index/mRNA/correlation.png")){
              $result['m_corr']=1;
          }
          else{
              $result['m_corr']=0;
          }
           if(file_exists($path."/index/lncRNA/correlation.png")){
              $result['l_corr']=1;
           }
           else{
              $result['l_corr']=0;
           }
           if(file_exists($path."/index/circRNA/correlation.png")){
              $result['c_corr']=1;
           }
           else{
              $result['c_corr']=0;
           }
        }
        else{
          $result['exit_corr']=0;
        }
      }
      else{
        $result['exit_phc']=0;
      }

      /*试用流程图*/
      $report_info=db('reportinfo')->where('username',session('username'))->find();
       $result['chip_company']=$report_info["chip_company"];
      if(preg_match('/circ/i',$report_info["chip_info"]))
      {
          $result['flow_chart']='ceRNA';

      }else if(preg_match('/lncRNA/i',$report_info["chip_info"]))
      {

          $result['flow_chart']='lncRNA';
      }else if(preg_match('/ITV/i',$report_info["chip_info"]))
      {

        $result['flow_chart']='IVT';
      }else if(preg_match('/ST/i',$report_info["chip_info"]))
      {

        $result['flow_chart']='ST';

      }else if(preg_match('/TA/i',$report_info["chip_info"]))
      {

         $result['flow_chart']='XTA';
      }else if(preg_match('/exp/i',$report_info["chip_info"]))
      {
        $result['flow_chart']='exp';
      }
      /*材料与方法*/
      $result['qc_file']=$this->doc($path);

    }
    else if($num==2){
      /*RNA样本信息*/
      $r_des=db('qcinfo')->where('bh_id',session('bh_id'))->select();
      $result['r_des']=$r_des;
      /*RNA质检图*/
      if(file_exists($path."/qc/qc_1.png")){
        $result['qc_1']=1;
      }
      else{
        $result['qc_1']=0;
      }
       if(file_exists($path."/qc/qc_2.png")){
         $result['qc_2']=1;
       }
       else{
         $result['qc_2']=0;
       }
       /*电泳*/
       $result['qc_file']=$this->doc($path);
       /*芯片扫描信息*/
       if(@$dh = opendir($path."/data")){
         $result['pic']=[];
         while(($file_name = readdir($dh)) !== false){
             if(preg_match('/(.*?)\.jpg/i',$file_name, $name)){
                  $result['pic'][$file_name]=$name[1];
             }
             if(preg_match('/(.*?)\.png/i',$file_name, $name)){
                  $result['pic'][$file_name]=$name[1];
             }
         }
       }
       /*箱线图*/
       $analysis=$this->analysis(session('analysis_id'));
       if($analysis['box_plot']){
          $result['exit_box']=1;
          /*BOX*/
           if(file_exists($path."/qc/box_plot.png")){
              $result['box_plot']=1;
           }
           else{
              $result['box_plot']=0;
           }
       }
       else{
          $result['exit_box']=0;
          //$result['box_plot']=0;
       }
    }
     else if($num==3){
       /*分组信息*/
        $g_des=db('qcinfo')->where('bh_id',session('bh_id'))->select();
        $result['g_des']=$g_des;
        /*差异基因*/
        $analysis=$this->analysis(session('analysis_id'));
         if($analysis['express_filter']){
            $result['express_filter']=1;
            if(file_exists($path."/diff/Differentially_expressed_genes.zip")){
               $result['express_genes']=1;
            }
            else{
               $result['express_genes']=0;
            }
            if (file_exists($path."/diff/mRNA/diffgene.txt")){
               $result['express_m']=1;
              // $result['e_m']=[];
              // $result['e_m']=$this->read_file($path."/diff/mRNA/diffgene.txt");
            }
            else{
               $result['express_m']=0;
            }
         }
         else{
            $result['express_filter']=0;
         }
     }
     return $result;
  }
  public function read_file($path){
   /* @$myfile = fopen($path, "r") or die;
    $list=[];
    while(!feof($myfile)){
        //echo fgets($myfile);
        @$line =  explode("\t", str_replace("\n",'',fgets($myfile)));
        if(strlen($line[0]))
        {
            @$line[0] = str_replace(".txt",'',$line[0]);

        }else{
            -
        }
        if(strlen($line[1]))
        {
            echo '
            <td align="center">&nbsp;'.$line[1].'</td>
            ';
        }else{
            echo '
            <td align="center">&nbsp;-</td>
            ';
        }
        if(strlen($line[2]))
        {
            echo '
            <td align="center">&nbsp;'.$line[2].'</td>
            ';
        }else{
            echo '
            <td align="center">&nbsp;-</td>
            ';
        }
        if(strlen($line[3]))
        {
            echo '
            <td align="center">&nbsp;'.$line[3].'</td>
            ';
        }else{
            echo '
            <td align="center">&nbsp;-</td>
            ';
        }
        if(strlen($line[4]))
        {
            echo '
            <td align="center">&nbsp;'.$line[4].'</td>
            ';
        }else{
            echo '
            <td align="center">&nbsp;-</td>
            ';
        }
        if(strlen($line[5]))
        {
            echo '
            <td align="center">&nbsp;'.$line[5].'</td>
            ';
        }else{
            echo '
            <td align="center">&nbsp;-</td>
            ';
        }
        if(file_exists($_SESSION["path"].'/diff/lncRNA/'.$line[0].'.xls'))
        {
            echo '
            <td align="center">&nbsp;<a href="'.$_SESSION["path"].'/diff/lncRNA/'.$line[0].'.xls'.'">下载</a></td>
            ';
        }else{
            echo '
            <td align="center">&nbsp;-</td>
            ';
        }
         echo '
            </tr>
        ';
    }
    fclose($myfile);
*/
  }
  public function doc($path){
    $qc_file=$path."/qc/实验方法与质控报告.";
      //windows需要去掉下面注释
      $qc_file = iconv('utf-8', 'gb2312', $qc_file);
      if(file_exists($qc_file."doc")){
        return '/qc/实验方法与质控报告.doc';
      }

      //word 2007-2016
      if(file_exists($qc_file."docx")){

          return  '/qc/实验方法与质控报告.docx';
      }
      //zip
      if(file_exists($qc_file."zip")){

          return  '/qc/实验方法与质控报告.zip';
      }
      return 0;
  }
}