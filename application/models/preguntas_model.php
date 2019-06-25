<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Preguntas_model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();//Cargamos la base de datos
    }


    function crearPregunta($data){
        //preguntas es el nombre de la base de la tabla
        //El array corresponde a los datos a insertar
        $this->db->insert('preguntas',array(
            'idPregunta' => $data['idPregunta'],
            'pregunta' => $data['pregunta'], 
            'tipo' => $data['tipo']
        ));

    }

    function obtenerPreguntas(){
        $query = $this->db->get('preguntas');
        if($query->num_rows()>0) return $query;
        else return false;
        
    }
}

?>

