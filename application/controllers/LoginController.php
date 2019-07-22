<?php

class LoginController extends CI_Controller {



	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('login_model');
		$this->load->helper('cookie');
		$this->load->helper('email');
		}

	public function index()
	{
		$datosL['error'] =  0;
    $this->load->view('template/headHTML');
    $this->load->view('loginView.php',$datosL);
    $this->load->view('template/endHTML');
	}


  public function log(){
		$datosL['error'] =  0;
    $data = array(
			'idUsuario' => $this->input->post('usuario'),
      'password' => $this->input->post('password')
    );
      $res = $this->login_model->login($data);

      if($res==NULL){
        $datosL['error'] = -1 ;

        //$this->load->view('loginView',$datosL);
				$this->load->view('template/headHTML');
				$this->load->view('loginView.php',$datosL);
				$this->load->view('template/endHTML');
      }
			else{
				foreach ($res->result() as $item) {
 		    	$Rol= $item->idRol;
					$id = $item->idUsuario;

 		  	}
				if($Rol==2){//vista para el Analista
					$this->RedirectAnalista($id);

				}
				if($Rol==1){//vista para el administrador
						$this->RedirectAdministrador($id);
				}

			}

  }

	public function RedirectAnalista($id){
		$infoUser = $this->login_model->existeUsuario($id);
		foreach ($infoUser->result() as $item) {
			$nombre = $item->nombreUsuario;
		  $correo= $item->correo;

		}
		$this->load->view('template/headHTML');
		$this->load->library('menu',array('Respuestas','Preguntas','Cuestionarios'));
		$data['menu'] = $this->menu->buildMenu($nombre,$correo);

		$this->load->view('template/menuView',$data);
		//$this->load->view('welcome_view');
		$this->load->view('template/endHTML');
	}

	public function RedirectAdministrador($id){
		$infoUser = $this->login_model->existeUsuario($id);
		foreach ($infoUser->result() as $item) {
			$nombre = $item->nombreUsuario;
		  $correo= $item->correo;

		}
		$this->load->view('template/headHTML');
		$this->load->library('menu',array('Usuarios'));
		$data['menu'] = $this->menu->buildMenu($nombre,$correo);

		$this->load->view('template/menuView',$data);
		//$this->load->view('welcome_view');
		$this->load->view('template/endHTML');
	}

}
?>
