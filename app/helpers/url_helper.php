<?php

    //para redireccionar pagina
    function redirecionar($page){

      header('location: '.PATH_URL. $page);
    }

    function redirecionarPC($page,$controller,$id){

      header('location: '.PATH_URL.'/'. $page.'/'.$controller.'/'.$id);
    }

    /**
     * esta funcino es para ver el alert message.
     */
    function alertMessage($text,$title,$type,$v,$metod,$id,$data=''){
      header('location: '.PATH_URL.'/inicio/alerta?text='.$text.
      '&title='.$title.'&type='.$type.'&v='.$v.'&metodo='.$metod.'&id='.$id.'&data='.$data);
    }
   

 ?>
