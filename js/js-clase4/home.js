var urlRandom = "https://api.giphy.com/v1/gifs/random?api_key=PuhlljnIs04eW2ezoSHpJ6Fov6102e4T&tag=&rating=G";

fetch(urlRandom)
  .then(function(respuesta){
    return respuesta.json();
  })
  .then(function(datos){
    //En esta función va nuestro código.
    //console.log(datos)
    var imgRandom = document.querySelector(".random");
    imgRandom.src = datos.data.images.original.url;


  })
  .catch(function(error){
    console.log(error)
  })


urlTrending = "https://api.giphy.com/v1/gifs/trending?api_key=PuhlljnIs04eW2ezoSHpJ6Fov6102e4T&limit=5&rating=G"

fetch(urlTrending)
  .then(function(respuesta){
    return respuesta.json();
  })
  .then(function(datos){
    console.log(datos)
    var arrayGifs = datos.data;
    var lista = document.querySelector(".lista");
    var li = "";

    for (var i=0; i<arrayGifs.length; i++){
      li += "<li>"
      li +=   "<img src='"
      li +=     arrayGifs[i].images.original.url
      li +=   "'>"
      li += "</li>"

    }

    lista.innerHTML = li;


  })

function nuevoGifRandom(){
  var urlRandom = "https://api.giphy.com/v1/gifs/random?api_key=PuhlljnIs04eW2ezoSHpJ6Fov6102e4T&tag=&rating=G";

  fetch(urlRandom)
    .then(function(respuesta){
      return respuesta.json();
    })
    .then(function(datos){
      //En esta función va nuestro código.
      //console.log(datos)
      var imgRandom = document.querySelector(".random");
      imgRandom.src = datos.data.images.original.url;


    })
    .catch(function(error){
      console.log(error)
    })

}

var nuevoGif = document.querySelector(".nuevoGif");
nuevoGif.onclick = function(){
  nuevoGifRandom();
}













//
