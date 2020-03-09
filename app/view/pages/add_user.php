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
  <h5>Agregar Usuario</h5>
</span>
<br><br>

<!--=============================  -->
<!-- form to add user. -->
<!-- ============================ -->
<div class="row">

  <div class="col s1">

  </div>

  <div class="col s10">
    <div class="card z-depth-5 grey lighten-4">
    <div class="card-content">
      <form  action="<?php echo PATH_URL; ?>/user/Add_New_User" method="POST" enctype="multipart/form-data">

        <div class="row">

          <div class="input-field col s12 m6 l6">
            <i class="material-icons prefix">account_circle</i>
            <input  id="name" type="text" class="validate" required name="name" pattern="[A-Za-záÁéÉíÍÓóÚúńŃ/s ]+" title="after lastName make a space">
            <label for="name">Name</label>
          </div>

          <div class="input-field col s12 m6 l6">
            <i class="material-icons prefix">face</i>
            <input type="text" class="validate" required id="nickname" name="nickname">
            <label for="nickname">Nick</label>
          </div>

        </div>

        <div class="row">

          <div class="input-field col s12 m6 l6">
            <i class="material-icons prefix">phone</i>
            <input type="tel" required id="phone" name="phone" pattern="[0-9]{10}">
            <label for="phone">Phone</label>
          </div>

          <div class="input-field col s12 m6 l6">
            <i class="material-icons prefix">email</i>
            <input type="email" id="email" class="validate" name="email">
            <label for="email">Email</label>
            <span class="helper-text" data-error="wrong that is not email" data-success="Right"></span>
          </div>

        </div>

        <div class="row">

          <div class="input-field col s12 m6 l6">
            <i class="material-icons prefix ">vpn_key</i>
            <input type="password" required id="pass" name="pass">
            <label for="pass">Password</label>
          </div>

          <div class="input-field col s12 m6 l6">
            <i class="material-icons prefix grey-text">vpn_key</i>
            <input type="password" required id="pass2" name="pass2">
            <label for="pass2">Verificar pass</label>
          </div>

        </div>

        <div class="row">

          

          <div class="input-field col s12 m6 l6">
          <i class="material-icons prefix">assignment_ind</i>
            <select name="level" id="level">
              <option value="">Elije el nivel de Usuario</option>
              <option value="Admin">Admin</option>
              <option value="Supervisor">Supevisor</option>
              <option value="Empleado">Empleado</option>
            </select>

          </div>

          

        </div>
<!--  FOTO  -->
        <div class="row">

            <div class="file-field input-field col s12 m6 l6">
              <div class="btn blue darken-2">
                <i class="material-icons">add_a_photo</i>
                <input type="file" name="foto" onchange="previewFile()">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
            </div>
        </div>

        <div class="row">
        <div class="col s6 m3 l3">
                <div class="card">
                  <div class="card-image">
                    <img id="imagen" src="<?php echo PATH_PERFIL;   ?>/user.jpg" class="responsive-img circle" width="100" height="50" >
                  </div>
                </div>
            </div>
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
              <span class="white-text">Cancel</span>
            </a>
            <!-- SAVE -->
            <!-- <a href="#" class="waves-effect waves-light btn lime darken-1" id="aceptar" type="sumbit">
              <span class="white-text">Accept</span>
            </a> -->
            <button type="submit" name="button"
            class="waves-effect waves-light btn lime darken-1" id="btn_save">
              <span class="white-text">Accept</span>
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

<?php require_once PATH_APP.'/view/inc/footer.php';?>

<script src="<?php echo PATH_JS.'/validate_add_user.js';?>"></script>
<script>
</script>



</body>
</html>
