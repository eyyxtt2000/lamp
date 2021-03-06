<?php
//引用对应的命名空间
use Gregwar\Captcha\CaptchaBuilder;


function makecode(){
    //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $code= $builder->bulid('3');
        $builder->build($width = 100, $height = 45, $font = null);

        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session
       session(['code'=>$phrase]);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
       
         return $builder->inline();
}

     function checkcode($code)
    {
        //检测
        $session_code=session('code');
        if(  $session_code !=$code){
            return false;
        }else{
            return true;
        }


    }


 