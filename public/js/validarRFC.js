
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
//   ============================

/*function validRFC(){
    var expretion = /^([A-ZÑ&]{3,4})(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01]))([A-Z\d]{2})([A\d])$/;
    var RFC = $('#rfc').val();

    if(RFC.match(expretion)){
         swal({
                title:'The RFC! ' + RFC,
                text:"It's correct!",
                type:'success',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              })
    }
    else{
        swal({
            title:'The RFC! '+RFC,
            text:"It's Wrong please make sure to write well!",
            type:'error',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
          })
          
          
    }
}

$('#rfc').on('change',validRFC);*/