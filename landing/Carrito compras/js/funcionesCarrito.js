/** Archivo que contiene los métodos importantes de lo que hace un carrito de compras */

/** Función que añade elementos al carrito. Igual devuelve un número. */
function aniadirAlCarro(producto){
    const memoria = JSON.parse(localStorage.getItem("articulos"));
    console.log(memoria);
    let counter = 0;
    if(!memoria){
        const nuevoProd = productoAMemoria(producto)
        localStorage.setItem("articulos", JSON.stringify([nuevoProd]));
        counter = 1;
    } else{
        const indiceProd = memoria.findIndex(articulo => articulo.id === producto.id);
        console.log(indiceProd);
        const nuevaMemory = memoria;
        if(indiceProd === -1){
            nuevaMemory.push(productoAMemoria(producto));
            counter = 1;
        } else{
            nuevaMemory[indiceProd].cantidad ++;
            counter = nuevaMemory[indiceProd].cantidad;
        }
        localStorage.setItem("articulos", JSON.stringify(nuevaMemory));
        actualizarContadorCarro();
        return counter;
    }
}

/** Función que permite mandar los artículos a la memoria de manera más facil */
function productoAMemoria(producto){
    const nuevoProduct = producto;
    nuevoProduct.cantidad = 1;
    return nuevoProduct;

}



/** Variable del contador del carrito */
const contadorCarritoE = document.getElementById("contadorcarrito");
/** Función que actualiza el contador del carrito */
function actualizarContadorCarro(){
    const memoria = JSON.parse(localStorage.getItem("articulos"));
    const contador = memoria.reduce((acum, current) => acum+current.cantidad, 0);
    contadorCarritoE.innerText = contador;
}

/** Función que elimina elementos del carrito */
function eliminarElemCarrito(producto){
    const memoria = JSON.parse(localStorage.getItem("articulos"));
    const indiceProd = memoria.findIndex(articulo => articulo.id === producto.id);
    if(memoria[indiceProd].cantidad === 1){
        memoria.splice(indiceProd, 1);
        localStorage.setItem("articulos", JSON.stringify(memoria));
    }else{
        memoria[indiceProd].cantidad--;
    }
    localStorage.setItem("articulos", JSON.stringify(memoria));

}

/** Se ejecuta esta función al cargar la página */
actualizarContadorCarro();