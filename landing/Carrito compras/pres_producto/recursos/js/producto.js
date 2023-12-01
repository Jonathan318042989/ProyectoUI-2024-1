var reseñaDiv = document.getElementById("reseñas-container");

updateStars();

/**
 * Colorea las estrellas de las reseñas para reflejar el puntaje
 */
function updateStars()
{ 
    var elements = document.querySelectorAll('.rating');
    elements.forEach(function(element) {
        let val = element.dataset.rating;
        let childs = element.querySelectorAll(".star-rating");
        if(val > 0.5 && childs[0] != null)
        {
            childs[0].style.color = "var(--color-rojo)";
        }
        if(val > 1.5 && childs[1] != null)
        {
            childs[1].style.color = "var(--color-rojo)";
        }
        if(val > 2.5 && childs[2] != null)
        {
            childs[2].style.color = "var(--color-rojo)";
        }
        if(val > 3.5 && childs[3] != null)
        {
            childs[3].style.color = "var(--color-rojo)";
        }
        if(val > 4.5 && childs[4] != null)
        {
            childs[4].style.color = "var(--color-rojo)";
        }
        let puntuacion = element.querySelector(".star-puntuacion")
        if(puntuacion != null)
        {
            puntuacion.innerHTML = "("+val+")";
        }
    });
}
/**
 * Carga mas reseñas en la página
 * @param {Number} val - numero de reseñas a cargar
 */
function loadMore(val)
{
    let i = (val || 3);
    for(let j = 0; j < i; j++)
    {    
        let autor = "fulano";
        let rating = Math.floor(Math.random() * 5);
        let text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut cursus mi ac quam semper condimentum. Donec ut euismod sapien. Integer eu mauris enim. Nulla suscipit volutpat magna quis placerat."
        let html = '<div class="reseña"><h2>'+autor+'</h2><div><p>'+text+'</p></div><div class="rating" data-rating="'+rating+'">'
        for(let i = 0; i < 5; i++)
        {
            html +='<label class="star-rating">★</label>';
        }
        html +='<label class="star-puntuacion"></label></div></div>';
        reseñaDiv.insertAdjacentHTML("beforeend", html);
    }

    updateStars();
}