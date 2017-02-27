<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Cursos extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('mihelper');
        $this->load->model('Codigofacilito_model');
    }
    function index(){
        $data['cursos'] = $this->Codigofacilito_model->obtenerCurso();
        $this->load->view('pruebas/headers');
        //$this->load->view('pruebas/clientes');
        //$this->load->view('pruebas/vendedores');
        $this->load->view('cursos/cursos',$data);
        
    }
    function vendedores(){
        $this->load->view('pruebas/headers');
        $this->load->view('pruebas/vendedores');
    }
    function clientes(){
        $this->load->view('pruebas/headers');
        $this->load->view('pruebas/clientes');
    }
    function perfil(){
        $this->load->view('pruebas/headers');
        //$this->load->view('pruebas/clientes');
        $this->load->view('pruebas/perfil');
    }
    function nuevoCurso(){
         $this->load->view('pruebas/headers');
        $this->load->view('cursos/formulario');
    }
    function recibirdatos(){
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'videos' => $this->input->post('videos'),
        );
        $this->Codigofacilito_model->crearCurso($data);
        $this->load->library('menu',array('Soltimex','Clientes','Vendedores'));
        $data['mi_menu'] = $this->menu->construirmenu();
        $this->load->view('pruebas/headers');
        $this->load->view('pruebas/bienvenido',$data);
        $this->load->view('pruebas/footer');
    }
    
}
?>