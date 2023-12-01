/** Archivo que crea las tarjetas de presentación de los artículos existentes. Esto en la página principal */

/** Variable que almacena el contenedor de los artículos */
const contenedorProductos = document.getElementById("contenedor-productos");

/** Función que crea las tarjetas de presentación de los artículos existentes. (Archivo articulo.js) */
function crearPresentacionArticulos(productos){
    productos.forEach(producto =>{
        const nuevoArticulo = document.createElement("div");
        nuevoArticulo.classList.add("tarjeta-articulo", "card");        contenedorProductos.appendChild(nuevoArticulo);
        nuevoArticulo.innerHTML = `
        <img class="card-img-top" src=${producto.img}>
        <a class="title-negro"href="./pres_producto/producto.html">
            <h3 class="card-title">${producto.item}</h3>
        </a>
        <h2 class="price">$${producto.precio}<h2>
        <button class = "boton-anadir-carrito" type="submit" id="botonCarro"> Añadir al carrito </button>
        <img src="../images/clasificacion.png" class="estrellas"></img>
        `
        contenedorProductos.appendChild(nuevoArticulo);
        nuevoArticulo.getElementsByTagName("button")[0].addEventListener("click",()=> aniadirAlCarro(producto));
    });
}
/** Se ejecuta la función al cargar la página */
crearPresentacionArticulos(articulos);



/*** VAMOS A CREAR LAS ACCIONES DE LA PAGINA */
