<?php require_once PATH_APP.'/view/inc/header.php'; ?>

<!-- title -->
<span class="blue-grey-text darken-3 center">
	<h3>Clientes</h3>
</span>
<div class="row"></div>
<div class="row"></div>
<!-- 
	search nav 
-->
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

<div class='row'></div>
<div class='row'></div>

<!-- floatingbutton -->
<div class="fixed-action-btn">
	<a href="<?php echo PATH_URL; ?>/custumers/Add_new_Custumer" class="btn-floating btn-large waves-effect waves-light lime darken-1">
		<i class="material-icons">add</i>
	</a>
</div>
<!-- table -->
<div class='row'>
	<div class="container col s12 m12 l12">
	<div class='card z-depth-5'>
		<table class="centered striped responsive-table highlight">
			<thead>
				<tr>
					<th>Watch</th>
					<th>ID</th>
					<th>Complete Name</th>
					<th>Address</th>
					<th>Phone</th>
					<th>Acesor</th>
					<th>Update</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				<!-- 
				<?php // foreach($datos['custumer'] as $custumer):?>
				<tr>
					<td>
						<a href="" class="btn btn-floating waves-effect waves-light light-green darken-1" onclick="">
							<i class="material-icons">visibility</i>
						</a>
					</td>
					<td>
						<?php //echo $custumer->id;  ?>
					</td>
					<td>
						<?php //echo $custumer->complete_name; ?>
					</td>
					<td>
						<?php //echo $custumer->address; ?>
					</td>
					<td>
						<?php //echo $custumer->phone; ?>
					</td>
					<td>
						<?php //echo $custumer->acesor; ?>
					</td>
					<td>
						<a href="<?php echo PATH_URL.'/custumers/Update_custumer/'//.$custumer->id; ?>"
						 class="btn-floating waves-effect waves-light deep-purple darken-1">
							<i class="material-icons white-text">how_to_reg</i>
						</a>
					</td>
					<td>
						<a href="" class="btn-floating waves-effect waves-light red darken-1" onclick="swal({
							title: '¿Are you Sure to delete this custumer!?',
							text: '¡If you delete  you never recovery the data!',
							type: 'warning',
							showCancelButton: true,
							confirmButtonColor: '#3085d6',
							cancelButtonColor: '#d33',
							cancelButtonText: 'Cancel',
							confirmButtonText: 'Yes!, Delete',
						  }).then(
							function() {
					
							  location.href='<?php //echo PATH_URL.'/custumers/delete_custumer/'.$custumer->id?>';
							})">
							<i class="material-icons white-text">delete_sweep</i>
						</a>
					</td>

				</tr>

				<?php// endforeach;?>-->

				<!-- 
					====================
					tbody de ejemplo 
					====================
				-->
				<tr>
					<td>
						<a href="" class="btn btn-floating waves-effect waves-light light-green darken-1" onclick="">
							<i class="material-icons">visibility</i>
						</a>
					</td>
					<td>1</td>
					<td>Miranda Gomez Ortiz</td>
					<td>Calle Teros 5</td>
					<td>442 000 1010</td>
					<td>Josue Daniel Aguilera Gonzalez</td>
					<td>
					<a href="<?php echo PATH_URL.'/custumers/Update_custumer/1'//.$custumer->id; ?>"
						 class="btn-floating waves-effect waves-light deep-purple darken-1">
							<i class="material-icons white-text">how_to_reg</i>
						</a>
					</td>
					<td>
					<a  class="btn-floating waves-effect waves-light red darken-1" onclick="swal({
							title: '¿Estas seguro de que quieres eliminar al cliente!?',
							text: '¡Si lo elimnas no recuperaras la informacion!',
							type: 'warning',
							showCancelButton: true,
							confirmButtonColor: '#3085d6',
							cancelButtonColor: '#d33',
							cancelButtonText: 'Cancelar',
							confirmButtonText: 'Continuar!',
						  }).then(
							function() {
					
							  location.href='<?php //echo PATH_URL.'/custumers/delete_custumer/'.$custumer->id?>';
							})">
							<i class="material-icons white-text">delete_sweep</i>
						</a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="" class="btn btn-floating waves-effect waves-light light-green darken-1" onclick="">
							<i class="material-icons">visibility</i>
						</a>
					</td>
					<td>2</td>
					<td>Juan Onofre Aguilera</td>
					<td>Maria torres landa #34</td>
					<td>445 000 1010</td>
					<td>Fernando Guerrero Gonzalez</td>
					<td>
					<a href="<?php echo PATH_URL.'/custumers/Update_custumer/1'//.$custumer->id; ?>"
						 class="btn-floating waves-effect waves-light deep-purple darken-1">
							<i class="material-icons white-text">how_to_reg</i>
						</a>
					</td>
					<td>
					<a  class="btn-floating waves-effect waves-light red darken-1" onclick="swal({
							title: '¿Estas seguro de que quieres eliminar al cliente!?',
							text: '¡Si lo elimnas no recuperaras la informacion!',
							type: 'warning',
							showCancelButton: true,
							confirmButtonColor: '#3085d6',
							cancelButtonColor: '#d33',
							cancelButtonText: 'Cancelar',
							confirmButtonText: 'Continuar!',
						  }).then(
							function() {
					
							  location.href='<?php //echo PATH_URL.'/custumers/delete_custumer/'.$custumer->id?>';
							})">
							<i class="material-icons white-text">delete_sweep</i>
						</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	</div>
	

</div>


<?php  require_once PATH_APP.'/view/inc/footer.php';?>

</body>

</html>