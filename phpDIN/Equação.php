<?php
$entrada = $_POST;


function delta($num1, $num2, $num3){

  $resultado = ($num2 * $num2) - 4 * ($num1) * ($num3);

   return $resultado;

}
$resultados = array();
$resultados["delta"] = delta($entrada["Entrada1"], $entrada["Entrada2"], $entrada["Entrada3"]);

function x1($num1, $num2, $num3){

  $resultadox1 = ((- $num2) + sqrt($num3))/ 2 * $num1;

   return $resultadox1;

}
function x2($num1, $num2, $num3){

  $resultadox2 = ((- $num2) - sqrt($num3))/ 2 * $num1;

   return $resultadox2;

}
echo "aqui será exibido o valor de delta depois o valor de x(x1 o resultado da equação ultilizando +,x2 o resultado da equação ultilizando -).";
$resultadosx = delta($entrada["Entrada1"], $entrada["Entrada2"], $entrada["Entrada3"]);
$resultados["x1"] = x1($entrada["Entrada1"], $entrada["Entrada2"], $resultadosx );
$resultados["x2"] = x2($entrada["Entrada1"], $entrada["Entrada2"], $resultadosx );
echo "<pre>";
var_dump($resultados);

 ?>
