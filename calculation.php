<?php
if(isset($_POST)&& !empty($_POST)){
    $x=$_POST["Num_1"];
    $y=$_POST["Num_2"];
    $ch=$_POST["option"];
}
if($ch=="Add") {
    echo $x + $y;
}else if($ch=="Subtract"){
    echo $x-$y;
}else if($ch=="Multiply"){
    echo $x*$y;
}else if($ch=="Division"){
    echo $x/$y;
}else if($ch=="Maximum"){
    if ($x>$y) {
        echo $x;
    }
    else{
        echo $y;
    }
}else if($ch=="Minimum"){
    if ($x<$y) {
        echo $x;
    }
    else{
        echo $y;
    }
}else{

    $total= 1;
    for($i=1;$i<=$y;$i++)
    {
        $total=$total*$x;
    }
    echo $total;
}
?>