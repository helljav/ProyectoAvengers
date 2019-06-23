<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('template/headHTML');
		$this->load->library('menu',array('Respuestas','Preguntas','Cuestionarios'));
<<<<<<< HEAD
	    $data['menu'] = $this->menu->buildMenu();
=======
	  $data['menu'] = $this->menu->buildMenu();
>>>>>>> b6524728f788cfb17bbe51abac2268fb090fb6c3

		$this->load->view('template/menuView',$data);
		//$this->load->view('welcome_view');
		$this->load->view('template/endHTML');
<<<<<<< HEAD
=======



>>>>>>> b6524728f788cfb17bbe51abac2268fb090fb6c3
	}
}
?>
