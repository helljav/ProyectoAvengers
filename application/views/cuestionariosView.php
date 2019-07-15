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
				'type'=>'text',
				'maxlength'=>"100",
				 'size'=>"15"
		  );
		  $descripcion = array(
		    'name' => 'descripcion',
		    'placeholder' => 'Ingrese una pequeña descripcion',
			'class' =>  'form-control',
			'required' => 'required',
			'type'=>'text',
			'maxlength'=>"100",
			'size'=>"15"
			 // 'cols'=>"4",
			 // 'rows' =>"4"
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

		  <table class="table" style="text-align:left">
		    <thead class="thead-dark">
		      <tr>
		        <th scope="col">#</th>
		        <th scope="col">Nombre</th>
		        <th scope="col">Descripcion</th>
		        <th scope="col">Modificar cuestionario</th>
		        <th scope="col">Agergar pregunta a cuestionario</th>
		        <th scope="col">Eliminar</th>
		      </tr>
		    </thead>
		    <tbody>
		  <?php if($users){ foreach ($users->result() as $item) {?>
		      <tr>
				<th scope="row"> <?= $item->idCuestionario;?> </th>
				<td> <?= $item->nombreCuestionario;?> </td>
		        <td> <?= $item->descripcion;?> </td>
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
