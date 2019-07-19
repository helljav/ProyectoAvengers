<?php

class LoginController extends CI_Controller {



	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('login_model');
		$this->load->helper(array('cookie','url'));
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
				$this->load->view('template/headHTML');
				$this->load->view('loginView.php',$datosL);
				$this->load->view('template/endHTML');
      }
			else{
				foreach ($res->result() as $item) {
 		    	$Rol= $item->idRol;
					$nombreUsuario = $item->nombreUsuario;
 		  	}
				if($Rol==2){//vista para el Analista
						redirect(base_url('/index.php/Welcome'));
				}

			}

  }

}
?>
