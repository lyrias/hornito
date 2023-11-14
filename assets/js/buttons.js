var inicio = 0; //se inicializa una variable en 0
var precio = 5;
function aumentar(n, cat){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id aumentar
    console.log( "Ejecutando función test() aumentar" );
    console.log(n);
    console.log(typeof n);
    console.log(cat);
    console.log(typeof cat);
    var x = document.getElementById('cantidad'+cat.toString()).value = parseInt(document.getElementById('cantidad'+cat.toString()).value)+n; //se obtiene el valor del input, y se incrementa en 1 el valor que tenga.
    console.log(x);
    var z = parseInt(document.getElementById('precio'+cat.toString()).value);
    console.log(z);
    var g = document.getElementById("total"+cat.toString()).value = parseInt(document.getElementById("cantidad"+cat.toString()).value)*z;
    console.log(g);
}

function disminuir(n, cat){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id disminuir
    console.log( "Ejecutando función test() disminuir" );
    var x = document.getElementById('cantidad'+cat.toString()).value = parseInt(document.getElementById('cantidad'+cat.toString()).value)-n; //se obtiene el valor del input, y se decrementa en 1 el valor que tenga.
    console.log(x);
    var z = parseInt(document.getElementById('precio'+cat.toString()).value);
    console.log(z);
    var g=document.getElementById("total"+cat.toString()).value = parseInt(document.getElementById("cantidad"+cat.toString()).value)*z;
    console.log(g);
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