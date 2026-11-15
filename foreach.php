<?php
$rryfrutas = [
    1 => 'Banana',
    2 => 'Morango',
    3 => 'Uva',
    4 => 'Abacaxi',
    5 => 'Laranja',
    6 => 'Maçã'
]; // array associativo, onde cada elemento possui uma chave (1, 2, 3...) e um valor correspondente (Banana, Morango...).
foreach ($rryfrutas as $chave => $valor) { // percorre cada elemento do array, atribuindo a chave à variável $chave e o valor à variável $valor.
    echo "<li>A fruta do número $chave é: $valor <br></li>"; // exibe a chave e o valor correspondente.
}
