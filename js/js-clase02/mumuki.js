window.addEventListener("load", function() {

  var series = prompt("Tus series");
  var seriesArray = series.split(",");
  var lista = document.querySelector("ul");
  var lis = "";

  for (var i = 0; i<seriesArray.length; i++){
    lis += '<li>'
    lis += seriesArray[i]
    lis += '</li>'
  }
  lista.innerHTML += li

  console.log(lista);


})
