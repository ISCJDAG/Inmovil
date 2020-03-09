<?php require_once PATH_APP.'/view/inc/header.php' ?>

<span class=" blue-grey-text darken-3">
  <h3>Dashbord</h3>
</span>
<!-- ============== cards ================== -->
<div class="row">

  <a href="#">
    <div class="col s12 m6 l3">
        <div class="card light-blue darken-4 z-depth-5 ">
        <div class="card-content light-blue darken-2 white-text waves-effect waves-block waves-light">
            <span class="card-title center">Sells</span>
            <h3 class="center"><?php // here the quantity  ?>0</h3>
          </div>
          <div class="card-action">
            <a class="indigo-text text-lighten-5" href="#">See More...</a>
          </div>
        </div>
      </div>
    </a>

    <a href="#">
      <div class="col s12 m6 l3">
        <div class="card cyan darken-4 z-depth-5">
          <div class="card-content cyan darken-2 white-text waves-effect waves-block waves-light">
            <span class="card-title center">Rent</span>
            <h3 class="center">0</h3>
          </div>
          <div class="card-action">
            <a class="indigo-text text-lighten-5" href="#">See More...</a>
          </div>
        </div>
      </div>
    </a>

    <a href="#">
      <div class="col s12 m6 l3">
        <div class="card yellow darken-4 z-depth-5">
          <div class="card-content yellow darken-5 white-text waves-effect waves-block waves-dark">
            <span class="card-title center">Busy</span>
            <h3 class="center">0</h3>
          </div>
          <div class="card-action">
            <a class="indigo-text text-lighten-5" href="#">See More...</a>
          </div>
        </div>
      </div>
    </a>

    <a href="#">
      <div class="col s12 m6 l3">
        <div class="card green darken-4 z-depth-5">
          <div class="card-content green darken-2 white-text waves-effect waves-block waves-light">
            <span class="card-title center">Traspassing</span>
            <h3 class="center">0</h3>
          </div>
          <div class="card-action">
            <a  class="indigo-text text-lighten-5" href="#">See More...</a>
          </div>
        </div>
      </div>
    </a>


</div>
<!-- ============= available ==============  -->
<span class="blue-grey-text darken-3 center">
  <h3><?php echo $datos['disponibles']; ?></h3>
</span>

<!-- ============ nav search ================ -->
<div class="row">

  <div class="col s2">

  </div>

  <div class="col s8">
      <nav>
        <div class="nav-wrapper" style="background:#00bcd4;">
          <form>
            <div class="input-field">
              <input id="search" type="search" required>
              <label class="label-icon" for="search"><i class="material-icons">search</i></label>
              <i class="material-icons"> close</i>
            </div>
          </form>
        </div>
      </nav>
  </div>

  <div class="col s2">

  </div>

</div>
<!--===== content table =========  -->
<div class="row"></div>
<div class="row"></div>

<div class="row">
  <div class="card z-depth-5">
    <table class="striped centered highlight responsive-table">
      <thead>
        <tr>
          <th colspan="2" class="borrar">Vista</th>
          <th>Num</th>
          <th>Cliente</th>
          <th>Propiedad</th>
          <th>Precio</th>
          <th>Credito</th>
          <th>Asesor</th>
          <th>Tipo</th>
          <th>Operacion</th>
        </tr>
      </thead>
      <tbody>
        <?php  //aqui va ir mi while o foreach?>
        <tr>
          <td>vista</td>
          <td>vista</td>
          <td>1</td>
          <td>Jose Dominguez</td>
          <td>1295</td>
          <td>$700,000</td>
          <td>$150,000</td>
          <td>Asesor</td>
          <td>disponible</td>
          <td>Venta o Renta</td>

        </tr>

        <tr>
          <td>vista</td>
          <td>vista</td>
          <td>1</td>
          <td>Jose Dominguez</td>
          <td>1295</td>
          <td>$700,000</td>
          <td>$150,000</td>
          <td>Asesor</td>
          <td>disponible</td>
          <td>Venta o Renta</td>

        </tr>

        <?php //termina mi foreach?>
      </tbody>
    </table>
  </div>
</div>



<?php require_once PATH_APP.'/view/inc/footer.php' ?>
