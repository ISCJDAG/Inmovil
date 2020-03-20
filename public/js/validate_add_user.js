$(function() {

    /*
========================
validar nombre completo.
=======================
 */
    $('#name').change(function() {
        var regexpname = /^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+[\s])+([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])+[\s]?([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])?$/;
        var nombre = $("#name").val();
        //var bool = regexpname.test($('#name').val());

        if (nombre.match(regexpname)) {
            return true;
        } else {
            swal(
                'El nombre es incorrecto',
                $('#name').val(),
                'warning'
            )
        }

    }); //termina mi validacion nombre

    /*
    ====================
    validar nickname de usuario. que no exista. ajax
    ====================
    */
    function valNick() {
        var nick = $('#nickname').val();
        var Maxchars = 16;
        var minchars = 6;
        if (nick.length < minchars || nick.length > Maxchars) {

            swal(
                $('#nickname').val(),
                'El nickname debe contener minimo de 6 a 16 caracteres',
                'warning'
            )
        }
    }
    $('#nickname').change(valNick); //termina mi validacion nickname.

    /*
    ====================
    validar contrasena
    ====================
    */
    $('#pass').change(function() {

        var contra = $("#pass").val();
        var Max = 20;
        var Min = 8;


        if (contra.length > Max || contra.length < Min) {

            swal(
                'El password!',
                'Debe contener de 8 a 12 caracteres!',
                'warning'
            )
        }
    });
    $('#pass2').change(function() {
        var contra1 = $("#pass").val();
        var contra2 = $("#pass2").val();
        if (!contra2.match(contra1)) {
            swal(
                'Las passwords no coinciden!',
                'Porfavor verifque que sean iguales!',
                'warning'
            )
        }
    }); //termina la validacion de las passwords.

    /*
    ==================
    validar numero de telefono.
    ==================
    */
    $('#phone').change(function() {
        var validation = /^([0-9]{10})/;
        var phone = $('#phone').val();
        if (phone.match(validation) && phone.length == 10 || phone.match(validation) && phone.length >= 7) {
            return true;

        } else {
            swal(
                'El formato del telefono es incorrecto',
                $('#phone').val(),
                'warning'
            )
        }

    });

    /**
     * =========================
     * ===== Validar email======
     *========================== 
     */
    $("#email").change(function() {
        var validation = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;
        var email = $("#email").val();
        if (!email.match(validation)) {
            swal(
                'El formato del email es incorrecto',
                $('#email').val(),
                'warning'
            )
        }
    });

}); //termina el function