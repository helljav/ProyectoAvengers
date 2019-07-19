<main class="page-content">


	<div class="container-fluid ">
		<h1 class="text-center">Usuarios</h1>
		<?= form_open('index.php/UsuariosController/saveUsuario')?>
		<?php
		  $user = array(
		    'name' => 'nombreUsuario',
		    'placeholder' => 'Escribe el correo del usuario: ejemplo@mail.com',
			  'class' =>  'form-control',
			  'required' => 'required',
			  'col'=>'col-12',
      //  'pattern' => //'^[_a-z0-9-]+(\.[_a-z0-9-]+)@[a-z0-9-]+(\.[a-z0-9-]+)(\.[a-z]{2,3})$',
        'maxlength' => '20'
		  );

			$pass = array(
				'name' => 'pass',
        'type' => 'password',
        'class' =>  'form-control',
			  'required' => 'required',
        'placeholder' => 'Escribe una contraseña',
        'maxlength' => '30'
			);

			$tipo = array(
				'name' => 'tipo',
        'type' => 'password',
        'class' =>  'form-control',
			  'required' => 'required',
        'placeholder' => 'Escribe una contraseña',
			);



		?>
		<div class="m-5" style="margin-top: 95px !important">

		  <div class="form-group">
        <?= form_label('Correo','user') ?>
				<?= form_input($user) ?>
        </div>
        <div class="form-group">
		     <?= form_label('Contraseña','password') ?>
		     <?= form_input($pass) ?>
		   </div>
        <div class="form-group">
		     <?= form_label('Contraseña','password') ?>
         <br>
  		   <?= form_dropdown ( 'Options' , $rol, 'Cerrado', 'class="my_dropdown"'); ?>
		   </div>
		   <?= form_submit(' ','Guardar','class="btn btn-dark"') ?>
		</div>
		<?= form_close() ?>
		<div class="container">

		  <table class="table" style="text-align:center">
		    <thead class="thead-dark">
		      <tr>
		        <th scope="col">#</th>
		        <th style="max-width: 209px; overflow: hidden;" scope="col">Usuario</th>
		        <th scope="col">Editar</th>
		        <th scope="col">Eliminar</th>
		      </tr>
		    </thead>
		    <tbody>
		  <?php if($users){ foreach ($users->result() as $item) {?>
		      <tr>
		        <th scope="row"> <?= $item->idUsuario;?> </th>
		        <td style="max-width: 209px; overflow: hidden;"> <?= $item->nombreUsuario;?> </td>
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
