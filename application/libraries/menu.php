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

      public function buildMenu($nombre,$tipo){

        $ret_menu = '<div class="page-wrapper chiller-theme toggled">';
        $ret_menu .= ' <nav id="sidebar" class="sidebar-wrapper">';
        $ret_menu .= '   <div class="sidebar-content">';
        $ret_menu .= '     <div class="sidebar-brand"><a href="#">Proyecto Avengers</a></div>';
        $ret_menu .= '     <div class="sidebar-header">';
        $ret_menu .= '       <div class="user-pic"><img class="img-responsive img-rounded" src="http://4.bp.blogspot.com/_pv2PCwUS7Qg/TIit9gGLRrI/AAAAAAAAAgM/ioUuTwxBcKk/s1600/super+tux.png" alt="User picture"></div>';
         $ret_menu .= '       <div class="user-info"><span class="user-name">'.$nombre.'<br><strong>Apellido</strong></span><span class="user-role">'.$tipo.'</span></div>';
        $ret_menu .= '     </div>';
        $ret_menu .= '     <div class="sidebar-menu">';
        $ret_menu .= '       <ul>';
        $ret_menu .= '        <li class="header-menu"><span>General</span></li>';

        foreach($this->arr_menu as $opcion){
          // if(  $opcion=='Respuestas'){
          //   $ret_menu .= '     <li> <a href="http://localhost:3308/ProyectoAvengers/index.php/RespuestasController"> <i class="fa fa-book"></i> <span>'.$opcion.'</span><span class="badge badge-pill badge-primary">Beta</span></a></li>';
          // }else
          if($opcion=='Preguntas'){
            $ret_menu .= '     <li> <a href="http://localhost:3308/ProyectoAvengers/index.php/PreguntasController"> <i class="fa fa-chart-line"></i> <span>'.$opcion.'</span><span class="badge badge-pill badge-primary">Beta</span></a></li>';
          }else if($opcion=='Cuestionarios'){
            $ret_menu .= '     <li> <a href="http://localhost:3308/ProyectoAvengers/index.php/CuestionariosController"> <i class="fa fa-folder"></i> <span>'.$opcion.'</span><span class="badge badge-pill badge-primary">Beta</span></a></li>';
          }else if($opcion=='Usuarios'){
            $ret_menu .= '     <li> <a href="http://localhost:3308/ProyectoAvengers/index.php/UsuariosController"> <i class="fa fa-user"></i> <span>'.$opcion.'</span><span class="badge badge-pill badge-primary">Beta</span></a></li>';
          }

        }
        $ret_menu .= '        </ul></div></div>';
        $ret_menu .= '        <div class="sidebar-footer"><a href=""><i class="fa fa-power-off"></i></a></div></nav>';

        return $ret_menu;
      }
    }

?>
