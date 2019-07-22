<?php

class UsuariosController extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('usuarios_model');


	}
	public function index()
	{
    $nombre = "Programame :C";
		$tipo = "Super administrador";
		$users['id'] = $this->uri->segment(3);
		$this->load->view('template/headHTML');
		$this->load->library('menu',array('Usuarios'));
	  $data['menu'] = $this->menu->buildMenu($nombre,$tipo);
		$users['users'] = $this->usuarios_model->obtenerUsuarios();
    $users['rol'] = array( //Extraer todos los roles
      'idRol' => '1',
    );

		$this->load->view('template/menuView',$data);
		$this->load->view('usuariosView',$users);
		$this->load->view('template/endHTML');
	}

}
?>
