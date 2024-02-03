function generarNumeroAleatorio(semilla, iteraciones) {
    var numerosAleatorios = [];
    var longitudSemilla = semilla.toString().length;
  
    for (var i = 0; i < iteraciones; i++) {
      var cuadrado = Math.pow(semilla, 2).toString();
  
      while (cuadrado.length < 2 * longitudSemilla) {
        cuadrado = '0' + cuadrado;
      }
  
      var numeroAleatorio = parseInt(cuadrado.substr(longitudSemilla / 2, longitudSemilla), 10);
      semilla = numeroAleatorio;
  
      numerosAleatorios.push(numeroAleatorio);
    }
  
    return numerosAleatorios;
  }
  var semillaInicial = 123; 
  var numIteraciones = 5;   
  var resultados = generarNumeroAleatorio(semillaInicial, numIteraciones);
  resultados.forEach(function(valor, indice) {
    console.log("Iteración " + (indice + 1) + ": " + valor);
  });
  