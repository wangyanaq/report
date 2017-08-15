<?php
namespace reportbh\index\controller;
use think\Controller;
use think\View;
use reportbh\index\model\getMsg;
//use
//header('Content-Type:text/html;charset=utf-8');
//session_start();
class  Login  extends Controller
{
    public function login()
    {
      if(request()->isPost()){
          $read=new getMsg();
          $data=input('post.');
           $username = htmlspecialchars($data['username']);
           $password=$data['password'];
           $ip_info=$data['ip_info'];
          if(preg_match("/^[0-9_A-Za-z]+$/",$username)){
              $num=$read->valid_user($username,$password,$ip_info);
               if(session('role')==0){
                    return json_encode($num);
               }else if(session('role')==1){
                   $this->redirect('admin/login/login');
               }

          }
          else{
             if(session('mobile')){
                 return 0;
             }
             else{
                $this->error('用户名或者密码错误');
             }
          }
       }
       return $this->fetch('index/index');
    }
}