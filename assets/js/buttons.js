var inicio = 0; //se inicializa una variable en 0
var precio = 5;
function aumentarSC(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id aumentar
    console.log( "Ejecutando función test() aumentar" );
    var x = document.getElementById('cantidadSC').value = parseInt(document.getElementById('cantidadSC').value)+1; //se obtiene el valor del input, y se incrementa en 1 el valor que tenga.
    var z = 6
    console.log(z)
    document.getElementById("total").value = parseInt(document.getElementById("total").value)+z
    document.getElementById("total").value = document.getElementById("total").value+" Bs"

}

function disminuirSC(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id disminuir
    console.log( "Ejecutando función test() disminuir" );
    var x = document.getElementById('cantidadSC').value = parseInt(document.getElementById('cantidadSC').value)-1; //se obtiene el valor del input, y se decrementa en 1 el valor que tenga.
    var z = 6
    console.log(z)
    document.getElementById("total").value = parseInt(document.getElementById("total").value)-z
    document.getElementById("total").value = document.getElementById("total").value+" Bs"

}


var inicio1 = 0; //se inicializa una variable en 0
function aumentarSP(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id aumentar
    console.log( "Ejecutando función test() aumentar" );
    var x = document.getElementById('cantidadSP').value = parseInt(document.getElementById('cantidadSP').value)+1; //se obtiene el valor del input, y se incrementa en 1 el valor que tenga.
    var z = 7
    console.log(z)
    document.getElementById("total").value = parseInt(document.getElementById("total").value)+z
    document.getElementById("total").value = document.getElementById("total").value+" Bs"

}

function disminuirSP(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id disminuir
    console.log( "Ejecutando función test() disminuir" );
    var x = document.getElementById('cantidadSP').value = parseInt(document.getElementById('cantidadSP').value)-1; //se obtiene el valor del input, y se decrementa en 1 el valor que tenga.
    var z = 7
    console.log(z)
    document.getElementById("total").value = parseInt(document.getElementById("total").value)-z
    document.getElementById("total").value = document.getElementById("total").value+" Bs"

}


var inicio2 = 0; //se inicializa una variable en 0
function aumentarMS(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id aumentar
    console.log( "Ejecutando función test() aumentar" );
    var x = document.getElementById('cantidadMS').value = parseInt(document.getElementById('cantidadMS').value)+1; //se obtiene el valor del input, y se incrementa en 1 el valor que tenga.
    var z = 2
    console.log(z)
    document.getElementById("total").value = parseInt(document.getElementById("total").value)+z
    document.getElementById("total").value = document.getElementById("total").value+" Bs"

}

function disminuirMS(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id disminuir
    console.log( "Ejecutando función test() disminuir" );
    var x = document.getElementById('cantidadMS').value = parseInt(document.getElementById('cantidadMS').value)-1; //se obtiene el valor del input, y se decrementa en 1 el valor que tenga.
    var z = 2
    console.log(z)
    document.getElementById("total").value = parseInt(document.getElementById("total").value)-z
    document.getElementById("total").value = document.getElementById("total").value+" Bs"

}

document.oncontextmenu = function(){return false}

function total(){
    document.getElementById("total").value = 0

    document.getElementById("cantidadSC").value = 0
    document.getElementById("cantidadSP").value = 0
    document.getElementById("cantidadMS").value = 0

    document.getElementById("total").value = document.getElementById("total").value+" Bs"
}