<?php
/*
Crea un archivo PHP que haga lo siguiente:
○ Define variables de distintos tipos: un entero, un flotante, una cadena y un
booleano. Luego imprime el valor y tipo de cada variable utilizando la función
var_dump().
○ Crea un array asociativo que contenga información de una persona (nombre,
edad, ciudad).
○ Define una constante llamada NOMBRE_CURSO con el valor "Programación
PHP" y muestra su valor en pantalla.
○ Crea una función que reciba un array de números y devuelva la suma de
todos sus elementos. Llámala con un array de ejemplo y muestra el
resultado.
○ Declara una variable con el valor null y utiliza la función is_null() para
verificar si la variable tiene valor null.
*/
$nombre="Marimer";
$edad=25;
$altura=1.66;
$soltero=true;

var_dump($nombre);
echo "<br></br>";
echo "<br></br>";

var_dump($nombre,$edad,$altura,$soltero);
echo "<br></br>";
echo "<br></br>";

var_dump($edad);
echo "<br></br>";
echo "<br></br>";

var_dump($altura);
echo "<br></br>";
echo "<br></br>";

var_dump($soltero);
echo "<br></br>";
echo "<br></br>";

$arrayPersona=["nombre"=> "Marimer","edad"=>"25","altura"=>"1.66", "ciudad"=>"Sevilla"];
var_dump($arrayPersona);

echo "<br></br>";
echo "<br></br>";

define ("NOMBRE_CURSO", "Taller PHP");
echo (NOMBRE_CURSO);
echo "<br></br>";
echo "<br></br>";
//Función is_null para comprobar si una variable es nula
$variableNull=Null;
if(is_null($variableNull)){
    echo "Tiene valor nulo";
}
echo "<br></br>";
echo "<br></br>";

//Crea una función que reciba un array de números y devuelva la suma de todos sus elementos.
$arrayNumeros=[1,2,3,4,5];

function sumaElementos($arrayNumeros){
    $sumaNumeros=0;
    for ($i = 0; $i < count ($arrayNumeros); $i++){
        $sumaNumeros += $arrayNumeros[$i];
    }
    return $sumaNumeros;
}

echo sumaElementos($arrayNumeros);

echo "<br></br>";

$a=5;
$b=5;

echo $a + $b;
echo "<br></br>";
echo $a - $b;
echo "<br></br>";
echo $a * $b;
echo "<br></br>";
echo $a / $b;
echo "<br></br>";
echo $a % $b;
echo "<br></br>";
echo $a ** $b;
echo "<br></br>";
echo $a==$b;
echo "<br></br>";

if($a==$b){
    echo "es igual";
}else{
    echo "no es igual";
};

echo "<br></br>";

$esMayordeEdad= ($b>18) ? true : false;
echo $esMayordeEdad;
var_dump($esMayordeEdad);

/*
Crea un archivo PHP que:
    - Utilice una estructura condicional if-else para verificar si un número es
positivo, negativo o cero.
    - Utilice un bucle for para imprimir los números del 1 al 10.
     Crea un archivo PHP que:
Utilice una estructura condicional if-else para verificar si un número es
positivo, negativo o cero.
Utilice un bucle for para imprimir los números del 1 al 10.
*/
?>

