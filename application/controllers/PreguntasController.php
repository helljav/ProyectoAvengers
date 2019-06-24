<?php


class PreguntasController extends CI_Controller {

	private $tipo=" ";

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('preguntas_model');//El controlador es el orquestador y tambien se encarga de mandar a llamar a los modelos

	}

	public function index(){
		//var_dump($this->dropdown->post('ssss'));
		$this->load->view('template/headHTML');
		$this->load->library('menu',array('Respuestas','Preguntas','Cuestionarios'));
	    $data['menu'] = $this->menu->buildMenu();
		$preguntasTabla = array('','');
		$this->load->view('template/menuView',$data);
		$this->load->view('preguntasView',$preguntasTabla);
		$this->load->view('template/endHTML');
		
	}

	public function savePregunta(){
		$tipo=	$this->input->post('Options');
		$data = array(
            'idPregunta' => 'NULL',
            'pregunta' => $this->input->post('pregunta'),
            'tipo' => $this->input->post('Options')
        );
		$this->preguntas_model->crearPregunta($data);
		

		redirect(base_url('/index.php/PreguntasController'));
	}
}
?>
