<?php


$strings = [
    'hello world',
    'welcome',
    'elham',
];
$max = '';
foreach ($strings as $string){
    if (strlen($string) > strlen ($max)){
        $max = $string ;
    }
}
echo $max ;







?>