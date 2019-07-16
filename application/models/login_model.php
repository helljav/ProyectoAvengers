<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();//Cargamos la base de datos
    }

    public function login($data){
        $this->db->where('nombreUsuario',$data['idUsuario']);
        $this->db->where('password',($data['password']));
        $q = $this->db->get('usuarios');
        if($q->num_rows()>0){
            return $q->result();
        }else{
            return false;
        }
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

    /*function actualizarPassword($data){
        $datos = array(
            'password'=> md5($data['password']));
            $this->db->where('idUsuario',data['idUsuario']);
            $query = $this->db->update('login',$datos);
    }*/


    /*function verificaUsuario($data){
        //cuestionarios es el nombre de la base de la tabla
        //El array corresponde a los datos a insertar
        $this->db->insert('preguntas_cuestionario',array(
            'idCuestionario' => $data['idCuestionario'],
            'idPregunta' => $data['idPregunta'],
            'secuencia' => $data['secuencia']
        ));
    
    }*/


}

?>
