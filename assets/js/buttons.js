var inicio = 1; //se inicializa una variable en 0
var precio = 5;
function aumentarSC(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id aumentar
    console.log( "Ejecutando función test() aumentar" );
    var x = document.getElementById('cantidadSC').value = ++inicio; //se obtiene el valor del input, y se incrementa en 1 el valor que tenga.
    var z = parseInt(x)*5
    console.log(z)
    document.getElementById("total").value = parseInt(document.getElementById("total").value)+z
}

function disminuirSC(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id disminuir
    console.log( "Ejecutando función test() disminuir" );
    var x = document.getElementById('cantidadSC').value = --inicio; //se obtiene el valor del input, y se decrementa en 1 el valor que tenga.
    var z = parseInt(x)*5
    console.log(z)
    document.getElementById("total").value = parseInt(document.getElementById("total").value)+z
}


var inicio1 = 1; //se inicializa una variable en 0
function aumentarSP(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id aumentar
    console.log( "Ejecutando función test() aumentar" );
    var x = document.getElementById('cantidadSP').value = ++inicio1; //se obtiene el valor del input, y se incrementa en 1 el valor que tenga.
    var z = parseInt(x)*5
    console.log(z)
    document.getElementById("total").value = parseInt(document.getElementById("total").value)+z
}

function disminuirSP(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id disminuir
    console.log( "Ejecutando función test() disminuir" );
    var x = document.getElementById('cantidadSP').value = --inicio1; //se obtiene el valor del input, y se decrementa en 1 el valor que tenga.
    var z = parseInt(x)*5
    console.log(z)
    document.getElementById("total").value = parseInt(document.getElementById("total").value)+z
}


var inicio2 = 1; //se inicializa una variable en 0
function aumentarMS(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id aumentar
    console.log( "Ejecutando función test() aumentar" );
    var x = document.getElementById('cantidadMS').value = ++inicio2; //se obtiene el valor del input, y se incrementa en 1 el valor que tenga.
    var z = parseInt(x)*2
    console.log(z)
    document.getElementById("total").value = parseInt(document.getElementById("total").value)+z
}

function disminuirMS(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id disminuir
    console.log( "Ejecutando función test() disminuir" );
    var x = document.getElementById('cantidadMS').value = --inicio2; //se obtiene el valor del input, y se decrementa en 1 el valor que tenga.
    var z = parseInt(x)*2
    console.log(z)
    document.getElementById("total").value = parseInt(document.getElementById("total").value)+z
}

document.oncontextmenu = function(){return false}