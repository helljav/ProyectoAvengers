<main class="page-content">
	<div class="container-fluid ">
		<h1 class="text-center">Preguntas</h1>
		<?= form_open('index.php/PreguntasController/savePregunta')?>
		<?php
		  $pregunta = array(
		    'pregunta' => 'pregunta',
		    'placeholder' => 'Escribe una pregunta',
		    'class' =>  'form-control'
		  );
			$options = array(
			 'Cerrado' => 'Cerrado',
			 'Abierto' => 'Abierto');

		?>
		<div class="m-5" style="margin-top: 95px !important">

		  <div class="form-group">
		     <?= form_label('Pregunta','pregunta') ?>
		     <?= form_input($pregunta) ?>
		   </div>
		  <div class="form-group">

		     <?= form_label('Tipo','tipo') ?>
				 <div class="dropdown">
				 	<?= form_dropdown ( 'Options' , $options,'Cerrado', 'class="my_dropdown"'); ?>
				 </div>
		   </div>
		   <?= form_submit(' ','Guardar','class="btn btn-dark"') ?>
		</div>
		<?= form_close() ?>
		<div class="container">

		  <table class="table">
		    <thead class="thead-dark">
		      <tr>
		        <th scope="col">#</th>
		        <th scope="col">Pregunta</th>
		        <th scope="col">Tipo</th>
		        <th scope="col">Agregar Respuestas</th>
		        <th scope="col">Editar</th>
		        <th scope="col">Eliminar</th>
		      </tr>
		    </thead>
		    <tbody>
		  <?php if($users){ foreach ($users->result() as $item) {?>
		      <tr>
		        <th scope="row"> <?= $item->id;?> </th>
		        <td> <?= $item->contenido;?> </td>
		        <td><a href='PreguntasController/agregaRespuestas/<?= $item->id;?>'>Agregar</a> </td>
		        <td><a href='PreguntasController/eliminar/<?= $item->id;?>'>Editar</a> </td>
		        <td><a href='PreguntasController/editar/<?= $item->id;?>'>Eliminar</a> </td>
		      </tr>
		  <?php } } else{
		    echo '<p>No contiene ningun objeto por ahora</p>';
		  }?>
		  </tbody>
		  </table>
		</div>
	</div>
</main>
