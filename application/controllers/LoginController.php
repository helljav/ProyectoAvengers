<?php

class LoginController extends CI_Controller {



	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('login_model');


	}

	public function index()
	{
    $this->load->view('template/headHTML');
    $this->load->view('loginView.php');
    $this->load->view('template/endHTML');
	}


  public function log(){
    $data = array(
			'idUsuario' => $this->input->post('usuario'),
      'password' => $this->input->post('password')
      );
      $res = $this->login_model->login($data);
      if($res==NULL){
        $datosL['error'] = "Datos Incorrectos";
        //$this->load->view('loginView',$datosL);  
        redirect(base_url('/index.php/LoginController/'));
        /*$datosL['error'] = "Datos Incorrectos";
        $this->load->view('loginView',$datosL);                 //Vista Login
        //$this->load->view*/
      }
      redirect(base_url('/index.php/Welcome'));
  }

}
?>
