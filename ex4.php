<?php


function fact_number($n){
    if ($n == 0){
        return 1;
    }
    else{
        return $n * fact_number($n - 1);
    }
 }
 echo fact_number(6);














?>