var titulo = document.querySelector("h1");
titulo.innerText = "Contenido modificado por js.";

var lista = document.querySelector(".lista");
lista.innerHTML += '<li> Elemento nuevo por js </li>';

var boton = document.querySelector(".cambiar")

boton.onclick = function(){
  lista.style.color = "red";
   setTimeout(alerta, 3000);
  console.log("cambié el color");
}
boton.onmouseover = function(){
  lista.style.color = "green";
  console.log("cambié el color");
}

// boton.addEventListener('click', function(){
//     lista.style.color = "red";
//     console.log("cambié el color");
// });

// function alerta(){
//     alert("hola");
// }
var liAutomatico = setInterval(nuevoLi, 3000);
var contador = 0;

function nuevoLi(){
  lista.innerHTML += '<li> Elemento nuevo por js </li>';
  contador++;

  // if(contador == 3){
  //   clearInterval(liAutomatico);
  //   console.log("Llegué a " + contador);
  // }
}

window.onclick = function(){
    clearInterval(liAutomatico);
    console.log("paré");
}











///
