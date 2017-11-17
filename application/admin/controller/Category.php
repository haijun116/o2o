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
    private $info;
    public function _initialize()
    {
        $this->info = model("Category");
    }

    public function add(){

        $categorys = $this->info->getNormalFirstCategory();
        return $this->fetch('',[
            'categorys' =>$categorys
        ]);
    }

    public function index(){
        $pid = input('get.parent_id','0','intval');
        $categorys = $this->info->getFirstCategorys($pid);
        return $this->fetch('',[
            'categorys' =>$categorys
        ]);
    }
    //分类的保存

    public function save(){

        $data  = input('post.');

        $validate = validate('Category');

        if(!$validate->scene('add')-> check($data)){
            $this->error($validate->getError());
        }
        if(!empty($data['id'])){
            $this->update($data);
        }

        $res = $this->info->add($data);
        if($res){
            $this->success('添加成功');
        }else{
            $this->error('添加失败');
        }

    }
    //页面编辑

    public function edit($id=0){
        if(intval($id)<1){
            $this->error('参数不合法');
        }
        $category = $this->info->get($id);
        $categorys = $this->info->getFirstCategorys();
        return $this->fetch('',[
            'category' => $category,
            'categorys' =>$categorys
        ]);
    }

    //执行更新操作
    public function update($data){

       $res = $this->info->save($data,['id'=>intval($data['id'])]);

       if($res){
           $this->success('更新成功');
       }else{
           $this->error('更新失败');
       }
    }

    public function listorder($id,$listorder){

        $res = $this->info->save(['listorder'=>$listorder],['id'=>$id]);

        if($res){
            $this->result($_SERVER['HTTP_REFERER'],1,'success');
        }else{
            $this->result($_SERVER['HTTP_REFERER'],0,'error');
        }
    }

    //修改更新状态
    public function status(){
        $data = input('get.');
        $validate = validate('Category');

        if(!$validate->scene('status')-> check($data)){
            $this->error($validate->getError());
        }
        $res = $this->info->save(['status'=>$data['status']],['id'=>$data['id']]);
        if($res){
            $this->success('更新状态成功');
        }else{
            $this->error('更新状态失败');
        }
    }
}