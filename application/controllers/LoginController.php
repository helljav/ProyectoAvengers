<?php

class LoginController extends CI_Controller {



	function __construct(){
		parent::__construct();
		$this->load->helper('form');


	}



	public function index()
	{
    $this->load->view('template/headHTML');
    $this->load->view('loginView.php');
    $this->load->view('template/endHTML');
	}


  public function log(){
    $data = array(
			'idPregunta' => $this->input->post('email'),
			//'nombrePregunta'=>'NULL',
            'pregunta' => $this->input->post('password')

        );
    echo $this->input->post('password');
    redirect(base_url('/index.php/Welcome'));
  }

}
?>
