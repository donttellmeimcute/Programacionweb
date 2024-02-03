<?php
function generarNumeroAleatorio($semilla, $iteraciones) {
    $numerosAleatorios = [];
    $longitudSemilla = strlen((string)$semilla);

    for ($i = 0; $i < $iteraciones; $i++) {
        $cuadrado = pow($semilla, 2);
        $cuadradoStr = strval($cuadrado);

        while (strlen($cuadradoStr) < 2 * $longitudSemilla) {
            $cuadradoStr = '0' . $cuadradoStr;
        }

        $numeroAleatorio = (int)substr($cuadradoStr, $longitudSemilla / 2, $longitudSemilla);
        $semilla = $numeroAleatorio;

        $numerosAleatorios[] = $numeroAleatorio;
    }

    return $numerosAleatorios;
}
$semillaInicial = 123; 
$numIteraciones = 5;   
$resultados = generarNumeroAleatorio($semillaInicial, $numIteraciones);
foreach ($resultados as $indice => $valor) {
    echo "Iteración " . ($indice + 1) . ": " . $valor . "\n";
}

?>
