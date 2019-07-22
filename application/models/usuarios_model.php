<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();//Cargamos la base de datos
    }


    function crearRespuesta($data){
        //preguntas es el nombre de la base de la tabla
        //El array corresponde a los datos a insertar
        $this->db->insert('respuestas',array(
            'idRespuesta' => $data['idRespuesta'],
            'idPregunta' => $data['idPregunta'],
            'respuesta' => $data['respuesta']
        ));

    }
    function obtenerUsuarios(){
        // query con where

        $query = $this->db->get('usuarios');
        if($query->num_rows()>0) return $query;
        else return false;

    }

    function eliminarUsuario($id){
    
         $this->db->where('isUsuario',$id);
         $this->delete('usuarios');
         //redirect();
    }

}

?>
