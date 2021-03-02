<?php

function validaCPF(int $CPF)
{
    $digits = str_split($CPF);
    $i = 10;
    $j = 0;
    $sum = 0;
    $digitInt = array();

    while ($i >= 2) {
        $sum += $digits[$j] * $i;
        $j += 1;
        $i -= 1;
    }

    $verif1 = 11 - $sum % 11;
    if ($verif1 >= 10){
        $verif1 = 0;
    }

    if ($digits[9] != $verif1){
        echo 'CPF Inválido';
    } else {
        $i = 11;
        $j = 0;
        $sum = 0;
        while ($i >= 2) {
            $sum += $digits[$j] * $i;
            $j += 1;
            $i -= 1;
        }
        $verif2 = 11 - $sum % 11;
        if ($verif2 >= 10){
            $verif2 = 0;
        }
        if ($digits[10] != $verif2){
            echo 'CPF Inválido';
        } else {
            echo 'CPF Válido';
        }

    }
}
