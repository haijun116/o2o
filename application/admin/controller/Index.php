<?php
/**
 * Created by PhpStorm.
 * User: lion
 * Date: 17-11-15
 * Time: 上午10:14
 */

namespace app\admin\controller;


use think\Controller;

class Index extends Controller
{

    public function index(){
        return $this->fetch();
    }

}