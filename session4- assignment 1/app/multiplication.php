<?php


function multiply(int $number){
    for($i=1; $i<=10;$i++){
        echo $i ." * ". $number . " = " .($i * $number)."<br/>";
        
    }
}