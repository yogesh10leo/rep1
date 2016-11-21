<?php

    $x=2;
    $y=4;
    $ch=3;

    //3 mul // 4 div // 5 max // 6 min // 7 power

    if($ch==1) {
        echo $x + $y;
    }else if($ch==2){
        echo $x-$y;
    }else if($ch==3){
        echo $x*$y;
    }else if($ch==4){
        echo $x/$y;
    }else if($ch==5){
        if ($x>$y){
            echo $x;
        else
        echo $y;
        }
    }else if($ch==6){
        if ($x<$y){
            echo $x;
        else
            echo $y;
        }
    }else if($ch=7){
        echo $x^$y;
    }
?>