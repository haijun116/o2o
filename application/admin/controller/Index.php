<?php
/**
 * Created by PhpStorm.
 * User: lion
 * Date: 17-11-15
 * Time: 上午10:14
 */

namespace app\admin\controller;

use phpmailer\Email;
use think\Controller;

class Index extends Controller
{

    public function index(){
        return $this->fetch();
    }

    public function test(){

        return \Map::getLngLat('北京昌平沙河');
    }

    public function send(){

        $res = Email::send('1161869799@qq.com','hello','helloworld');
        if($res){
            echo '发送成功';
        }else{
            echo '发送失败';
        }
    }
}