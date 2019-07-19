<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();//Cargamos la base de datos
    }


    function crearUsuario($data){
        //preguntas es el nombre de la base de la tabla
        //El array corresponde a los datos a insertar
        $this->db->insert('usuarios',array(
            'idUsuario' => $data['idUsario'],
            'idRol' => $data['idRol'],
            'nombreUsuario' => $data['nombreUsuario'],
            'password' => $data['password']
        ));



    }
    function obtenerUsuarios(){
        // query con where

        $query = $this->db->get('usuarios');
        if($query->num_rows()>0) return $query;
        else return false;

    }

}

?>
