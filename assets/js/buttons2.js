function aumentar(n, cat){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id aumentar
    console.log( "Ejecutando función test() aumentar" );
    var x = document.getElementById('cantidad'+cat).value = parseInt(document.getElementById('cantidad'+cat).value)+n; //se obtiene el valor del input, y se incrementa en 1 el valor que tenga.
    console.log(x);
    var z = document.getElementById('precio'+cat).value;
    console.log(z);
    var g = document.getElementById("total"+cat).value = parseInt(document.getElementById("cantidad"+cat).value)*z;
    console.log(g);
}

function disminuir(n, cat){ // se crean la funcion y se agrega al evento onclick en en la etiqueta button con id disminuir
    console.log( "Ejecutando función test() disminuir" );
    var x = document.getElementById('cantidad'+cat).value = parseInt(document.getElementById('cantidad'+cat).value)-n; //se obtiene el valor del input, y se decrementa en 1 el valor que tenga.
    console.log(x);
    var z = document.getElementById('precio'+cat).value;
    console.log(z);
    var g=document.getElementById("total"+cat).value = parseInt(document.getElementById("cantidad"+cat).value)*z;
    console.log(g);
}