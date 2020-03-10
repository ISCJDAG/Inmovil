<!-- Nav Bar of my sistem  -->
<nav>
    <div class="nav-wrapper " style="background:#00bcd4;">
    <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>


      <a href="#!" class="brand-logo center"><i class="material-icons">cloud</i></a>


      <ul class="right hide-on-med-and-down">
        <li><a href=""><i class="material-icons">search</i></a></li>
         <li><a href="#"><i class="material-icons">exit_to_app</i></a></li>
      </ul>
      <ul class="left hide-on-med-and-down">
            <li></li>
      </ul>


    </div>

  </nav>

<!--  ====== menu  ======  -->
  <ul id="mobile-menu" class="sidenav sidenav-fixed">
<!-- ======== user view ========== -->
    <li>
      <div class="user-view">

        <div class="background">
          <img src="<?php echo PATH_img_backgroud.'/default.jpg' ?>" alt="" class="responsive-img">
        </div>

        <a href="#!user"><img class="circle" src="<?php echo PATH_PERFIL.'/default.png' ?>" class="responsive-img"></a>
        <!-- cambiar el nombre con php -->
        <a href="#!name"><span class="white-text name">JD Aguilera Gonzalez(General Manager)</span></a>

        <a href="#!email"><span class="white-text email">customers@tigersystems.com</span></a>

      </div>

    </li>

    <div class="divider"></div>
    <!-- ======= content menu ======= -->
    <li><a href="<?php echo PATH_URL;?>" class=""><i class="material-icons blue-text">home
    </i>Home</a></li>
    <div class="divider"></div>
    <li><a href="#"><i class="material-icons blue-text">web</i>Web Publica</a></li>
    <div class="divider"></div>
    <li><a href="<?php echo PATH_URL; ?>/user"><i class="material-icons orange-text">account_circle</i>Usuarios</a></li>
    <div class="divider"></div>
    <li><a href="<?php echo PATH_URL; ?>/custumers"><i class="material-icons" style="color:#dce775;">folder_shared</i>Clientes</a></li>
    <div class="divider"></div>
    <li><a href="#" class="dropdown-trigger" data-target="propiedades">Propiedades<i class="material-icons right">arrow_drop_down</i><i class="material-icons green-text">location_city</i></a></li>
    <div class="divider"></div>
    <li><a href="#"><i class="material-icons red-text">exit_to_app</i>Exit</a></li>
    <div class="divider"></div>

  </ul>

  <!-- ============= drop-propiedades ============== -->
  <ul id="propiedades"  class="dropdown-content">
    <li><a href="#"><i class="material-icons">assessment</i>General</a></li>
    <li class="divider"></li>
    <li><a href="#"><i class="material-icons">assignment_turned_in</i>Ventas</a></li>
    <li class="divider"></li>
    <li><a href="#"><i class="material-icons">markunread_mailbox</i>Rentas</a></li>
    <li class="divider"></li>
    <li><a href="#"><i class="material-icons">repeat</i>Traspaso</a></li>
    <li class="divider"></li>
    <li><a href="#"><i class="material-icons">pan_tool</i>Entratos</a></li>
    <li class="divider"></li>
    <li><a href="#"><i class="material-icons">cancel</i>Canceladas</a></li>
  </ul>
