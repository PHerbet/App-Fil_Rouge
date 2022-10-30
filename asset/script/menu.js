// on récupère l'action de clique sur le bouton du mennu
const button_menu = document.querySelector('#button_menu');
// on récupère la classe à changer dans une constante
const menu = document.querySelector('.hide_menu');

//on écoute l'évènement du clique
button_menu.addEventListener('click', function(event)
    {// if else qui permet de changer le display du mene de block a none
        if(menu.style.display == "block")
            {
                menu.style.display = "none";
            }
        else
            {
                menu.style.display = "block";
            };
    });