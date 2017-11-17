<?php

function show($status,$code,$data=[]){

    return [
        'status' =>intval($status),
        'code' =>$code,
        'data' =>$data
    ];
}