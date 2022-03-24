var images = document.querySelectorAll(".parallax");

window.onscroll = function () {
  images.forEach(function (img) {
    var ralenti = 1; //valeur defini par défaut

    if (img.hasAttribute("data-ralenti")) {
      ralenti = img.getAttribute("data-ralenti");
    }

    var position_conteneur = img.parentNode.offsetTop;

    var margin_top = (window.scrollY - position_conteneur) / ralenti;

    img.style.marginTop = margin_top + "px";
  });
};

var pages = document.querySelectorAll(".page");
var voiles = document.querySelectorAll(".voile");
var projets = document.querySelectorAll(".w_project");
const ancien_click = [];
var cmpt = 0;

function defiler_vers_panneau(p) {
  var Duree_du_scroll = 500;

  $("html , body").animate({ scrollTop: p.offsetTop }, Duree_du_scroll);
}


pages.forEach(function (le_bouton, indice){
  le_bouton.onclick = function () {
    ancien_click.push(indice);
    defiler_vers_panneau(voiles[indice].parentNode);
    voiles[indice].style.display = "flex";
    if(ancien_click[cmpt] != indice){
      cmpt++;
      var ancien = ancien_click[cmpt - 1];
      voiles[ancien].style.display = "none";
    }
  }


});


