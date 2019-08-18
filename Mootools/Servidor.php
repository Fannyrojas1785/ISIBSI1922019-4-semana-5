<?php 
$valor1 = $_POST['T1']; 
$valor2 = $_POST['T2'];
$operacion =  $_POST['operacion'];

if ($operacion=='Suma') {
$resultado = $valor1+$valor2;
echo $resultado;
}
elseif ($operacion=='Resta') 
{
$resultado=$valor1-$valor2;
echo $resultado;
}

elseif ($operacion=='Multiplicacion') 
{
$resultado=$valor1*$valor2;
echo $resultado;
}

elseif ($operacion=='Division') 
{
$resultado=$valor1/$valor2;
echo $resultado;
}
?> 