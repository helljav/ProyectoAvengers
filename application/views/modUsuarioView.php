<main class="page-content">
  <h1 class="text-center">Modificar usuario</h1>
  <?= form_open('index.php/AddUserController/saveUsuario')?>
  <?php
    $user = array(
      'name' => 'nombreUsuario',
      'placeholder' => 'Escribe el correo del usuario: ejemplo@mail.com',
      'class' =>  'form-control',
      'required' => 'required',
      'col'=>'col-12',
    //  'pattern' => //'^[_a-z0-9-]+(\.[_a-z0-9-]+)@[a-z0-9-]+(\.[a-z0-9-]+)(\.[a-z]{2,3})$',
      'maxlength' => '30'
    );

    $nickname = array(
      'name' => 'nickname',
      'placeholder' => 'Escribe tu nombre',
      'class' =>  'form-control',
      'required' => 'required',
      'col'=>'col-12',
    //  'pattern' => //'^[_a-z0-9-]+(\.[_a-z0-9-]+)@[a-z0-9-]+(\.[a-z0-9-]+)(\.[a-z]{2,3})$',
      'maxlength' => '30'
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
      <?= form_label('Nombre de usuario','nickname') ?>
      <?= form_input($nickname) ?>
      </div>
      <div class="form-group">
       <?= form_label('Contraseña','password') ?>
       <?= form_input($pass) ?>
      </div>
     <?= form_submit(' ','Modificar','class="btn btn-dark"') ?>
  </div>
  <?= form_close() ?>
</main>
