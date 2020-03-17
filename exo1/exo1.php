<?php
    $a=$_POST['A'];
    $b=$_POST['B'];
    
    if($a > $b){
      echo " $a est plus grand que $b ";
    }else if($a == $b){
      echo "les 2 nombres sont égaux";
    }else{
      echo " $b est plus grand $a ";
    }


 ?>
