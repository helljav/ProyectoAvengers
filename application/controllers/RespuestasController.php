<?php

class RespuestasController extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('respuestas_model');
		$this->load->helper('cookie');

	}
	public function index()
	{
		$users['id'] = $this->uri->segment(3);
		$this->load->view('template/headHTML');
		$this->load->library('menu',array('Preguntas','Cuestionarios'));
	    $data['menu'] = $this->menu->buildMenu();
		$users['users'] = $this->respuestas_model->obtenerRespuesta($this->uri->segment(3));
		$users['nombre'] = $this->respuestas_model->obtenerPregunta($this->uri->segment(3));
		$this->load->view('template/menuView',$data);
		$this->load->view('respuestasView',$users);
		$this->load->view('template/endHTML');
	}


	public function saveRespuesta(){
		$data = array(
			'idRespuesta' => 'NULL',
			'idPregunta'=> $this->input->post('id'),
            'respuesta' => $this->input->post('respuesta')

        );
				echo $this->input->post('id');
			
		$this->respuestas_model->crearRespuesta($data);
		redirect(base_url('/index.php/PreguntasController'));
	}
}
?>
