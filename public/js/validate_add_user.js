$(function() {
  /*
========================
validar nombre completo.
=======================
 */
$('#name').change( function () {
  var regexpname = /^([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\']+[\s])+([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])+[\s]?([A-Za-zÁÉÍÓÚñáéíóúÑ]{0}?[A-Za-zÁÉÍÓÚñáéíóúÑ\'])?$/;
  var nombre = $("#name").val();
  //var bool = regexpname.test($('#name').val());

  if (nombre.match(regexpname)) {
    return true;
  } else {
    swal(
      'The Name only has letters not numeric or caracteres',
      $('#name').val(),
      'error'
    )
  }

});//termina mi validacion nombre

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
      'El nickname es demasiado largo demasiado corto!',
      'error'
    )
  }
}
$('#nickname').change( valNick );//termina mi validacion nickname.

/*
====================
validar contrasena
====================
*/
$('#pass').change( function () {

  var contra = $("#pass").val();
  var Max = 20;
  var Min = 8;


  if (contra.length > Max || contra.length < Min) {

    swal(
      'The password its!',
      'to short or to big, Just 8 or 20 caracters!',
      'error'
    )
  }
});
$('#pass2').change( function () {
  var contra1 = $("#pass").val();
  var contra2 = $("#pass2").val();
  if (!contra2.match(contra1)) {
    swal(
      'The passwords!',
      'Are not the same verify please!',
      'error'
    )
  }
});//termina la validacion de las passwords.

/*
==================
validar numero de telefono.
==================
*/
$('#phone').change( function () {
  var validation = /^([0-9]{10})/;
  var phone = $('#phone').val();
  if (phone.match(validation) && phone.length == 10 || phone.match(validation) && phone.length >= 7) {
    return true;

  } else {
    swal(
      'El formato del telefono es incorrecto',
      $('#phone').val(),
      'error'
    )
  }

});


});//termina el function


