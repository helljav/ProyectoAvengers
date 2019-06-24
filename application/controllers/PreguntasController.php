<?php


class PreguntasController extends CI_Controller {

	private $tipo=" ";

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
	}

	public function index(){
		
		//var_dump($this->dropdown->post('pequeño'));
		$this->load->view('template/headHTML');
		$this->load->library('menu',array('Respuestas','Preguntas','Cuestionarios'));
	    //$data['menu'] = $this->menu->buildMenu();
		$preguntasTabla = array('','');
		$this->load->view('template/menuView',$data);
		$this->load->view('preguntasView',$preguntasTabla);
		$this->load->view('template/endHTML');
		
	}

	public function savePregunta(){
		
		
		
		var_dump($this->input->post('Abierto'));
		$data = array(
            'idPregunta' => 'NULL',
            'pregunta' => $this->input->post('pregunta'),
            'tipo' => $this->input->post('videos')
        );
        //$this->preguntas_model->crearCurso($data);

		redirect(base_url('/index.php/PreguntasController'));
	}
}
?>
