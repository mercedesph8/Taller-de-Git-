//Permite crear comentarios
/*
document.writeln("Hola Mi Genteeeé")

document.getElementById("mensaje").innerText = "Este es mi mensaje 1";
document.getElementById("mensaje2").innerText = "Este es mi mensaje 2";
document.getElementById("mensaje3").innerText = "Este es mi mensaje 3";

const FECHA = new Date();
document.getElementById("fecha").innerText = FECHA.toLocaleDateString();

function Saludo() {
    alert("Hola MariMer, que te cuentas ")
}

function Adios() {
    alert("Vete a tomar cerveza, Agurrrrrr")
}

//Saludo();
//Adios();

var num1=2;
var num2=2;
var resultado= num1 + num2;
document.getElementById("resultado").innerText=resultado;

if(resultado < 5){
    document.getElementById("resultado").innerText="El resultado es menor a 5";
}else{
    document.getElementById("resultado").innerText="El resultado es mayor a 5";
}
*/

let nombre="Mercedes";
let apellido="Peña";
var apellido2="Herrera";
const PI=1.14;

console.log(nombre);
console.log(apellido);
console.log(PI);
console.log(apellido2);

let saludo='Bienvenido ' + nombre;
console.log(saludo);

//Otra forma
console.log(`Bienvenido ${nombre}`);

let edad=25;
let decimal=-1.55;

let activo=true;
let noActivo=false;

milog(activo);

let frutas=["manzana",'kiwis',"melones","sandias"];
console.log(frutas);

console.log(frutas[0]);
console.log(frutas[1]);
console.log(frutas[2]);

let alumnos={ //VARIABLE COMPLEJA ENCAPSULADA (POR ESO PUEDO TENER EL MISMO NOMBRE EN LAS VARIABLES, NO SE PISAN)
    nombre:"Mercedes", apellidos:"Peña Herrera", profesion:"Desarrollador web"
}

console.log(alumnos.apellidos);

saludar2();
//saludar(nombre);

document.writeln("Hola mundo");//PINTA COMO SI FUERA ECHO EN PHP
document.getElementById("mensaje");

