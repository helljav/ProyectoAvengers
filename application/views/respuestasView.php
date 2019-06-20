<main class="page-content">
	<div class="container-fluid ">
		<h1 class="text-center">Respuestas</h1>
		<!-- pone aquí /* form_open('/firstclass/recibe')*/ -->
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
		        <th scope="col">Name</th>
		        <th scope="col">Address</th>
		        <th scope="col">Cellphone</th>
		        <th scope="col">Delete</th>
		        <th scope="col">Edit</th>
		      </tr>
		    </thead>
		    <tbody>
		  <?php if($users){ foreach ($users->result() as $item) {?>
		      <tr>
		        <th scope="row"> <?= $item->id;?> </th>
		        <td> <?= $item->contenido;?> </td>
		        <td><a href='firstclass/deleteUser/<?= $item->id;?>'>Delete</a> </td>
		        <td><a href='firstclass/editUser/<?= $item->id;?>'>Edit</a> </td>
		      </tr>
		  <?php } } else{
		    echo '<p>No contiene ningun objeto por ahora</p>';
		  }?>
		  </tbody>
		  </table>
		</div>
	</div>
</main>
