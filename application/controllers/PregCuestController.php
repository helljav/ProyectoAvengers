<?php

class PregCuestController extends CI_Controller {



	function __construct(){
		parent::__construct();
		$this->load->helper('form');
    $this->load->model('preguntas_model');
		$this->load->model('cuestionarios_model');
		$this->load->model('pregCuest_model');

	}

	public function index()
	{
		$nombre = "Programame :C";
		$tipo = "Super administrador";
    $users['id'] = $this->uri->segment(3);// id del cuestionarios   from * PreguntasCuestionario where idCuestionario = $users['id']
		$this->load->view('template/headHTML');
		$this->load->library('menu',array('Preguntas','Cuestionarios'));
	  $data['menu'] = $this->menu->buildMenu($nombre,$tipo);
		$users['users'] = '';
		$users['nombre'] = $this->cuestionarios_model->obtenerCuestionario($users['id']);
    $users['preguntas'] = $this->preguntas_model->findAll($users['id']);

		//Este arreglo va a obtener el querizaso de arriba
    $users['preguntasSelected'] = $this->pregCuest_model->obtenerPreguntasCuest($users['id']); //obtener todas las preguntas que contiene el '$this->uri->segment(3);' cuestionario



		//var_dump($users['preguntasSelected']);
    /*quitar de  $users['preguntas']  toda pregunta que esta contenida en $users['preguntasSelected']*/
		/*

		para cada...


		*/

		$this->load->view('template/menuView',$data);
		$this->load->view('pregCuestView.php',$users);
		$this->load->view('template/endHTML');

	}
	public function removeResInCues(){
		$idCuestionario = $this->input->post('idm');
		/*Eliminar item pregunta cuestionario*/

		if(NULL!=$this->input->post('caja_rem')){
			$this->pregCuest_model->Delete($idCuestionario,$this->input->post('caja_rem') );
		}
		/*Al final recargara la p[agina]*/
		redirect(base_url('/index.php/PregCuestController/index/'."$idCuestionario"));
	}







	//Funcion que se ejecuta cuando le das el boton '>'
	public function setResInCues(){
		$idCuestionario = $this->input->post('idn');
		/*Agregar item pregunta cuestionario*/
		$data = array(
			'idPregunta' => $this->input->post('caja_add'),
			'idCuestionario'=>"$idCuestionario",
			'secuencia' => "1"
		);
		if (NULL!=$idCuestionario = $this->input->post('idn')) {
			$this->pregCuest_model->crearPreguntasCuest($data);
		}
		//echo $this->input->post('caja_add') . ' ' . $this->input->post('idn');
		/*Al final recargara la p[agina]*/
		redirect(base_url('/index.php/PregCuestController/index/'."$idCuestionario"));
	}
}
?>
