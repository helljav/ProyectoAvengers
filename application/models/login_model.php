<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();//Cargamos la base de datos
    }

    public function login($data){
       $this->db->select('idRol');
       $this->db->select('idUsuario');
       $this->db->where('nombreUsuario',$data['idUsuario']);
       $this->db->where('password',($data['password']));
       $this->db->or_where('correo',$data['idUsuario']);
       $this->db->where('password',$data['password']);
       $query = $this->db->get('usuarios');
      if($query->num_rows()>0) return $query;
      else return NULL;
    }

    public function existeUsuario($id){
        $this->db->where('idUsuario',$id);
        $q1 = $this->db->get('usuarios');
        if($q1->num_rows()>0){
            return $q1;
        }else{
            return NULL;
        }
    }



}

?>
