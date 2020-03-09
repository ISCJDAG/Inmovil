<?php require_once PATH_APP.'/view/inc/header.php'; ?>

<!-- content -->

<!-- logo -->
<div class='row'>
	<div class='input-field col s12 center'>
		<img src="<?php echo PATH_PERFIL.'/user.jpg';?>" class="responsive-img circle center"
		 width="120">
	</div>
</div>
<!-- title -->
<div class='row'>
	<span class="blue-grey-text darken-3 center">
		<h4>Actualizar cliente</h4>
	</span>
</div>

<!-- ===== card form ===== -->
<div class='row'>
	<div class='col s1'></div>

	<div class='col s10'>
		<div class='card z-depth-5  light-green lighten-5'>
			<div class='card-content'>
				<form action="<?php echo PATH_URL; ?>/custumer/Update_Custumer/<?php //echo $datos['id'];?>" method="POST">
					<div class='row'>
						<div class='input-field col s6'>
							<i class="material-icons prefix pink-text">account_circle</i>
							<input type="text" name="nombre" id="nombre" class="validate" require pattern="[A-Za-záÁéÉíÍÓóÚúńŃ/s ]+">
							<label for="nombre">Complete Name</label>
						</div>

						<div class='input-field col s6'>
							<i class="material-icons prefix pink-text">phone</i>
							<input type="text" name="phone" id="phone" require>
							<label for="phone">phone:</label>
						</div>
					</div>
					<div class='row'>
						<div class='input-field col s6'>
							<i class="material-icons prefix pink-text">add_location</i>
							<input type="text" require name="address" id="address">
							<label for="address">Address</label>
						</div>

						<div class='input-field col s6'>
							<i class="material-icons prefix pink-text">mail</i>
							<input type="email" name="email" id="email" require validate>
							<label for="email">Email</label>
						</div>
					</div>
					<!-- <div class="input-field col s6">
							<select name="acesor">
								<option value="" disabled selected>Choose the acesor</option>
								<option value="Admin">Admin</option>
								<option value="Supervisor">Supevisor</option>
								<option value="Employe">Employe</option>
							</select>

						</div> -->

					<div class='row'>

						<div class='input-field col s6'>
							<i class="material-icons prefix pink-text">id</i>
							<input type="text" name="rfc" id="rfc" require>
							<label for="rfc">RFC/SSN</label>
						</div>

						<div class='file-field input-field col s6'>
							<div class='btn blue darken-2'>
								<i class="material-icons">add_a_photo</i>
								<input type="file" name="INE" id="INE" onchange="previewFile()">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
							</div>
						</div>


					</div>

					<div class='row'>
						<div class='col s4'></div>
						<div class="col s4">
							<div class="card">
								<div class="card-image">
									<img id="imagen" src="<?php //echo PATH_PERFIL;?>" class="responsive-img circle"
									 width="100" height="100">
								</div>
							</div>
						</div>
						<div class='col s4'></div>
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
							<button type="submit" name="button" class="waves-effect waves-light btn lime darken-1" id="btn_save">
								<span class="white-text">Accept</span>
							</button>

						</div>

					</div>


				</form>
			</div>
		</div>
	</div>

	<div class='col s1'></div>
</div>

<?php require_once PATH_APP.'/view/inc/footer.php';?>
<script src="<?php echo PATH_JS; ?>/validarRFC.js"></script>
<script src="<?php echo PATH_JS;?>/ajaxRfc-email.js"></script>
</body>

</html>