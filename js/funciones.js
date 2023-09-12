$('#formulario').submit(function(event) {
    // Evita que el formulario se envíe de forma tradicional
    event.preventDefault();

    // Deshabilita el botón de envío
    $("#enviar").prop("disabled", true);

    // Realiza la solicitud Ajax
    $.ajax({
        url: 'validacion.php',
        type: 'POST',
        data: $(this).serialize(),
        success: function(data) {
            // Respuesta del servidor
            console.log(data);
            datos2 = JSON.parse(data);
            Swal.fire({
                icon: datos2.estado,
                title: datos2.titulo,
                text: datos2.datos,
            });

            // habilita el botón de envío
            $("#enviar").prop("disabled", false);
        },
        error: function() {
            // Maneja los errores de la solicitud Ajax
            console.log('Ha ocurrido un error');

            // Habilita el botón de envío
            $("#enviar").prop("disabled", false);
        }
    });
});
console.log($("#formulario").val());


function ocultarCuponDiv() {
    var select = document.querySelector('select[name="plataforma"]');
    var cuponDiv = document.getElementById('cuponDiv');
    var selectedValue = select.value;

    if (selectedValue === '1') { // Si se selecciona 'SIESA'
    cuponDiv.style.display = 'none';
    } else {
    cuponDiv.style.display = 'block';
    }
}
