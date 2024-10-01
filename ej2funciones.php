<?php

$entrada = explode(" ", trim(fgets(STDIN)));

$arrayNum=$entrada;
$arrayNum[5]=0;

if($arrayNum[5]==null){

    echo "bien";
} else 
echo "mal";

echo $arrayNum[5];
