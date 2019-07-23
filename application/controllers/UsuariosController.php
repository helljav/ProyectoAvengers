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


	public function eliminar($id){
		$id = $this->uri->segment(3);
		$this->usuarios_model->eliminarUsuario($id);
		$this->index();
	}
	public function editar($id){
		$id = $this->uri->segment(3);
		$res = $this->usuarios_model->obtenerUsuario($id);
		foreach ($res->result() as $item) {
			$usuario['idUsuario'] = $id;
			$usuario['nombre'] = $item->nombreUsuario;
			$usuario['password'] = $item->password;
			$usuario['correo'] = $item->correo;
		}
		$nombre = "Programame :C";
		$tipo = "Super administrador";
		$users['id'] = $this->uri->segment(3);
		$this->load->view('template/headHTML');
		$this->load->library('menu',array('Usuarios'));
		$data['menu'] = $this->menu->buildMenu($nombre,$tipo);

		$this->load->view('template/menuView',$data);
		$this->load->view('editUsuarioView',$usuario);
		$this->load->view('template/endHTML');
	}

	public function actualizaUsuario(){
		$data = array(
				'idUsuario' => $this->input->post('idUser'),
	      'correo'=> $this->input->post('nombreUsuario'),
        'password' => $this->input->post('pass'),
        'nombreUsuario' => $this->input->post('nickname')

    );

	//	echo $this->input->post('Options');
		$this->usuarios_model->actualizaUsuario($data);
		redirect(base_url('/index.php/UsuariosController'));
	}

}
?>
