<?php
namespace reportbh\index\model;
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

  public function valid_user($username,$password,$ip_info){
     $password=SHA1(md5($password));
     $map['username']=$username;
     $map['password']=$password;
      $user=db('bh_login')->where($map)->find();
    if($user){
      if($user['status']){
            //调用函数，写入时间，ip等信息
            $this->write_info($username,$ip_info);
            $bh_id_all=db('bh_chip_reportinfo')->where('username',$username)->select();
          //  $bh_id_flag=$bh_id_all[0]['add_date'];
          /*  foreach($bh_id_all as $vo){
               if(strtotime($bh_id_flag)<strtotime($vo['bh_id'])){
                 $bh_id_flag=$vo['bh_id'];
               }
            };*/
           //  $bh_id=db('bh_chip_reportinfo')->where(['username'=>$username,'add_date'=> $bh_id_flag])->value('bh_id' );
            //$mark=db('bh_chip_analysis')->where('bh_id',$bh_id)->value('analysis_id');
           // $rand_num = rand(1,48);
            //$subanalysis_id=substr($mark,$rand_num,$rand_num-48);
         $obj=['status'=>$user['status'],];//'bh_id'=>$bh_id
        //return 1;//密码正确,账号有效
        session('username',$username);
        session('password',$password);
         // session('path',$mark);
        //session('bh_id',$bh_id);
        //   session('analysis_id',$subanalysis_id);
        session('role',$user['role']);
        return $obj;
      }
      else{
        //return 0;//密码正确,账号失效
         $obj=['status'=>0 ];
         return $obj;
      }

    }
    else{
      //return  -1;  //密码错误
       $obj=['status'=>-1];
       return $obj;
    }
  }
  public function write_info($username,$ip_info){
    $ip=$ip_info['ip'];
    $addr=$ip_info['address'];
    $time=date("Y-m-d H:i:s");
    //获取最近一次登录时间和IP地址，保存在session值里
      $result=db('bh_login')->where('username',$username)->find();
      session('last_login_time',$result['last_login_time']);
      session('last_login_ip',$result['last_login_ip']);
    //更新登录信息
    db('bh_login')->where('username',$username)->update(['last_login_time'=>$time,'last_login_ip'=>$ip]);
    //添加登录信息
    $id=db('bh_login')->where('username',$username)->find();
    db('bh_login_log')->insert(['login_id'=>$id['uuid'],'login_date'=>$time,'login_ip'=>$ip,'login_addr'=>$addr]);
  }
}