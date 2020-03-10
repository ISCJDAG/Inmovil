<?php require_once PATH_APP.'/view/inc/header.php'; ?>

<!-- ============================ -->
<!--  TITULO -->
<!-- ============================ -->

<span class=" blue-grey-text darken-3 center">
	<h3>
		<?php  echo $datos['users']; ?>
	</h3>
</span>
<div class="row"></div>
<div class="row"></div>

<!-- =========================== -->
<!-- nav Buscador -->
<!-- =========================== -->
<div class="row">
	<div class="col s1 m2 l1">

	</div>
	<div class="col s10 m8 l10">
		<nav>
			<div class="nav-wrapper" style="background:#00bcd4;">
				<form>
					<div class="input-field">
						<input id="search_user" type="search" required>
						<label class="label-icon" for="search_user">
							<i class="material-icons">search</i>
						</label>
						<i class="material-icons">close</i>
					</div>
				</form>
			</div>
		</nav>
	</div>
	<div class="col s1 m2 l1">

	</div>
</div>

<br><br>
<!-- =========================== -->
<!-- button floating add -->
<!-- =========================== -->
<div class="fixed-action-btn">
	<a href="<?php echo PATH_URL;?>/user/Add_User" class="btn-floating btn-large waves-effect waves-light lime darken-1">
		<i class="large material-icons white-text">add</i>
	</a>
</div>
<!-- ========================= -->
<!-- TABLE USER -->
<!-- ========================== -->
<div class="row">

	<div class="container col s12 m12 l12">
		<div class="card z-depth-5">
			<table class="striped centered highlight responsive-table">
				<thead>
					<tr>
						<th>Ver</th>
						<th>ID</th>
						<th>Nombre</th>
						<th>Nick</th>
						<th>Tel</th>
						<th>Foto</th>
						<th>Nivel</th>
						<th>Activo</th>
						
						<th>Editar</th>
						<th>Eliminar</th>


					</tr>
				</thead>
				<tbody>
					
        <?php foreach ($datos['getUser'] as $user): ?>
					<tr>
						<td>
							<a href="#" class="btn-floating waves-effect waves-light light-green darken-1">
								<i class="material-icons white-text">visibility</i>
							</a>
						</td>

						<td>
							<?php echo  $user->idUser; ?>
						</td>
						<td>
							<?php echo $user->names;?>
						</td>
						<td>
							<?php echo $user->nick;?>
						</td>
						<td>
							<?php echo $user->phone;?>
						</td>
						<td>
							<img src=" <?php echo $user->photo;?>" class="responsive-img circle center"
							 width="50" />
						</td>
						<td>
							<?php echo $user->levels; ?>
						</td>
						<td>
							<?php if($user->blocks == 0):?>
							<a href="#" class="waves-effect waves-light light-green lighten-1">
								<i class="material-icons white-text">lock_open</i>
							</a>
							<?php endif; ?>
							<?php if($user->blocks != 0): ?>
							<a href="#" class="waves-effect waves-light red darken-1">
								<i class="material-icons white-text">lock</i>
							</a>
							<?php endif; ?>
						</td>
						
						<td>
							<a href="<?php echo PATH_URL.'/user/edit_user/'.$user->idUser; ?>" class="btn-floating waves-effect waves-light deep-purple darken-1">
								<i class="material-icons white-text">how_to_reg</i>
							</a>
						</td>
						<td>
							<a class="btn-floating waves-effect waves-light red darken-1" onclick="swal({
        title: '¿Are you Sure to delete the User!?',
        text: '¡If you delete the User you never recuperate the data!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancel',
        confirmButtonText: 'Yes!, Delete',
      }).then(
        function() {

          location.href='<?php echo PATH_URL.'/user/delete_user/'.$user->idUser?>';
        })">
								<i class="material-icons white-text">delete_sweep</i>
							</a>
						</td>
					</tr>
					<?php endforeach; ?>
			</table>
		</div>
	</div>



</div>

<?php require_once PATH_APP.'/view/inc/footer.php'; ?>


</script>
</body>

</html>