const btnRegistro = document.getElementById('btnRegistro');


btnRegistro.addEventListener('click', function() {
    // Redirigir a la página de registro al hacer clic
    window.location.href = 'registro/registro.html';
});

/*
document.getElementById("btnInicio").addEventListener("click", function() {
    // Redirigir a la página de home.html
    window.location.href = "../../home.html";
});*/

document.getElementById("btnRegistro").addEventListener("click", function() {
    // Redirigir a la página de home.html
    window.location.href = "./home.html";
});