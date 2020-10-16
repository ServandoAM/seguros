<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">
<!--a href="index.php?view=newcontact" class="btn btn-default"><i class='fa fa-male'></i> Nuevo Contacto</a-->
	<a href="index.php?view=newcontact" class="btn btn-default"><i class="fa fa-compass" aria-hidden="true"></i> Prospecto</a>
	<a href="index.php?view=contractor" class="btn btn-default"><i class='fa fa-male'></i> Contratante</a>
	<a href="index.php?view=#" class="btn btn-default"><i class="fa fa-file" aria-hidden="true"></i> Poliza</a>
	<a href="index.php?view=#" class="btn btn-default"><i class="fa fa-file-archive-o" aria-hidden="true"></i> Archivos</a>
<!--<div class="btn-group pull-right">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-download"></i> Descargar <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="report/medicss-word.php">Word 2007 (.docx)</a></li>
  </ul>
</div> -->
</div>
		<h1>Ficha de Clientes</h1>
<br>
		<?php

		$users = ContactData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre completo</th>
			<th>Direccion</th>
			<th>Email</th>
			<th>Telefono</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->name." ".$user->lastname; ?></td>
				<td><?php echo $user->address; ?></td>
				<td><?php echo $user->email; ?></td>
				<td><?php echo $user->phone; ?></td>
				<td style="width:130px;">
				<a href="index.php?view=editcontact&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="index.php?view=delcontact&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">Eliminar</a>

				</td>
				</tr>
				<?php

			}



		}else{
			echo "<p class='alert alert-danger'>No hay Contactos</p>";
		}


		?>

<!--https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=-33.8670522,151.1957362&radius=500&types=food&name=harbour&key=170882176-->
	</div>
</div>