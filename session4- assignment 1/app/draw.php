<?php

function rectangle(int $width, int $height,$fill=false){
    $symbol="*";
    for($i=0; $i<$height;$i++){
        echo $symbol;
        for($j=0;$j<$width-2;$j++){
            if($fill){
                echo "*";
            }else{                
                if($i==0 || $i==($height-1))
                echo $symbol;
                else
                echo "#";
            }
        }
        if($width!=1)
            echo $symbol;
        echo "<br/>";
    }
}

