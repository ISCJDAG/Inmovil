

/*function validate_RFC(){
    var rurl = 'http://localhost/Inventory';
    var rfc = $('#rfc').val();
    var expretion = /^([A-ZÑ&]{3,4})(\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01]))([A-Z\d]{2})([A\d])$/;
    if(this.rfc.match(expretion)){
        swal({
            title:'The RFC! ' + this.rfc,
            text:"It's correct!",
            type:'success',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
        })
        $.ajax({
            url:'custumers/CheckRFC',
            type:"POST",
            data:{datos:rfc},
            
            beforeSend:function(){
         
            },
            success: function(result){
    
                if(result == 1){
                    swal({
                        title:"Sorry!",
                        text:"The RFC "+ result,
                        type:"error",
                        showConfirmButton: true
                    })
                }
                 if(result == 0){
                    swal({
                        title:"All right!",
                        text:result,
                        type:"success",
                        showConfirmButton: true
                    })
                }
                
            },
            error: function(){
                swal({
                    title:"Sorry!",
                    text:"but we can not connect with the server!",
                    type:"error",
                    showConfirmButton: true
                })
            }
    
        });

    }else{
        swal({
            title:'The RFC! '+this.rfc,
            text:"It's Wrong please make sure to write well!",
            type:'error',
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
          })
    }
    
    
}

$('#rfc').on('change',validate_RFC);*/

/**
 * ==============================
 * AJAX for validate email.
 * ==============================
 */

