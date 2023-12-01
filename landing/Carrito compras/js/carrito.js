/** Archivo que contiene la creación de las tarjetas de presentación para la página del carrito. Junto con los métodos que complementan a la página del carrito */

/** Variables que se usarán en las funciones */
const contenedorProductos = document.getElementById("contenedor-productos");
const unidadesE = document.getElementById("existencias");
const precioE = document.getElementById("precio");
const carritoVoid = document.getElementById("carrito-empty");
const todosE = document.getElementById("totales");
const tusP = document.getElementById("carrito-full");

/** Función que crea las tarjetas para cada articulo que el usuario haya añadido al carrito .
 * Igualmente en esta función se añade el comportamiento del carrito cuando se le suma un artículo, o en su caso, se resta.
*/
function crearPresentacionArticulos(){
    contenedorProductos.innerHTML = "";
    const productos = JSON.parse(localStorage.getItem("articulos"));
    if(productos && productos.length > 0){
        console.log(productos);
        productos.forEach(producto =>{
            const nuevoArticulo = document.createElement("div");
            nuevoArticulo.classList = "tarjeta-articulo";
            contenedorProductos.appendChild(nuevoArticulo);
            nuevoArticulo.innerHTML = `
            <img class="imagen-carrito"src=${producto.img}>
            <h3 class="producto-carrito">${producto.item}</h3>
            <h2 class="precio-carrito">$${producto.precio}<h2>
            <div class="div-botones">
                <button id="cantidadmi">&nbsp;-&nbsp;</button>
                <button id="cantidadm">+</button>
                <span class = "contadorcantidad">${producto.cantidad}</span>
            </div>
            `;
            contenedorProductos.appendChild(nuevoArticulo);
            nuevoArticulo
                .getElementsByTagName("button")[1]
                .addEventListener("click", (e) => {
                    const cuentaElementos = e.target.parentElement.getElementsByTagName("span")[0];
                    cuentaElementos.innerText = aniadirAlCarro(producto);
                    actualizarContadorCarro();
                    actualizarTotal();
                    comprobarCarroV();
                });
            nuevoArticulo
                .getElementsByTagName("button")[0]
                .addEventListener("click", (e) =>{
                    eliminarElemCarrito(producto);
                    crearPresentacionArticulos();
                    actualizarContadorCarro();
                    actualizarTotal();
                    comprobarCarroV();
                });
        });
    }
}

/** Funciones que se ejecutan al cargar la página */
crearPresentacionArticulos();
actualizarTotal();

/** Función que actualiza el precio total, junto con el número de artículos presentes en el carrito */
function actualizarTotal(){
    const productos = JSON.parse(localStorage.getItem("articulos"));
    let unity = 0;
    let precio = 0;
    if(productos && productos.length>0){
        productos.forEach(producto =>{
            unity += producto.cantidad;
            precio += producto.precio * producto.cantidad;
        })
        unidadesE.innerText = unity;
        precioE.innerText = precio;
    }
}

/** Función que comprueba si el carrito esta vacia o no. Esto para mostrar ciertos elementos dependiendo el estado del carrito */
function comprobarCarroV(){
    const productos = JSON.parse(localStorage.getItem("articulos"));
    carritoVoid.classList.toggle("escondido",productos && productos.length>0);
    todosE.classList.toggle("escondido",!(productos && productos.length>0));
    tusP.classList.toggle("escondido",!(productos && productos.length>0));
}

/** Se ejecuta la función anterior */
comprobarCarroV();

