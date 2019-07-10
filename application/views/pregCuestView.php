<?php
   foreach ($nombre->result() as $item) {
    $nom= $item->nombreCuestionario;
  }
?>
<main class="page-content">
  <div class="container-fluid ">
  	<h1 class="text-center">Cuestionario: <?= $nom?></h1>
    <div class="row" style="margin-top:50px">

      <div class="col">
        <h3 class="text-center" style="margin-bottom:20px;">Preguntas disponibles</h3>
        <div class="list-group iz">
          <?php if($preguntas){ foreach ($preguntas->result() as $item) {?>
            <a class="list-group-item list-group-item-action"><?= $item->idPregunta;?> - <?= $item->pregunta;?></a>
    		  <?php } } else{
    		    echo '<p>No contiene ningun objeto por ahora</p>';
    		  }?>
        </div>
      </div>

      <div class="col-1">
        <?= form_open('index.php/PregCuestController/setResInCues')?>
    		<?php
    		  $idPreguntaAdd = array(
    		    'name' => 'caja_add',
    		    'id' => 'caja_add',
    		  );
          $idn = array(
    		    'name' => 'idn',
    		    'id' => 'idn',
    		    'value' => $id,
    		  );
    		  ?>
        <?= form_input($idPreguntaAdd) ?>
        <?= form_input($idn) ?>

        <?= form_submit(' ','>','class="pasar-der align-middle"') ?>
        <!--<a href="" class="pasar align-middle"><i class="fas fa-chevron-right"></i></a>-->

        <?= form_close() ?>

        <?= form_open('index.php/PregCuestController/removeResInCues')?>
    		<?php
    		  $idPreguntaRem = array(
    		    'name' => 'caja_rem',
    		    'id' => 'caja_rem',
    		  );

    		  $idm = array(
    		    'name' => 'idm',
    		    'id' => 'idm',
    		    'value' => $id,
    		  );
    		  ?>
        <?= form_input($idPreguntaRem) ?>
        <?= form_input($idm) ?>

        <?= form_submit(' ','<','class="pasar-iz align-middle"') ?>
        <!--<a href="" class="pasar align-middle"><i class="fas fa-chevron-right"></i></a>-->

        <?= form_close() ?>
        <!--<a class="pasar align-middle"><i class="fas fa-chevron-left"></i></a>-->



      </div>
      <div class="col">
        <h3 class="text-center" style="margin-bottom:20px;">Preguntas seleccionadas</h3>
        <div class="list-group der">
          <?php if($preguntasSelected){ foreach ($preguntasSelected->result() as $item) {?>
            <a  class="list-group-item list-group-item-action"><?= $item->idPregunta;?> - <?= $item->idCuestionario;?></a>
    		  <?php } } else{
    		    echo '<p>No contiene ningun objeto por ahora</p>';
    		  }?>

        </div>
      </div>
    </div>

    <!--<input type="text" name="caja_valor" id="caja_valor" value="">-->


  </div>
</main>
