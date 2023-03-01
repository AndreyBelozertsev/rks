<?php

use Support\Flash\Flash;


if(!function_exists('flash')){
    function flash(): Support\Flash\Flash
    {
        return app(Flash::class);
    }
}

if(!function_exists('getImages')){
    function getImages($value){

        if (is_array($value)) {
        
            if (count($value) && @$value[0] && is_object($value[0])) {
                $value = json_decode(json_encode($value), true);
            }
            $return = $value;
        } elseif (is_string($value) && is_array($json_decoded = json_decode($value, true))) {
            $return = $json_decoded;
        } else {
            $return = [];
        }

        return $return;
    }
}