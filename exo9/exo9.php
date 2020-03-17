<?php
    $x=rand(0,5);
    echo " x= $x";
    echo "<br>";
    exo9($x);


    function exo9($x){
        switch($x){
            case 1:
                echo "AAAA";
            break;
            case 2:
                echo "BBBB";
            break;
            case 3:
                echo "CCCC";
            break;
            case 4:
                echo "DDDD";
            break;
            default:
                echo "JE SUIS UNE PERUCHE";
        }
    }
?>