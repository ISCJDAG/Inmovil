<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet" href="<?php echo  PATH_CSS.'/sweetalert2.css'?>">
    <title>alerta</title>
  </head>
  <body>

    <?php
        if(!empty($_GET)){
          $texto = htmlentities($_GET['text']);
          $titulo= htmlentities($_GET['title']);
          $tipo = htmlentities($_GET['type']);
          $v = htmlentities($_GET['v']);
          $metod = htmlentities($_GET['metodo']);
          $id = htmlentities($_GET['id']);
          $data=htmlentities($_GET['data']);
        }
        // switch para controllador
        switch ($v) {
          case 'inicio':
              $path = PATH_URL;
            break;
          case 'user':
              $path = PATH_URL.'/'.$v;
            break;
            // aqui ire creando las rutas conforme las vayamos necesitando.
        }
        // para el metodo de la clase o controlador.
        switch ($metod) {
          case 'index':
                $path = $path;
            break;
          case 'Add_New_User':
                $path = $path.'/'.$metod;
               /* if(!empty($data)){
                  $name = $data['complete_name'];
                  $phone = $data['phone'];
                  $photo= $data['photo'];
                  $level = $data['level'];
                  $path = $path.'/&'.$name.'&'.$phone.'&'.$photo.'&'.$level;

                }*/
            break;

        }

     ?>



    <script type="text/javascript" src="<?php echo PATH_JS.'/jquery-3.3.1.js' ?>"></script>
    <script type="text/javascript" src="<?php echo PATH_JS.'/sweatalert2final.js'?>">
    </script>
    <script type="text/javascript">
      swal({
        title:'<?php echo $titulo; ?>',
        text:"<?php echo $texto;?>",
        type:'<?php echo $tipo; ?>',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'Continue!'
      }).then(function(){
        /*var datajs = '<?php echo $data;?>';
        if(datajs.length>0){
          location.href= '<? echo $path."/".$data?>';
          alert(datajs+' tengo datos '+ location.href);
        }else{
          location.href = '<?php echo $path;  ?>'
          alert(location.href);
        }*/
        location.href = '<?php echo $path;  ?>';
        
      })

      $(document).click(function(){
        location.href = '<?php echo $path;  ?>'
      })

      $(document).keyup(function(e){
        if(e.which==27){
          location.href = '<?php echo $path;  ?>'
        }
      })
    </script>
  </body>
</html>