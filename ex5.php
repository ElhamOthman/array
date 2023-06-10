<?php

function prime_num ($num){
    if  ($num == 1 ){
    return 0;
    }
    for ($i = 2 ; $i <= $num/2 ; $i++){
        if ($num % $i == 0){
            return false;
        }
            return true ; 
        }
    }
    echo prime_num(11);
    


?>