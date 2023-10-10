var inicio = 0; //se inicializa una variable en 0
var precio = 5;
function aumentar4(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id aumentar
    console.log( "Ejecutando función test() aumentar" );
    var x = document.getElementById('cantidad4').value = parseInt(document.getElementById('cantidad4').value)+1; //se obtiene el valor del input, y se incrementa en 1 el valor que tenga.
    var z = 6;
    console.log(z);
    var g=document.getElementById("total4").value = parseInt(document.getElementById("cantidad4").value)*z;

}

function disminuir4(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id disminuir
    console.log( "Ejecutando función test() disminuir" );
    var x = document.getElementById('cantidad4').value = parseInt(document.getElementById('cantidad4').value)-1; //se obtiene el valor del input, y se decrementa en 1 el valor que tenga.
    var z = 6;
    console.log(z);
    var g=document.getElementById("total4").value = parseInt(document.getElementById("cantidad4").value)*z;

}


var inicio1 = 0; //se inicializa una variable en 0
function aumentar5(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id aumentar
    console.log( "Ejecutando función test() aumentar" );
    var x = document.getElementById('cantidad5').value = parseInt(document.getElementById('cantidad5').value)+1; //se obtiene el valor del input, y se incrementa en 1 el valor que tenga.
    var z = 7;
    console.log(z);
    document.getElementById("total5").value = parseInt(document.getElementById("cantidad5").value)*z;

}

function disminuir5(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id disminuir
    console.log( "Ejecutando función test() disminuir" );
    var x = document.getElementById('cantidad5').value = parseInt(document.getElementById('cantidad5').value)-1; //se obtiene el valor del input, y se decrementa en 1 el valor que tenga.
    var z = 7;
    console.log(z);
    document.getElementById("total5").value = parseInt(document.getElementById("cantidad5").value)*z;

}


var inicio2 = 0; //se inicializa una variable en 0
function aumentar6(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id aumentar
    console.log( "Ejecutando función test() aumentar" );
    var x = document.getElementById('cantidad6').value = parseInt(document.getElementById('cantidad6').value)+1; //se obtiene el valor del input, y se incrementa en 1 el valor que tenga.
    var z = 2;
    console.log(z);
    document.getElementById("total6").value = parseInt(document.getElementById("cantidad6").value)*z;

}

function disminuir6(){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id disminuir
    console.log( "Ejecutando función test() disminuir" );
    var x = document.getElementById('cantidad6').value = parseInt(document.getElementById('cantidad6').value)-1; //se obtiene el valor del input, y se decrementa en 1 el valor que tenga.
    var z = 2;
    console.log(z);
    document.getElementById("total6").value = parseInt(document.getElementById("cantidad6").value)*z;

}

document.oncontextmenu = function(){return false}

function calcular(){
    document.getElementById("total").value = parseInt(document.getElementById("total4").value)+parseInt(document.getElementById("total5").value)+parseInt(document.getElementById("total6").value);
    document.getElementById("total").value = document.getElementById("total").value+" Bs";

}

function total(){

    document.getElementById("vuelto").value = parseInt(document.getElementById("efectivo").value)-parseInt(document.getElementById("total").value);
    document.getElementById("vuelto").value = document.getElementById("vuelto").value+" Bs";
    document.getElementById("total").value = 0;

    document.getElementById("cantidad4").value = 0;
    document.getElementById("cantidad5").value = 0;
    document.getElementById("cantidad6").value = 0;
    console.log( "se puso en 0 cantidades" );
    document.getElementById("total4").value = 0
    document.getElementById("total5").value = 0;
    document.getElementById("total6").value = 0;
    console.log( "se puso en 0 totales" );
    document.getElementById("total").value = document.getElementById("total").value+" Bs";
}