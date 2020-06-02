//Evita el acceso del formulario a la base de datos
function denegate() {
    $('#registro').click(function () {
        nip = $('#nip').val();
        confnip = $('#confnip').val();
        if (confnip != nip) {
            $("#nip").val('');
            $("#confnip").val('');
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'La contraseña no coincide',
            })
        }
    });
}
function showPassWord() {

    $('#showPassword').click(function () {
        if ($('#showPassword').is(':checked')) {
            $('#nip').attr('type', 'text');
            $('#confnip').attr('type', 'text');
        } else {
            $('#nip').attr('type', 'password');
            $('#confnip').attr('type', 'password');
        }
    });
}
function processFiles(files) {
    var file = files[0];

    var reader = new FileReader();

    reader.onload = function (e) {
        // Cuando éste evento se dispara, los datos están ya disponibles.
        // Se trata de copiarlos a una área <div> en la página.
      
        $('#fileOutput').attr('src', e.target.result);
        
    };
    reader.readAsDataURL(file);
}
window.addEventListener('load', showPassWord);
window.addEventListener('load', denegate);
