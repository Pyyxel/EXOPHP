<?php

$a=$_POST['A'];
$b=$_POST['B'];


echo "a = $a";
echo "<br>";
echo "b = $b";

$c=$a;
$a=$b;
$b=$c;
echo "<br>";
echo "a = $a";
echo "<br>";
echo "b = $b";
?>