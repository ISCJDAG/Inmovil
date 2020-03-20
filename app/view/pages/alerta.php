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
          $controller = htmlentities($_GET['controller']);
          $metod = htmlentities($_GET['metodo']);
          $id = htmlentities($_GET['id']);
          $datos=htmlentities($_GET['datos']);
        }
        // switch para controllador
        switch ($controller) {
          case 'inicio':
              $path = PATH_URL;
            break;
          case 'user':
              $path = PATH_URL.'/'.$controller;
            break;
            // aqui ire creando las rutas conforme las vayamos necesitando.
        }
        // para el metodo de la clase o controlador.
        switch ($metod) {
          case 'index':
                $path = $path;
            break;
          case 'Add_User':
              if($datos != ""){
                $path = $path.'/'.$metod.'/'.$datos;
              }
              if($datos == ""){
                $path = $path.'/'.$metod; 
              }
                
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
