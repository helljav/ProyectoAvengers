<?php

class AddUserController extends CI_Controller {


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
		$this->load->library('menu',array('Preguntas','Cuestionarios','Usuarios'));
	  $data['menu'] = $this->menu->buildMenu($nombre,$tipo);

    $users['idRol'] = array( //Extraer todos los roles
      '1' => 'Super Usuario',
    );

		$this->load->view('template/menuView',$data);
		$this->load->view('addUsuarioView',$users);
		$this->load->view('template/endHTML');
	}

	public function saveUsuario(){

		$data = array(
	      'idUsario' => 'NULL',
        'idRol' => $this->input->post('Options'),
	      'nombreUsuario'=> $this->input->post('nombreUsuario'),
        'password' => $this->input->post('pass'),
        'nickname' => $this->input->post('nickname')

    );

	//	echo $this->input->post('Options');
		$this->usuarios_model->crearUsuario($data);

		redirect(base_url('/index.php/UsuariosController'));

	 }
}
?>
