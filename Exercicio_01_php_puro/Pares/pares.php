<?php

$numero1 = 1;
$numero2 = 100;
$pares = 0;

    for ($i = $numero1; $i <= $numero2; $i++) {
        if( $i % 2 == 0) {
            echo $i . ", ";
        }
    }