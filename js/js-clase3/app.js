function stringBomb(unTexto) {
  var arrayConEspacios = unTexto.split(',');
  var arrayTrimeado = [];
  var arrayFinal =[];

  for (var i = 0; i<arrayConEspacios.length; i++){
    arrayTrimeado.push(arrayConEspacios[i].trim())
  } //Tengo un array con elementos sin espacios.

  for (var i = 0; i< arrayTrimeado.length; i++){
    if(arrayTrimeado[i].indexOf("ñ") > -1){
      arrayTrimeado[i].replace("ñ", "n");
    };

  }

  return arrayFinal.toString();

}

var texto = "Dario,Alejandro, Dan, Joe, Javier , Carolina, Camila , Santiago, Añelo"
console.log(stringBomb(texto))
