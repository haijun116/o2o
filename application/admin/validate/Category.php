<?php
/**
 * Created by PhpStorm.
 * User: lion
 * Date: 17-11-15
 * Time: 上午11:02
 */
namespace app\admin\validate;
use think\Validate;

class Category extends Validate
{
    protected $rule = [
        ['name','require|max:10','分类必须传递|分类字符不能超过10个字符'],
        ['parent_id','require|number','分类栏目必填|必须是数字'],
        ['id','number','id必须是整数'],
        ['listorder','number','排序必须是数字'],
    ];

    protected $scene = [
        'add'       => ['name','parent_id','id'],//添加
        'listorder' =>['id','listorder'],//排序
        'status'    =>['id','status']
    ];
}