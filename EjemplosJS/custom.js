function cambiarColorTexto() {

    //forma1 por id
    //document.getElementById("1").setAttribute("style", "color:red"); // getElementById es un metodo que permite recuperar un elemento (etiqueta) en HTML

    //forma2 guardar en una variable con var o let
    //var parrafo = document.getElementById("1");
    //parrafo.setAttribute("style", "color:blue; font-size: 30px");
    //alert('se ha cambiado el color del texto y tamaño')

    //forma 3 usando hojan de estilos
    //document.getElementById("1").setAttribute("class", "nuevoParrafo");
    document.getElementById("1").classList.add("fondoParrafo");

    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })

}

// $ esto hace referencia jQuery
$(document).ready(function() {
    alert('Hola Mundo');
});