<?php require_once PATH_APP.'/view/inc/header.php'; ?>
<!-- ========================== -->
<!--  LOGO-->
<!-- =========================== -->
<div class="row">
<div class="input-field col s12 center">
  <img src="<?php echo PATH_PERFIL.'/user.jpg';?>" class="responsive-img circle center" width="120" >

</div>
</div>

<!-- ============================ -->
<!--  TITULO -->
<!-- ============================ -->
<span class=" blue-grey-text darken-3 center">
  <h5>Editar Usuario</h5>
  <?php var_dump($datos) ?>
</span>
<div class="row"></div>
<div class="row"></div>

<!--=============================  -->
<!-- form to add user. -->
<!-- ============================ -->
<div class="row">

  <div class="col s1">

  </div>

  <div class="col s10">
    <div class="card z-depth-5 yellow lighten-5">
    <div class="card-content">
      <form  action="<?php echo PATH_URL; ?>/user/editar_usuario/<?php echo $datos['id']; ?>" method="POST" enctype="multipart/form-data">

        <div class="row">

         <div class='col s0 m3 l3'></div>

          <div class="input-field col s12 m6 l6">
            <i class="material-icons prefix">face</i>
            <input type="text" class="validate" required id="nickname"
            name="nickname" value="<?php echo $datos['nickname']?>">
            <label for="nickname">Nickname</label>
          </div>
          <div class='col s0 m3 l3'></div>

        </div>

        <div class='row'>
        <div class='col s0 m3 l3'></div>
        <div class="input-field col s12 m6 l6">
            <i class="material-icons prefix">phone</i>
            <input type="text" required id="phone" name="phone" value="<?php echo $datos['phone'] ?>">
            <label for="phone">Phone</label>
          </div>
          <div class='col s0 m3 l3'></div>
        </div>

        <div class="row">

          
        <div class='col s0 m3 l3'></div>
          <div class="input-field col s12 m6 l6">
            <i class="material-icons prefix">email</i>
            <input type="email" id="email" class="validate" name="email" value="<?php echo $datos['email'] ?>">
            <label for="email">Email</label>
            <span class="helper-text" data-error="wrong that is not email" data-success="Right"></span>
          </div>
          <div class='col s0 m3 l3'></div>

        </div>

        

        <div class="row">

        <div class='col s0 m3 l3'></div>

          <div class="input-field col s12 m6 l6">
          <i class="material-icons prefix">assignment_ind</i>
            <select name="level">
              <?php if ($datos['level'] == 'Admin'): ?>
              <option value="<?php  echo $datos['level'];?>" selected><?php echo $datos['level'] ?></option>
              <option value="Supervisor">Supevisor</option>
              <option value="Empleado">Empleado</option>
              <?php endif;?>
              <?php if ($datos['level'] == 'Supervisor'): ?>
              <option value="<?php  echo $datos['level'] ?>" selected><?php echo $datos['level'] ?></option>
              <option value="Admin">Admin</option>
              <option value="Empleado">Empleado</option>
              <?php endif;?>
              <?php if ($datos['level'] == 'Empleado'): ?>
              <option value="<?php  echo $datos['level'] ?>"  selected><?php echo $datos['level'] ?></option>
              <option value="Admin">Admin</option>
              <option value="Supervisor">Supevisor</option>
              <?php endif;?>
              
              
            </select>

          </div>

          <div class='col s0 m3 l3'></div>

        </div>
<!--  FOTO  -->
        <div class="row">
        <div class='col s0 m3 l3'></div>
            <div class="file-field input-field col s12 m6 l6">
              <div class="btn blue darken-2">
                <i class="material-icons">add_a_photo</i>
                <input type="file" name="foto" onchange="previewFile()">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" value="<?php echo   $datos['photo']; ?>">
              </div>
            <div class='col s0 m3 l3'></div>

        </div>

        <div class="row">
        <div class='col s3 m4 l4'></div>
        <div class="col s6 m3 l3">
                <div class="card">
                  <div class="card-image">
                    <img id="imagen" src="<?php echo  PATH_URL.'/'. $datos['photo'];   ?>" class="responsive-img circle" width="100" height="100" >
                  </div>
                </div>
            </div>
            <div class='col s3 m4 l4'></div>
        </div>
        <!--  END FOTO -->

        <div class="row">

        </div>
        <div class="row">

        </div>
<!-- ========================= -->
<!-- BUTTONS OK AND CANCEL -->
        <div class="row">

          <div class="col s12 center">
            <!-- CANCEL -->
            <a href="<?php echo PATH_URL; ?>/user" class="waves-effect waves-light btn red darken-1">
              <span class="white-text">Cancelar</span>
            </a>
            <!-- SAVE -->
            <!-- <a href="#" class="waves-effect waves-light btn lime darken-1" id="aceptar" type="sumbit">
              <span class="white-text">Accept</span>
            </a> -->
            <button type="submit" name="button"
            class="waves-effect waves-light btn lime darken-1" id="btn_edit">
              <span class="white-text">Aceptar</span>
            </button>

          </div>

        </div>

      </form>
    </div>
    </div>
  </div>

  <div class="col s1">

  </div>

</div>

<?php require_once PATH_APP.'/view/inc/footer.php';


?>

<script type="text/javascript" src="<?php echo PATH_JS.'/validate_add_user.js';?>">

</script>

</body>
</html>
