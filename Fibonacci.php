<title>Numeros de Fibonacci</title>

<h1>Numeros de Fibonacci</h1>

<?php
$numero1 = 0;
$numero2 = 1;

$ultimo = 100000000000000000000000000000000000000000000000000000000000000000000000000;

echo $numero1 . "<br>";

while ($numero2 <= $ultimo) {
    echo $numero2 . "</br>"; 

    $siguiente = $numero1 + $numero2;

    $numero1 = $numero2;
    $numero2 = $siguiente;
}
?>
