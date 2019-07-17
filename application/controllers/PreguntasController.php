<?php


class PreguntasController extends CI_Controller {

	private $tipo=" ";

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('preguntas_model');//El controlador es el orquestador y tambien se encarga de mandar a llamar a los modelos

	}

	public function index(){
		$this->load->view('template/headHTML');
		$this->load->library('menu',array('Preguntas','Cuestionarios','Usuarios'));
	  $data['menu'] = $this->menu->buildMenu();
		$preguntasTabla['users'] =  $this->preguntas_model->obtenerPreguntas();
		$this->load->view('template/menuView',$data);
		$this->load->view('preguntasView',$preguntasTabla);
		$this->load->view('template/endHTML');

	}



	public function savePregunta(){
		$pregunta =	$this->input->post('pegrunta');
		$data = array(
			'idPregunta' => 'NULL',
			//'nombrePregunta'=>'NULL',
            'pregunta' => $this->input->post('pregunta')

        );
		$this->preguntas_model->crearPregunta($data);
		redirect(base_url('/index.php/PreguntasController'));
	}
}
?>
