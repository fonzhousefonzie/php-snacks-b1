<?php 
    $arr = [];
    for ($i = 0; $i < 15; $i++){
        $num = rand(0, 100);
        if(in_array($num, $arr)){
            $i = $i - 1;
        } else {
            $arr[$i] = $num;
        }
    }

    var_dump($arr);
?>