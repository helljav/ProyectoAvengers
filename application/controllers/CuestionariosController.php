<?php


class CuestionariosController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('cuestionarios_model');//El controlador es el orquestador y tambien se encarga de mandar a llamar a los modelos
	}

	public function index()
	{
		$this->load->view('template/headHTML');
		$this->load->library('menu',array('Preguntas','Cuestionarios'));
	  	$data['menu'] = $this->menu->buildMenu();
		$users ['users'] = $this->cuestionarios_model->obtenerCuestionarios();
		$this->load->view('template/menuView',$data);
		$this->load->view('cuestionariosView',$users);
		$this->load->view('template/endHTML');

	}
	public function saveCuestionario(){
		//$cuestionario =	$this->input->post('cuestionario');
		$data = array(
			'idCuestionario' => 'NULL',
			'cuestionario' => $this->input->post('cuestionario'),
			'descripcion' => $this->input->post('descripcion')
           
		);
		$this->cuestionarios_model->crearCuestionario($data);
		redirect(base_url('/index.php/CuestionariosController'));
	}
}
?>
