let producto = {
    nombre:"Iphone 17 pro max",
    precio:1489,
    url: "https://www.galaxyandorra.com/39604-home_default/iphone-17-pro-max-1tb-azul-oscuro-precompra.jpg",
    stock:"20 disponibles",
    descripcion: "El iPhone 17 Pro Max combina rendimiento de élite, autonomía óptima y fotografía profesional en un diseño ultrarresistente de titanio.",
    color:"negro",
}

//Practica

let nombre=document.getElementById("nombre");
nombre.innerHTML=producto.nombre;

let precio=document.querySelector("#precio");
precio.innerHTML=producto.precio;

let stock=document.querySelector("#stock");
stock.innerHTML=producto.stock;

let descripcion=document.getElementById("descripcion");
descripcion.innerHTML=producto.descripcion;

let color=document.querySelector("#color");
color.innerHTML=producto.color;

let url=document.querySelector("#url");
url.src=producto.url;


