<main class="page-content">
	<div class="container-fluid ">
		<h1 class="text-center">Respuestas</h1>
		<?= form_open('index.php/RespuestasController/saveRespuesta')?>
		<?php
		  $respuesta = array(
		    'respuesta' => 'respuesta',
		    'placeholder' => 'No',
		    'class' =>  'form-control'
		  );

		?>
		<div class="m-5" style="margin-top: 95px !important">

		  <div class="form-group">
		     <?= form_label('Contenido de la respuesta','respuesta') ?>
		     <?= form_input($respuesta) ?>
		   </div>
		   <?= form_submit(' ','Guardar','class="btn btn-dark"') ?>
		</div>
		<?= form_close() ?>
		<div class="container">

		  <table class="table">
		    <thead class="thead-dark">
		      <tr>
		        <th scope="col">#</th>
		        <th scope="col">Respuesta</th>
		        <th scope="col">Editar</th>
		        <th scope="col">Eliminar</th>
		      </tr>
		    </thead>
		    <tbody>
		  <?php if($users){ foreach ($users->result() as $item) {?>
		      <tr>
		        <th scope="row"> <?= $item->id;?> </th>
		        <td> <?= $item->contenido;?> </td>
						<td><a href='RespuestasController/editar/<?= $item->id;?>'>Editar</a> </td>
		        <td><a href='RespuestasController/eliminar/<?= $item->id;?>'>Eliminar</a> </td>
		      </tr>
		  <?php } } else{
		    echo '<p>No contiene ningun objeto por ahora</p>';
		  }?>
		  </tbody>
		  </table>
		</div>
	</div>
</main>
