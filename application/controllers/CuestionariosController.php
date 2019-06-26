<?php


class CuestionariosController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
	}

	public function index()
	{
		$this->load->view('template/headHTML');
		$this->load->library('menu',array('Preguntas','Cuestionarios'));
	  $data['menu'] = $this->menu->buildMenu();
		$users = array('','');
		$this->load->view('template/menuView',$data);
		$this->load->view('cuestionariosView',$users);
		$this->load->view('template/endHTML');

	}
	public function saveCuestionario(){
		redirect(base_url('/index.php/CuestionariosController'));
	}
}
?>
