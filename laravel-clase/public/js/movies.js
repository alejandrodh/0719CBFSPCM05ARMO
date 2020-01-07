fetch("http://localhost:8000/api/movies")
  .then(function(respuesta){
    return respuesta.json();
  })
  .then(function(datos){
    console.log(datos);
    var peliculas = document.querySelectorAll(".peliculas li");
    console.log(peliculas.length);
    
  })
