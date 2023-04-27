<?php

//ตัดข้อความ
if(!function_exists('__explode_real')){
    function __explode_real($request, $check){
        $data = explode($check, $request);//check ตัดอะไร เช่น ,หรือ วรรค //data ข้อมูลที่ต้องการตัด
        return $data;
    }
}
//ตัดข้อความให้สั้น
if(!function_exists('__substr')){
    function __substr($request, $check){
        $data = iconv_substr($request,0,$check,'UTF-8');//check ตัดจาก0ถึงอะไร //data ข้อมูลที่ต้องการตัด
        if($data != $request){
            $data = $data.'....';
        }
        return $data;
    }
}