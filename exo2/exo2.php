<?php
    $a=$_POST['A'];
    $b=$_POST['B'];
    
    if($a > $b){
      echo "$b est plus petit que $a";
    }else if($a == $b){
      echo "les 2 nombres sont égaux";
    }else{
      echo "$a est plus petit que $b";
    }


 ?>