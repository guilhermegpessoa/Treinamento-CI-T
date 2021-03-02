<?php

function mean(...$inputs)
{
    $mean = 0;
    foreach ($inputs as $input) {
        $mean += $input;
    }
    $mean = $mean / count($inputs);
    return $mean;
}

function temperature($celsius)
{
    $fahrenheit = $celsius * 1.8 + 32;
    return $fahrenheit;
}

function meters($meters)
{
    $cm = $meters * 100;
    return $cm;
}

function minMax(...$inputs)
{
    $min = min($inputs);
    $max = max($inputs);

    echo 'Maior número: ', $max, "<br />", 'Menor número: ', $min;
}

function dayOfTheWeek($day)
{
    switch ($day):
        case 1:
            echo 'Domingo';
            break;
        case 2:
            echo 'Segunda';
            break;
        case 3:
            echo 'Terça';
            break;
        case 4:
            echo 'Quarta';
            break;
        case 5:
            echo 'Quinta';
            break;
        case 6:
            echo 'Sexta';
            break;
        case 7:
            echo 'Sábado';
            break;
        default:
            echo 'Valor inválido';
            break;
    endswitch;
}

function isTriangle($a, $b, $c)
{
    if (!($a + $b > $c && $a + $c > $b && $b + $c > $a)) {
        echo 'Não é triângulo';
    } elseif ($a == $b && $b == $c) {
        echo 'Triângulo equilátero';
    } elseif ($a == $b || $b == $c || $a == $c) {
        echo 'Triângulo isósceles';
    } else {
        echo 'Triângulo escaleno';
    }

}

?>
