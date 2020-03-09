
// ==============
// inicializacion de componentes.
// ==============
document.addEventListener('DOMContentLoaded', function() {
  // para mi sidenav menu
   var elems = document.querySelectorAll('.sidenav');
   var instances = M.Sidenav.init(elems);
// para mi drop menu
   var drop= document.querySelector('.dropdown-trigger');
   var instances = M.Dropdown.init(drop);
// selector inicializar
   var selec = document.querySelector('select');
   var instances = M.FormSelect.init(selec);

 });
 // ==============================
//renderizar foto antes de subirla
//================================
  function previewFile(){
    var preview = document.querySelector('#imagen');
  var file    = document.querySelector('input[type=file]').files[0];
  var reader  = new FileReader();

  reader.addEventListener("load", function () {
    preview.src = reader.result;
  }, false);

  if (file) {
    reader.readAsDataURL(file);
  }
  }

