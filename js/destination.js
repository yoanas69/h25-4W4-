/**
 *  Script js permettant d'extraite des destinations de voyage
 */
(function(){
    console.log("destination.js")
    const categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
    const domaine = window.location.href
    const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
    console.log(apiUrl)
    parcourir_bouton()

function parcourir_bouton(){
    const categorie__ul__li = document.querySelectorAll(".categorie__ul__li")
    console.log("categorie__ul__li.length = ", categorie__ul__li.length)
    categorie__ul__li.forEach(elm => {
        elm.addEventListener('mousedown', function(){
            console.log(elm.tagName)
            console.log("elm.dataset.category_id = " , elm.dataset.category_id)
        })
    })

}


    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            const destinationList = document.querySelector('.destination__list');
            data.forEach((article, index) => {
                const radioId = `bouton_radio_${index}`;  // Crée un id unique pour chaque radio
                const articleElement = document.createElement('div');
            
                articleElement.innerHTML = `
                    <div class="listToggle">
                        <h3>${article.title.rendered}</h3>
                        <div class="destination__toggle">
                            <label for="${radioId}">
                                <span class="pPoint"></span>
                                <span class="pPoint"></span>
                                <span class="pPoint"></span>
                            </label>
                        </div>
                    </div>
                    <input id="${radioId}" type="radio" class="bouton_radio">
                    <p class="arcActicle">${article.excerpt.rendered}</p>
                    <a href="${article.link}">Lire plus</a>
                `;
                destinationList .appendChild(articleElement);
            });
        })
        .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    })()