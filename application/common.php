<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function status($status){

    if($status ==1){
        echo "<span class=''> 正常</span>";
    }elseif ($status==0){
        echo "<span class=''>待审核</span>";
    }else{
        echo "<span class=''>未通过</span>";
    }
}

/**
 * @param $url
 * @param $type 0 get  1 post
 * @param array $data
 */

function doCurl($url,$type=0,$data=[]){

    $ch = curl_init();

    //设置选项
    curl_setopt($ch,CURLOPT_URL,$url);//这是你想用PHP取回的URL地址

    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);//如果成功只将结果返回，不自动输出任何内容

    curl_setopt($ch,CURLOPT_HEADER,0);//如果你想把一个头包含在输出中，设置这个选项为一个非零值。

    if($type==1){
        //post
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
    }

    $output = curl_exec($ch);

    return $output;
}