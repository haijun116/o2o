<?php
/**
 * Created by PhpStorm.
 * User: lion
 * Date: 17-11-17
 * Time: 下午4:18
 */
namespace app\bis\controller;
use think\Controller;

class Login extends Controller
{
    public function index(){

        return $this->fetch();
    }
}