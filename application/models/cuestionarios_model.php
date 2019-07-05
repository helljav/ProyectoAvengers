<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class _model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();//Cargamos la base de datos
    }


    function crearCuestionario($data){
        //preguntas es el nombre de la base de la tabla
        //El array corresponde a los datos a insertar
        $this->db->insert('cuestionarios',array(
            'idCuestionario' => $data['idCuestionario'],
            'idPregunta' => $data['idPregunta'], 
            'cuestionario' => $data['cuestionario']
        ));

    }
    function obtenerCuestionarios($id){
        // query con where
        $this->db->where('idCuestionario',"$id");
        $query = $this->db->get('cuestionarios');
        if($query->num_rows()>0) return $query;
        else return false;
        
    }

    // function obtenerPregunta($id){
    //     // query con where
    //     $this->db->where('idPregunta',"$id");
    //     $query = $this->db->get('preguntas');
    //     if($query->num_rows()>0) return $query;
    //     else return false;
        
    // }
}

?>
