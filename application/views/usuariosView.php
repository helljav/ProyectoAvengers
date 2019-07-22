<main class="page-content">

	<h1 class="text-center" style="margin-bottom: 50px; margin-top: 30px;">Usuarios</h1>
	<div class="container-fluid ">

		<div class="container">
			<div class="col text-right">
				<a href="http://localhost:3308/ProyectoAvengers/index.php/AddUserController" class="btn btn-outline-success" style="margin: 5px;">Agregar</a>
			</div>
		  <table class="table" style="text-align:center">
		    <thead class="thead-dark">
		      <tr>
		        <th scope="col">#</th>
		        <th style="max-width: 209px; overflow: hidden;" scope="col">Usuario</th>
						<th style="max-width: 209px; overflow: hidden;" scope="col">Correo</th>
		        <th scope="col">Editar</th>
		        <th scope="col">Eliminar</th>
		      </tr>
		    </thead>
		    <tbody>
		  <?php if($users){ foreach ($users->result() as $item) {?>
		      <tr>
		        <th scope="row"> <?= $item->idUsuario;?> </th>
		        <td style="max-width: 209px; overflow: hidden;"> <?= $item->nombreUsuario;?> </td>
						<td style="max-width: 209px; overflow: hidden;"> <?= $item->correo;?> </td>
						<td><a href='UsuariosController/editar/<?= $item->idUsuario;?>'><i class="fas fa-pen ico-update"></i></a> </td>
		        <td><a href='UsuariosController/eliminar/<?= $item->idUsuario	;?>'><i class="fas fa-trash ico-delete"></i></a> </td>
		      </tr>
		  <?php } } else{
		    echo '<p>No contiene ningun objeto por ahora</p>';
		  }?>
		  </tbody>
		  </table>
		</div>
	</div>
</main>
