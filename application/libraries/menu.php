<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');
    /**
     * Clase para menú
     */
    class Menu{

      private $arr_menu;

      public function __construct($arr){
        $this->arr_menu = $arr;
      }

      public function buildMenu(){

        $ret_menu = '<div class="page-wrapper chiller-theme toggled">';
        $ret_menu .= ' <nav id="sidebar" class="sidebar-wrapper">';
        $ret_menu .= '   <div class="sidebar-content">';
        $ret_menu .= '     <div class="sidebar-brand"><a href="#">Proyecto Avengers</a></div>';
        $ret_menu .= '     <div class="sidebar-header">';
        $ret_menu .= '       <div class="user-pic"><img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg" alt="User picture"></div>';
        $ret_menu .= '       <div class="user-info"><span class="user-name">Nombre <br><strong>Apellido</strong></span><span class="user-role">Administrator</span></div>';
        $ret_menu .= '     </div>';
        $ret_menu .= '     <div class="sidebar-menu">';
        $ret_menu .= '       <ul>';
        $ret_menu .= '        <li class="header-menu"><span>General</span></li>';

        foreach($this->arr_menu as $opcion){
          if($opcion=='Respuestas'){
            $ret_menu .= '     <li> <a href="http://localhost:3308/ProyectoAvengers/index.php/RespuestasController"> <i class="fa fa-book"></i> <span>'.$opcion.'</span><span class="badge badge-pill badge-primary">Beta</span></a></li>';
          }else if($opcion=='Preguntas'){
            $ret_menu .= '     <li> <a href="http://localhost:3308/ProyectoAvengers/index.php/PreguntasController"> <i class="fa fa-book"></i> <span>'.$opcion.'</span><span class="badge badge-pill badge-primary">Beta</span></a></li>';
          }else if($opcion=='Cuestionarios'){
            $ret_menu .= '     <li> <a href="http://localhost:3308/ProyectoAvengers/index.php/CuestionariosController"> <i class="fa fa-book"></i> <span>'.$opcion.'</span><span class="badge badge-pill badge-primary">Beta</span></a></li>';
          }

        }
        $ret_menu .= '        </ul></div></div>';
        $ret_menu .= '        <div class="sidebar-footer"><a href=""><i class="fa fa-power-off"></i></a></div></nav>';

        return $ret_menu;
      }
    }

?>
