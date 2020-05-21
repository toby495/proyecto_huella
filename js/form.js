//Evita el acceso del formulario a la base de datos
function denegate() {
    $('#registro').click(function () {
        nip = $('#nip').val();
        confnip = $('#confnip').val();
        if (confnip != nip) {
            alert('El nip no coincide');
            $('#registro').prop('disabled', true);
            location.reload();
        } 
    });
}
window.addEventListener('load', denegate);
