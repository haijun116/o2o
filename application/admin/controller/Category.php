<?php
/**
 * Created by PhpStorm.
 * User: lion
 * Date: 17-11-15
 * Time: 上午9:47
 */

namespace app\admin\controller;


use think\Controller;

class Category extends Controller
{
    public function add(){

        return $this->fetch();
    }

    public function index(){

        return $this->fetch();
    }

    //分类的保存

    public function save(){

        $data  = input('post.');

        $validate = validate('Category');

        if(!$validate->check($data)){
            $this->error($validate->getError());
        }

    }


}