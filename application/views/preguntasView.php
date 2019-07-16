<main class="page-content">
	<div class="container-fluid ">
		<h1 class="text-center">Preguntas</h1>
		<?= form_open('index.php/PreguntasController/savePregunta')?>
		<?php
		  $pregunta = array(
		    'name' => 'pregunta',
		    'placeholder' => 'Escribe una pregunta',
		    'class' =>  'form-control',
			'required' => 'required',
			'maxlength' => "115"
		  );
		?>
		<div class="m-5" style="margin-top: 95px !important">

		  <div class="form-group">
		     <?= form_label('Pregunta','pregunta') ?>
		     <?= form_input($pregunta) ?>
		   </div>

		   <?= form_submit(' ','Guardar','class="btn btn-dark"') ?>
		</div>
		<?= form_close() ?>
		<div class="container">

		  <table class="table" style="text-align: center">
		    <thead class="thead-dark">
		      <tr>
		        <th scope="col">#</th>
		        <th scope="col">Pregunta</th>
		        <th scope="col">Ver respuestas</th>
		        <th scope="col">Modificar pregunta</th>
		        <th scope="col">Eliminar</th>
		      </tr>
		    </thead>
		    <tbody>
		  <?php if($users){ foreach ($users->result() as $item) {?>
		      <tr>
		        <th scope="row"> <?= $item->idPregunta;?> </th>
		        <td> <?= $item->pregunta;?> </td>
		        <td><a href='RespuestasController/index/<?= $item->idPregunta;?>'><i class="fas fa-eye ico-see" ></i></a></td>
		        <td><a href='PreguntasController/eliminar/<?= $item->idPregunta;?>'><i class="fas fa-pen ico-update"></i></a> </td>
		        <td><a href='PreguntasController/editar/<?= $item->idPregunta;?>'><i class="fas fa-trash ico-delete"></i></a> </td>
		      </tr>
		  <?php } } else{
		    echo '<p>No contiene ningun objeto por ahora</p>';
		  }?>
		  </tbody>
		  </table>
		</div>
	</div>
</main>
