<main class="page-content">
	<div class="container-fluid ">
		<h1 class="text-center">Cuestionarios</h1>
		<?= form_open('index.php/CuestionariosController/saveCuestionario')?>
		<?php
		  $cuestionario = array(
		    'name' => 'cuestionario',
		    'placeholder' => 'Ingrese el nombre del cuestionario',
			'class' =>  'form-control',
			'required' => 'required',
			'maxlength' => "90"
		  );
		  $descripcion = array(
		    'name' => 'descripcion',
		    'placeholder' => 'Ingrese una pequeña descripcion',
			'class' =>  'form-control',
			'required' => 'required',
			'maxlength' => "90"
		  );

		?>
		<div class="m-5" style="margin-top: 95px !important">

		  <div class="form-group">
		     <?= form_label('Nombre del cuestionario','nombre') ?>
		     <?= form_input($cuestionario) ?>
		   </div>
		  <br>
		   <div class="form-group">
		     <?= form_label('Descripcion','desccripcion') ?>
		     <?= form_input($descripcion) ?>
		   </div>

		   <?= form_submit(' ','Guardar','class="btn btn-dark"') ?>
		</div>
		<?= form_close() ?>
		<div class="container">

		  <table class="table" style="text-align:center">
		    <thead class="thead-dark">
		      <tr>
		        <th scope="col">#</th>
		        <th scope="col">Nombre</th>
		        <th  scope="col">Descripción</th>
		        <th scope="col">Modificar cuestionario</th>
		        <th scope="col">Agregar pregunta a cuestionario</th>
		        <th scope="col">Eliminar</th>
		      </tr>
		    </thead>
		    <tbody>
		  <?php if($users){ foreach ($users->result() as $item) {?>
		      <tr>
				<th scope="row"> <?= $item->idCuestionario;?> </th>
						<td style="max-width: 209px; overflow: hidden;"> <?= $item->nombreCuestionario;?> </td>
		        <td style="max-width: 209px; overflow: hidden;"> <?= $item->descripcion;?> </td>
						<td><a href='CuestionariosController/editar/<?= $item->idCuestionario;?>'><i class="fas fa-pen ico-update"></i></a> </td>
						<td><a href='PregCuestController/index/<?= $item->idCuestionario;?>'><i class="far fa-plus-square ico-add"></i></a> </td>
		        <td><a href='CuestionariosController/eliminar/<?= $item->idCuestionario;?>'><i class="fas fa-trash ico-delete"></i></a> </td>
		      </tr>
		  <?php } } else{
		    echo '<p>No contiene ningun objeto por ahora</p>';
		  }?>
		  </tbody>
		  </table>
		</div>
	</div>
</main>
