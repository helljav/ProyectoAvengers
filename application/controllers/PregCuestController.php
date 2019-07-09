<?php

class PregCuestController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
    $this->load->model('preguntas_model');
	}

	public function index()
	{
    $users['id'] = $this->uri->segment(3);
		$this->load->view('template/headHTML');
		$this->load->library('menu',array('Preguntas','Cuestionarios'));
	  $data['menu'] = $this->menu->buildMenu();
		$users['users'] = '';
		$users['nombre'] = 'Yo soy un nombre';

    $users['preguntas'] = $this->preguntas_model->obtenerPreguntas();
    $users['preguntasSelected'] = null; //obtener todas las preguntas que contiene el '$this->uri->segment(3);' cuestionario

    /*quitar de  $users['preguntas']  toda pregunta que esta contenida en $users['preguntasSelected']*/
		/*

		para cada...


		*/

		$this->load->view('template/menuView',$data);
		$this->load->view('pregCuestView.php',$users);
		$this->load->view('template/endHTML');

	}
	public function removeResInCues(){

		/*Eliminar item pregunta cuestionario*/
		echo $this->input->post('caja_rem') . ' ' . $this->input->post('idm');

		/*Al final recargara la p[agina]*/
		//redirect(base_url('/index.php/PregCuestController'));
	}
	public function setResInCues(){
		/*Agregar item pregunta cuestionario*/
		echo $this->input->post('caja_add') . ' ' . $this->input->post('idn');
		/*Al final recargara la p[agina]*/
		//redirect(base_url('/index.php/PregCuestController'));
	}
}
?>
