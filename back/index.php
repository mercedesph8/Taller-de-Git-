<html>
<!-- Renderizar significa mostrar al cliente -->
<h1>Taller inicio de php</h1>

<br></br>

<hr>
<?php
//En php se puede escribir html, que se lanza y renderiza en el cliente.
//El archivo php va a servidor de aplicaciones. 
echo "Bienvenido al taller de php";
echo "<br></br>";
echo $today = date("d.m.y");
?>
</hr>

<br></br>
<?php
echo "Sesión 1";
?>
<br></br>

<?php
//Las variables en php se declara con el simbolo $ delante.
$x=5;
$y=6;
$resultado=$x+$y;
echo "La suma de $x + $y es $resultado";
?>
<br></br>
<?php
define("PI",3.141516);
echo PI;

//Array indexado (aleatoriamente cuyo indice empieza en 0)
$frutas=["limón", "pera"];

//Array asociativo(clave-valor/key-value)
$personas=["nombre"=> "Juan", "edad"=>30];

class Persona{
    public $nombre;
    public $edad;
}

$oNombre=new Persona();
$oNombre->nombre="Juan";
$oNombre->edad=30;
echo "<br></br>";
//Para pintar el objeto entero por pantalla
var_dump($oNombre);

//echo $oNombre;

?>
</html>
