function aumentar(n, z, cat){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id aumentar
    console.log( "Ejecutando función test() aumentar" );
    var x = document.getElementById('cantidad'+cat.toString()).value = parseInt(document.getElementById('cantidad'+cat.toString()).value)+n; //se obtiene el valor del input, y se incrementa en 1 el valor que tenga.
    console.log(x);
    var g = document.getElementById("total"+cat.toString()).value = parseInt(document.getElementById("cantidad"+cat.toString()).value)*z;
    console.log(g);
    var tot = document.getElementById("total").value = parseInt(document.getElementById("total").value)+ n*z;
    console.log(tot);
}

function disminuir(n, z, cat){ // se crean la funcion y se agrega al evento oncontextmenu en en la etiqueta button con id disminuir
    console.log( "Ejecutando función test() disminuir" );
    var x = document.getElementById('cantidad'+cat.toString()).value = parseInt(document.getElementById('cantidad'+cat.toString()).value)-n; //se obtiene el valor del input, y se decrementa en 1 el valor que tenga.
    console.log(x);
    var g = document.getElementById("total"+cat.toString()).value = parseInt(document.getElementById("cantidad"+cat.toString()).value)*z;
    console.log(g);
    var tot = document.getElementById("total").value = parseInt(document.getElementById("total").value)- n*z;
    console.log(tot);
}

document.oncontextmenu = function(){return false}

function calcular(){
    document.getElementById("vuelto").value = parseInt(document.getElementById("efectivo").value)-parseInt(document.getElementById("total").value);
    document.getElementById("total").value = document.getElementById("total").value+" Bs";
    document.getElementById("vuelto").value = document.getElementById("vuelto").value+" Bs";

}

function cancelar(){

    document.getElementById("efectivo").value = 0;
    document.getElementById("vuelto").value = 0;

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

$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })