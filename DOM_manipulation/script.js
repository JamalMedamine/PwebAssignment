var p = document.querySelector('p');
var div = document.querySelector('div');
p.innerHTML="ce texte est modifié par JavaScript";
div.style.color = "lightblue";
div.style.textAlign = "center";

div.addEventListener('click', function(){
    p.innerHTML = "un clic a été effectué";
})