<?php

if(!function_exists('__VOLUME')){
    function __VOLUME(){
        $data = [
            "0" => "ช่อ", 
            "1" => "ดอก",
            "2" => "กิโล"
        ];
        return $data;
    }
}

if(!function_exists('__FA_REMAINING_CAUSE')){
    function __FA_REMAINING_CAUSE(){
        $data = [
            "0" => "จัดเก็บไม่ดี", 
            "1" => "ขายปริมาณมากเกินไป",
            "2" => "คุณภาพดอกไม้ไม่ดี ขายไม่ได้",
            "3" => "การหีบห่อในการขนส่ง"
        ];
        return $data;
    }
}