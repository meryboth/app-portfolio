/* function newForm(){
    var form = document.getElementById("newForm");
    var formExistente = document.getElementById("form");
    form.innerHTML = formExistente.innerHTML;
} */

var tags;
function load(){
  tags = getElementsByTagName("section");
}

function test(){
  var elemento = document.createElement("section");
  elemento.setAttribute("class", "w-50 container");
  var formExistente = document.getElementById("form");
  elemento.innerHTML = formExistente.innerHTML;
document.getElementById("caja").appendChild(elemento);
load();
}
