<?php 

function generaPsw($lunghezza){

    $chars = "abcdefghijklmnopqrstuvxywz";
    $nums = "0123456789";
    
    $chars .= strtoupper($chars);
    $chars .= $nums;
    $psw = "";


    for ($i = 0; $i < $lunghezza; $i++){

        $max = strlen($chars) - 1;
        $random_index = rand(0, $max);

        $char = $chars[$random_index];

        $psw .= $char;

    }

    return $psw;
}





?>