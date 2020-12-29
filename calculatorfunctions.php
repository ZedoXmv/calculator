<?php 
    function add($value1,$value2){
        return $value1 + $value2;
    }
    function sub($value1,$value2){
        return $value1 - $value2;
    }
    function divide($value1,$value2){
        if ($value2 == 0) {
            return 0;
        }
        return $value1/$value2;
    }
    function multiply($value1,$value2){
        return $value1 * $value2;
    }
    function percent($amount ,$percent){
        return ($amount/100)*$percent;      
    }
    function square($value1){
        return $value1*$value1;
    }
    function volume($length,$width,$height){
        return $length * $width * $height;
    }
    function area($length,$width){
        return $length * $width;
    }
    




?>