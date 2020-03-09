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
      <form  action="<?php echo PATH_URL; ?>/user/edit_user/<?php echo $datos['id']; ?>" method="POST" enctype="multipart/form-data">

        <div class="row">

          <div class="input-field col s12 m6 l6">
            <i class="material-icons prefix">account_circle</i>
            <input id="name" type="text" class="validate" required name="name" pattern="[A-Za-záÁéÉíÍÓóÚúńŃ/s ]+"
             value="<?php echo $datos['complete_name']; ?>">
            <label for="name">Name</label>
          </div>

          <div class="input-field col s12 m6 l6">
            <i class="material-icons prefix">face</i>
            <input type="text" class="validate" required id="nickname"
            name="nickname" value="<?php echo $datos['nickname']?>">
            <label for="nickname">Nickname</label>
          </div>

        </div>

        <div class="row">

          <div class="input-field col s12 m6 l6">
            <i class="material-icons prefix">phone</i>
            <input type="text" required id="phone" name="phone" value="<?php echo $datos['phone'] ?>">
            <label for="phone">Phone</label>
          </div>

          <div class="input-field col s12 m6 l6">
            <i class="material-icons prefix">email</i>
            <input type="email" id="email" class="validate" name="email" value="<?php echo $datos['email'] ?>">
            <label for="email">Email</label>
            <span class="helper-text" data-error="wrong that is not email" data-success="Right"></span>
          </div>

        </div>

        <div class="row">

          <div class="input-field col s12 m6 l6">
            <i class="material-icons prefix ">vpn_key</i>
            <input type="password" required id="pass" name="pass" value="<?php echo $datos['pass'] ?>">
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
            <select name="level">
              <option value="<?php echo $datos['level'] ?>" disabled selected><?php echo $datos['level'] ?></option>
              <option value="Admin">Admin</option>
              <option value="Supervisor">Supevisor</option>
              <option value="Employe">Employe</option>
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
                <input class="file-path validate" type="text" value="">
              </div>
            </div>

           

            


        </div>

        <div class="row">
        <div class="col s6 m3 l3">
                <div class="card">
                  <div class="card-image">
                    <img id="imagen" src="<?php echo PATH_PERFIL//echo PATH_URL.'/'. $datos['photo'];   ?>/user.jpg" class="responsive-img circle" width="100" height="100" >
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
            class="waves-effect waves-light btn lime darken-1" id="btn_edit">
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

<?php require_once PATH_APP.'/view/inc/footer.php';


?>

<script type="text/javascript" src="<?php echo PATH_JS.'/validate_add_user.js';?>">

</script>

</body>
</html>
