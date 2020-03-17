<?php
    $table=[];
    $add=0;
    for($i=0;$i<10;$i++){
        $table[$i]=rand(0,100);
        $res=$table[$i];
        echo "$res";
        echo "<br>";
        $add=$add+$res;
    }
    echo "Le resultat est : $add";
?>