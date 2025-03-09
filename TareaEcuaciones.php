<head>
    <title>Tarea Expresiones</title>
</head>
<body>

<?php

$x = 2;
$y = 4;
$resultado_a = (1 / $x) + (($x + $y) / 3) + (2 * ($x / $y));

$x = 3;
$resultado_b = ((1/2) * $x + ((3 + $x) / 2) * (2 * ($x ** 2))) / ((2 + 3) * $x);

$x = 2;
$resultado_c = (sqrt((2 * $x) ** 2 + 3 ** 2) / 5) + sqrt($x ** 2);

$x = 2;

$numerador = ( (1/2) + (1/4) + (1/8) ) * pow($x, 1/3);
$denominador = (sqrt($x) / 2) + (3 * ($x ** 2) / 4);
$resultado_d = $numerador / $denominador;

$x = 4;
$numerador = pow($x, 2) / 2 + 1 / sqrt($x);
$denominador = 3 + 1 / 2 * pow($x, 3);
$resultado_e = sqrt($numerador / $denominador);

echo "<p><img src='ecua.jpg' width='300'>  Resultado a: $resultado_a </p>";
echo "<p><img src='ecub.jpg' width='250'>  Resultado b: $resultado_b </p>";
echo "<p><img src='ecuc.jpg' width='500'>  Resultado c: $resultado_c </p>";
echo "<p><img src='ecud.jpg' width='300'>  Resultado d: $resultado_d </p>";
echo "<p><img src='ecue.jpg' width='500'>  Resultado e: $resultado_e </p>";
?>

</body>
</html>

