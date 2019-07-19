<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();//Cargamos la base de datos
    }

    public function login($data){
    
        $this->db->select('idRol');
        $this->db->select('nombreUsuario');
         $this->db->where('nombreUsuario',$data['idUsuario']);
         $this->db->where('password',($data['password']));
         $this->db->or_where('correo',$data['idUsuario']);
         $this->db->where('password',$data['password']);
         $query = $this->db->get('usuarios');
        if($query->num_rows()>0) return $query;
        else return NULL;
    }

    public function existeUsuario($dataUsuario){
        $this->db->where('nombreUsuario',$dataUsuario['idUsuario']);
        $q1 = $this->db->get('login');
        if($q1->num_rows()>0){
            return $q1->row();
        }else{
            return false;
        }
    }



}

?>
