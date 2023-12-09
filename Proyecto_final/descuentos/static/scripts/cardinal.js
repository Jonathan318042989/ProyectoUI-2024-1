/** Archivo que crea las tarjetas de presentación de los artículos existentes. Esto en la página principal */

/** Variable que almacena el contenedor de los artículos */
const contenedorProductos = document.getElementById("contenedor-productos");
/** Función que crea las tarjetas de presentación de los artículos existentes. (Archivo articulo.js) */
function crearPresentacionArticulos(productos){
    productos.forEach(producto =>{
        const nuevoArticulo = document.createElement("table");
        nuevoArticulo.classList = "tarjeta-articulo" ;
        nuevoArticulo.innerHTML = `
        <tr id= "headeD">
            <th>Nombre del artículo</th>
            <th> ID </th>
            <th> Imágen </th>
            <th> Tipo </th>
            <th> Precio Orig</th>
            <th> Precio Desc</th>
        </tr>
        <tr id="subheaderD">
            <td> ${producto.item} </td>
            <td> ${producto.id} </td>
            <td> <img class="card-img-top" src=${producto.img}> </td>
            <td> ${producto.tipo} </td>
            <td> ${producto.precio}</td>
            <td> ${producto.precioD} </td>
        </tr>
        `
        contenedorProductos.appendChild(nuevoArticulo);
    });
}
/** Se ejecuta la función al cargar la página */
crearPresentacionArticulos(articulos);



const boton1 = document.getElementById("10");
const boton2 = document.getElementById("20");
const boton3 = document.getElementById("30");
const boton4 = document.getElementById("40");
const boton5 = document.getElementById("50");

boton1.addEventListener("click", descuentosApi());

function setprecioDesc(valor){
    precioD = valor;
}

function descuentosApi(param){
    if(param === 10){
        descontar(param, articulos);
        console.log("10% de descuento aplicado");
    } else if(param === 20){
        descontar(param, articulos);
        console.log("20% de descuento aplicado");
    } else if(param === 30){
        descontar(param, articulos);
        console.log("30% de descuento aplicado");
    } else if(param === 40){
        descontar(param, articulos);
        console.log("40% de descuento aplicado");
    } else if(param === 50){
        descontar(param, articulos);
        console.log("50% de descuento aplicado");
    } else {
        console.log("No se ha aplicado ningun desucento");
    }
}

function editaTabla(productos){
    const tablas = contenedorProductos.children;
    for(var i = 0; i< tablas.length; i++){
        var producto = tablas[i];

    }
}

var guardable = 0;
function descontar(param, productos){
    var i = 0;
    productos.forEach(producto => {
        console.log("Articulo " + i);
        i = i + 1;
        guardable = producto.precio / 100;
        guardable = guardable * param;
        console.log("Total a descontar: " + guardable);
        guardable = producto.precio - guardable;
        producto.precioD = guardable
        setprecioDesc(guardable);
        console.log("Precio con descuento del " + param + "%: " + producto.precioD)
    })
    contenedorProductos.innerHTML = '';
    crearPresentacionArticulos(productos);
}

