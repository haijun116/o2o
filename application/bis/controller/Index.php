<?php
/**
 * Created by PhpStorm.
 * User: lion
 * Date: 17-11-17
 * Time: 下午4:16
 */
namespace app\bis\controller;
use think\Controller;

class Index extends Controller
{

    public function index(){

        return $this->fetch();
    }
}