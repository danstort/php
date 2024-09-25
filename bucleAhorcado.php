<?php
$entrada = trim(fgets(STDIN));

$palabra = str_split($entrada);
echo $palabra[2];

$contador= count($palabra)-1;



