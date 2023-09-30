var inicio = 1; //se inicializa una variable en 0

function aumentarSC(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id aumentar
    console.log( "Ejecutando función test() aumentar" );
    var x = document.getElementById('cantidadSC').value = ++inicio; //se obtiene el valor del input, y se incrementa en 1 el valor que tenga.
}

function disminuirSC(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id disminuir
    console.log( "Ejecutando función test() disminuir" );
    var x = document.getElementById('cantidadSC').value = --inicio; //se obtiene el valor del input, y se decrementa en 1 el valor que tenga.
}


var inicio1 = 1; //se inicializa una variable en 0
function aumentarSP(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id aumentar
    console.log( "Ejecutando función test() aumentar" );
    var x = document.getElementById('cantidadSP').value = ++inicio1; //se obtiene el valor del input, y se incrementa en 1 el valor que tenga.
}

function disminuirSP(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id disminuir
    console.log( "Ejecutando función test() disminuir" );
    var x = document.getElementById('cantidadSP').value = --inicio1; //se obtiene el valor del input, y se decrementa en 1 el valor que tenga.
}


var inicio2 = 1; //se inicializa una variable en 0
function aumentarMS(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id aumentar
    console.log( "Ejecutando función test() aumentar" );
    var x = document.getElementById('cantidadMS').value = ++inicio2; //se obtiene el valor del input, y se incrementa en 1 el valor que tenga.
}

function disminuirMS(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id disminuir
    console.log( "Ejecutando función test() disminuir" );
    var x = document.getElementById('cantidadMS').value = --inicio2; //se obtiene el valor del input, y se decrementa en 1 el valor que tenga.
}

document.oncontextmenu = function(){return false}