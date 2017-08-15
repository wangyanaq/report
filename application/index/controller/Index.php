<?php
namespace reportbh\index\controller;
use think\Controller;
use reportbh\index\model\getMsg;
use think\view;
 use think\Config;
 use think\captcha\Captcha;
class Index  extends Controller
{
    public function index()
    {
       // 清除session（ 当前作用域）
       session(null);
        $read=new getMsg();
        $flg=$read->isMobile();
        session('mobile',$flg);
        if($flg){
          echo $this->fetch('index_m');
        }
        else{
           echo $this->fetch('index_p');
        }

    }
}