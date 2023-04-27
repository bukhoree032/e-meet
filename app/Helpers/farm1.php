<?php

if(!function_exists('__FA_CUSTOMER_GROUP')){
    function __FA_CUSTOMER_GROUP(){
        $data = [
            "0" => "แม่ค้ารายย่อยในพื้นที่", 
            "1" => "ร้านขายดอกไม้รายย่อยในจังหวัด",
            "2" => "ร้านขายดอกไม้รายใหญ่ในจังหวัด",
            "3" => "ไม่มี",
            "4" => "อื่นๆ"
        ];
        return $data;
    }
}

if(!function_exists('__FA_PROBLEM_PLANT')){
    function __FA_PROBLEM_PLANT(){
        $data = [
            "0" => "ด้านโรคระบาด", 
            "1" => "ด้านปัจจัยการผลิต",
            "2" => "ด้านการขนส่งการผลิต",
            "3" => "ด้านการแข่งขันกับตลาดภายนอก",
            "4" => "ด้านราคา",
            "5" => "ไม่มี",
            "6" => "อื่นๆ"
        ];
        return $data;
    }
}

if(!function_exists('__FA_SEND')){
    function __FA_SEND(){
        $data = [
            "0" => "รถยนต์", 
            "1" => "รถไฟ",
            "2" => "อื่นๆ"
        ];
        return $data;
    }
}

if(!function_exists('__FA_SELL')){
    function __FA_SELL(){
        $data = [
            "0" => "ขายหน้าร้านโดยตรง", 
            "1" => "ลูกค้าโทรศัพท์สั่งซื้อ",
            "2" => "ขายออนไลน์",
            "3" => "ไม่มี",
            "4" => "อื่นๆ"
        ];
        return $data;
    }
}

if(!function_exists('__FA_LABOR')){
    function __FA_LABOR(){
        $data = [
            "0" => "1-5 คน", 
            "1" => "6-10 คน",
            "2" => "10 คนขึ้นไป"
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
            "3" => "การหีบห่อในการขนส่ง",
            "4" => "อื่นๆ"
        ];
        return $data;
    }
}