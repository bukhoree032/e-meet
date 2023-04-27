<?php

if(!function_exists('__S_CUSTOMER_GROUP')){
    function __S_CUSTOMER_GROUP(){
        $data = [
            "0" => "ลูกค้ารายย่อย", 
            "1" => "บุคคลทั่วไป",
            "2" => "โรงแรม",
            "3" => "สถาบันการศึกษา",
            "4" => "ร้านอาหาร",
            "5" => "บริษัท/ห้างร้าน",
            "6" => "หน่วยงานราชการ"
        ];
        return $data;
    }
}

if(!function_exists('__S_LOCATION_AFFECT_SALE')){
    function __S_LOCATION_AFFECT_SALE(){
        $data = [
            "0" => "ไม่มี", 
            "1" => "มีน้อย",
            "2" => "มีปานกลาง",
            "3" => "มีมาก"
        ];
        return $data;
    }
}

if(!function_exists('__S_COMPETE')){
    function __S_COMPETE(){
        $data = [
            "0" => "ไม่มี", 
            "1" => "มีน้อย",
            "2" => "มีปานกลาง",
            "3" => "มีมาก"
        ];
        return $data;
    }
}

if(!function_exists('__S_SEND')){
    function __S_SEND(){
        $data = [
            "0" => "รถยนต์", 
            "1" => "รถไฟ"
        ];
        return $data;
    }
}

if(!function_exists('__S_SELL')){
    function __S_SELL(){
        $data = [
            "0" => "ขายหน้าร้านโดยตรง", 
            "1" => "ลูกค้าโทรศัพท์สั่งซื้อ",
            "2" => "ขายออนไลน์",
            "3" => "ทั้ง 3 วิธี"
        ];
        return $data;
    }
}

if(!function_exists('__S_CONDITION_SELL')){
    function __S_CONDITION_SELL(){
        $data = [
            "0" => "ขายเงินสด", 
            "1" => "ขายเงินเชื่อ",
            "2" => "ทั้งขายเงินสดและขายเงินเชื่อ"
        ];
        return $data;
    }
}

if(!function_exists('__S_CUSTOMER_PAYS')){
    function __S_CUSTOMER_PAYS(){
        $data = [
            "0" => "ขายเงินสด", 
            "1" => "ขายเงินเชื่อ",
            "2" => "ทั้งขายเงินสดและขายเงินเชื่อ"
        ];
        return $data;
    }
}

if(!function_exists('__S_PROMOTION')){
    function __S_PROMOTION(){
        $data = [
            "0" => "ไม่มี", 
            "1" => "มีการให้ส่วนลด",
            "2" => "มีการแถม",
            "3" => "Social Media"
        ];
        return $data;
    }
}

if(!function_exists('__S_LABOR')){
    function __S_LABOR(){
        $data = [
            "0" => "1-3 คน", 
            "1" => "4-6 คน",
            "2" => "7 คนขึ้นไป"
        ];
        return $data;
    }
}

if(!function_exists('__')){
    function __(){
        $data = [
            "0" => "ไม่มี", 
            "1" => "มีน้อย",
            "2" => "มีปานกลาง",
            "3" => "มีมาก"
        ];
        return $data;
    }
}