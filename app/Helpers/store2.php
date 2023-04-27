<?php

if(!function_exists('__')){
    function __explode_real($data, $check){
        $data = explode($check, $data);
        return $data;
    }
}