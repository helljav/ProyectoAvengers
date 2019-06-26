<?php


class RespuestasController extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->helper('form');
	}

	public function index()
	{
		$users['id'] = $this->uri->segment(3);


		$this->load->view('template/headHTML');
		$this->load->library('menu',array('Preguntas','Cuestionarios'));
	  $data['menu'] = $this->menu->buildMenu();
	//	$users['users'] = array('','');
		$this->load->view('template/menuView',$data);
		$this->load->view('respuestasView',$users);
		$this->load->view('template/endHTML');



	}

	public function saveRespuesta(){
		redirect(base_url('/index.php/RespuestasController'));
	}
}
?>
