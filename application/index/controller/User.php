<?php
/**
 * Created by PhpStorm.
 * User: lion
 * Date: 17-11-14
 * Time: 下午11:07
 */

namespace app\index\controller;


use think\Controller;

class User extends Controller
{

    public function login(){
        return $this->fetch();
    }

    public function register(){

        return $this->fetch();
    }
}