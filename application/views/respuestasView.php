<main class="page-content">

	<?php
		 foreach ($nombre->result() as $item) {
			$nom= $item->pregunta;
		}
	?>
	<div class="container-fluid ">
		<h1 class="text-center">Respuestas de pregunta: <span><?= $nom?></span></h1>
		<?= form_open('index.php/RespuestasController/saveRespuesta')?>
		<?php
		  $respuesta = array(
		    'name' => 'respuesta',
		    'placeholder' => 'Escribe el contenido  de la respuesta',
			'class' =>  'form-control',
			'required' => 'required',
			'col'=>'col-12',
			'maxlength' => "100"

		  );
			$ids = array(
				'name' => 'id',
				'value' => $id,
				'style' => 'visibility: hidden;'
			);
		?>
		<div class="m-5" style="margin-top: 95px !important">

		  <div class="form-group">
				<?= form_input($ids) ?>
				<br>
		     <?= form_label('Contenido de la respuesta','respuesta') ?>
		     <?= form_input($respuesta) ?>
		   </div>
		   <?= form_submit(' ','Guardar','class="btn btn-dark"') ?>
		</div>
		<?= form_close() ?>
		<div class="container">

		  <table class="table" style="text-align:center">
		    <thead class="thead-dark">
		      <tr>
		        <th style="max-width: 209px; overflow: hidden;" scope="col">#</th>
		        <th style="max-width: 209px; overflow: hidden;" scope="col">Respuesta</th>
		        <th scope="col">Editar</th>
		        <th scope="col">Eliminar</th>
		      </tr>
		    </thead>
		    <tbody>
		  <?php if($users){ foreach ($users->result() as $item) {?>
		      <tr>
		        <th scope="row"> <?= $item->idRespuesta;?> </th>
		        <td> <?= $item->respuesta;?> </td>
						<td><a href='RespuestasController/editar/<?= $item->idRespuesta;?>'><i class="fas fa-pen ico-update"></i></a> </td>
		        <td><a href='RespuestasController/eliminar/<?= $item->idRespuesta;?>'><i class="fas fa-trash ico-delete"></i></a> </td>
		      </tr>
		  <?php } } else{
		    echo '<p>No contiene ningun objeto por ahora</p>';
		  }?>
		  </tbody>
		  </table>
		</div>
	</div>
</main>
