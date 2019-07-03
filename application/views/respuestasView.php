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
			'col'=>'col-12'
			
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
		        <th scope="row"> <?= $item->idRespuesta;?> </th>
		        <td> <?= $item->respuesta;?> </td>
						<td><a href='RespuestasController/editar/<?= $item->idRespuesta;?>'>Editar</a> </td>
		        <td><a href='RespuestasController/eliminar/<?= $item->idRespuesta;?>'>Eliminar</a> </td>
		      </tr>
		  <?php } } else{
		    echo '<p>No contiene ningun objeto por ahora</p>';
		  }?>
		  </tbody>
		  </table>
		</div>
	</div>
</main>
