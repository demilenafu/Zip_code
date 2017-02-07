$('form#catastro').submit( function(event) {
    event.preventDefault();

    if($('#fileName').text() != "File chooser") {
        var formData = new FormData($(this)[0]);

        $.ajax({
            type: 'POST',
            url: './cargarCatastro',
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function(data){
                //Actualización de barra de progreso
                $('div#pbar').css("width", "100%");
            }
        });
    }
});

$(document).ready(function() {

    $('#generarBtn').click(function(){

        var dataString = $('form#zipcode').serialize();

        alert('Datos serializados: '+dataString);
        console.log(dataString);

        $.ajax({
            type: "POST",
            url: "/tarifadorN720",
            data: {dataString: dataString},
            success: function(data) {

            }
        });
   });
});