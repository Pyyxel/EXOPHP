<?php

$a=$_POST['A'];
$b=$_POST['B'];
$res=addition($a,$b);
echo "la somme est : $res";

function addition($a,$b){
    return $a+$b;
}
?>