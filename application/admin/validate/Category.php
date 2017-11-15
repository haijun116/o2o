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
        ['name','require|max:10','分类必须传递|分类字符不能超过10个字符']
    ];
}