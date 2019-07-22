<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('login_model');
		$this->load->helper('cookie');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		//$res = $this->login_model->existeUsuario($id);
		// if($res!=NULL){
		// 	foreach ($res->result() as $item) {
		 		$user['nombre']= get_cookie('idusuario');//$item->nombreUsuario;
		 		$user['tipo']  = "eje";// $item->correo;
		// 	}
		// }
		$this->load->view('template/headHTML');
		$this->load->library('menu',array('Respuestas','Preguntas','Cuestionarios','Usuarios'));
		$data['menu'] = $this->menu->buildMenu($user['nombre'],$user['tipo']);

		$this->load->view('template/menuView',$data);
		//$this->load->view('welcome_view');
		$this->load->view('template/endHTML');

	}
}
?>
