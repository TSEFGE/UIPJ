$("#nombres").focusout(function() {
  console.log('RFC');
  obtenerRFCFISICA();
});
$("#primerAp").focusout(function() {
    console.log('RFC');
  obtenerRFCFISICA();
});
$("#segundoAp").focusout(function() {
    console.log('RFC');
  obtenerRFCFISICA();
});
$("#fechaNacimiento").focusout(function() {
    console.log('RFC');
  obtenerRFCFISICA();
});

function quitaArticulos(palabra, tipo) {
  if (tipo == 1) {
    return palabra.replace("DEL ", "").replace("LAS ", "").replace("DE ", "").replace("LA ", "").replace("Y ", "").replace("A ", "").replace("LOS ", "").replace(" TODOS ", "");
  } else {
    return palabra.replace(" DEL ", " ").replace(" LAS ", " ").replace(" DE ", " ").replace(" LA ", "").replace(" Y ", "").replace(" A ", "").replace(" LOS ", " ").replace(" TODOS ", " ").replace("''", "").replace("´", "");
  }
}

function esVocal(letra) {
  if (letra == 'A' || letra == 'E' || letra == 'I' || letra == 'O' || letra == 'U' || letra == 'a' || letra == 'e' || letra == 'i' || letra == 'o' || letra == 'u')
    return true;
  else
    return false;
}

function obtenerRFCFISICA() {
    console.log("I N I C I A  R F C ");
  var rfc = "";
  nombre = $("#nombres").val().toUpperCase();
  console.log("nombre:"+nombre);
  apellidoPaterno = $("#primerAp").val().toUpperCase();
  apellidoMaterno = $("#segundoAp").val().toUpperCase();
  fecha = $("#fechaNacimiento").val();
  apellidoPaterno = quitaArticulos(apellidoPaterno, 1);
  apellidoMaterno = quitaArticulos(apellidoMaterno, 1);
  nombre = quitaArticulos(nombre, 2);
  if (apellidoPaterno.length == 0 || apellidoPaterno == "" || apellidoPaterno.trim() == "") {
    rfc += apellidoMaterno.substr(0, 2);
    rfc += nombresComunes(nombre, 1);
  } else if (apellidoMaterno.length == 0 || apellidoMaterno == "" || apellidoMaterno.trim() == "") {
    rfc += apellidoPaterno.substr(0, 2);
    rfc += nombresComunes(nombre, 1);
  } else {
    if (apellidoPaterno.length <= 2) {
      rfc += apellidoPaterno.substr(0, 1);
      rfc += apellidoMaterno.substr(0, 1);
      rfc += nombresComunes(nombre, 2);
    } else {
      primeraLetra = apellidoPaterno.substr(0, 1);
      if (esVocal(primeraLetra)) {
        rfc += primeraLetra;
        var l = apellidoPaterno.length;
        var c;
        for (i = 1; i < l; i++) {
          c = apellidoPaterno.charAt(i);
          if (esVocal(c)) {
            console.log(c);
            rfc += c;
            break;
          }
        }
      } else {
        rfc += apellidoPaterno.substr(0, 1);
        var l = apellidoPaterno.length;
        var c;
        for (i = 0; i < l; i++) {
          c = apellidoPaterno.charAt(i);
          if (esVocal(c)) {
            rfc += c;
            break;
          }
        }
      }
      rfc += apellidoMaterno.substr(0, 1);
      rfc += nombresComunes(nombre, 2);
    }
  }
  if (contieneAltisonantes(rfc.substr(0, 4))) {
    rfc=rfc.replaceAt(3, "X");
  }
  rfc += fecha.substr(2, 2);
  rfc += fecha.substr(5, 2);
  rfc += fecha.substr(8, 2);

  $("#rfc").val(rfc);
  //$("#curp").val(rfc);
}

String.prototype.replaceAt = function(index, replacement) {
  return this.substr(0, index) + replacement + this.substr(index + replacement.length);
}

function nombresComunes(nombre, tipo) {
  if (tipo == 1) { // S O L O   U N    A  P  E   LL  I  D  O
    var cadena = nombre;
    arrayDeNombres = cadena.split(' ');
    if (arrayDeNombres.length > 1) {
      if (arrayDeNombres[0] == 'MARIA' || arrayDeNombres[0] == 'MARÍA' || arrayDeNombres[0] == 'JOSE' || arrayDeNombres[0] == 'JOSÉ') {
        ultimosCaracterRFC = arrayDeNombres[1].substr(0, 2);
        rfcNombre = ultimosCaracterRFC;
      } else {
        rfcNombre = nombre.substr(0, 2);
      }
    } else {
      rfcNombre = nombre.substr(0, 2);
    }

  } else if (tipo == 2) { // DOS APELLIDOS
    var cadena = nombre;
    arrayDeNombres = cadena.split(' ');
    if (arrayDeNombres.length > 1) {
      if (arrayDeNombres[0] == 'MARIA' || arrayDeNombres[0] == 'MARÍA' || arrayDeNombres[0] == 'JOSE' || arrayDeNombres[0] == 'JOSÉ') {
        ultimoCaracterRFC = arrayDeNombres[1].substr(0, 1);
        rfcNombre = ultimoCaracterRFC;
      } else {
        rfcNombre = nombre.substr(0, 1);
      }
    } else {
      rfcNombre = nombre.substr(0, 1);
    }
  }
    return rfcNombre;
}

function contieneAltisonantes(rfc) {
  var palabrasAltisonantes=["BACA", "BAKA", "BUEI", "BUEY", "CACA", "CACO", "CAGA", "CAGO", "CAKA", "COGE", "COGI", "COJA", "COJE", "COJI", "COJO", "COLA", "CULO", "FALO", "FETO", "GETA", "GUEY", "GUEI", "JETA", "JOTO", "KACA", "KACO", "KAGA", "KOJO", "KOJI", "KOJE", "KULO", "KOLA", "KOJA", "KOGI", "KOGE", "KAKA", "KAKO", "KAGO", "KAGA", "LOCA", "LOCO", "LOkO", "MAME", "MAMO", "MEAR", "MIAR", "MEON", "MION", "MEAS", "MOCO", "MOKO", "MULA", "MULO", "NACA", "NACO", "PEDA", "PEDO", "PENE", "PIPI", "PITO", "POPO", "PUTA", "PUTO", "QULO", "RATA", "ROBA", "ROBE", "ROBO", "RUIN", "SENO", "TETA", "VACA", "VAGA", "VAGO", "VAKA", "VUEI", "VUEY", "WEI"];
  return (palabrasAltisonantes.indexOf(rfc) > -1);
}
