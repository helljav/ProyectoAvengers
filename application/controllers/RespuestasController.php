<?php

class RespuestasController extends CI_Controller {
	
    
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('respuestas_model');
		$this->load->helper('cookie');
		
	}
	public function set($id){
		$cookie= array(
			'name'   => 'segmento',
			'value'  => $id,
			'expire' => '3600',
		);
		$this->input->set_cookie($cookie);
	}
	public function get(){
		return $this->input->cookie('segmento',true);
	}
	public function index()
	{ 
		
		$idUri = $this->uri->segment(3);
		$this->set($idUri);
		//Desde la pagina preguntas mandamos el id de la pregunta para agregarle respuestas multiples
		$segmento =  $this->get();
		$users['id'] = $segmento;
		$this->load->view('template/headHTML');
		$this->load->library('menu',array('Preguntas','Cuestionarios'));
	    $data['menu'] = $this->menu->buildMenu();
		$users['users'] = NULL;
		$this->load->view('template/menuView',$data);
		$this->load->view('respuestasView',$users);
		$this->load->view('template/endHTML');
	}
	
	
	public function saveRespuesta(){
		$segmentoSave = $this->get();
		$data = array(
			'idRespuesta' => 'NULL',
			'idPregunta'=>$segmentoSave,
            'respuesta' => $this->input->post('respuesta')
           
        );
		$this->respuestas_model->crearRespuesta($data);
		redirect(base_url('/index.php/RespuestasController'));
	}
}
?>
