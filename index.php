<?php
function imprimirDiasEntreDatas($dataInicial, $dataFinal) {
    $inicio = new DateTime($dataInicial);
    $fim = new DateTime($dataFinal);

    $inicio->add(new DateInterval('P1D'));

    while ($inicio < $fim) {
        echo $inicio->format('d/m/Y') . "<br>";
        $inicio->add(new DateInterval('P1D'));
    }
}

$dataInicial = '01-03-2024';
$dataFinal = '05-04-2024';
imprimirDiasEntreDatas($dataInicial, $dataFinal);
