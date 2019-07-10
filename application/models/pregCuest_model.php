<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class PregCuest_model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();//Cargamos la base de datos
    }


    function crearPreguntasCuest($data){
        //cuestionarios es el nombre de la base de la tabla
        //El array corresponde a los datos a insertar
        $this->db->insert('preguntas_cuestionario',array(
            'idCuestionario' => $data['idCuestionario'],
            'idPregunta' => $data['idPregunta'],
            'secuencia' => $data['secuencia']
        ));

    }
    function obtenerPreguntasCuest($id){

      $query = $this->db->query('select c.idCuestionario, c.idPregunta, p.pregunta from preguntas p, preguntas_cuestionario c where idCuestionario='.$id.' and p.idPregunta=c.idPregunta');
      if($query->num_rows()>0) return $query;
      else return null;

    }

    function obtenerPregCuestionario($id){
        // query con where
        $this->db->where('idCuestionario',"$id");
        $query = $this->db->get('preguntas_cuestionario');
        if($query->num_rows()>0) return $query;
        else return false;

    }


    function Delete($idCuestionario,$idPregunta){
        // query con where
        $query = $this->db->query('delete from preguntas_cuestionario where idCuestionario='."$idCuestionario".' and idPregunta='."$idPregunta");

    }
}

?>
