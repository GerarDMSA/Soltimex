<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('mihelper');
        $this->load->model('Codigofacilito_model');
    }
    function index(){
        $this->load->library('menu',array('Soltimex','Clientes','Vendedores'));
        $data['mi_menu'] = $this->menu->construirmenu();
        $this->load->view('pruebas/headers');
        $this->load->view('pruebas/bienvenido',$data);
        $this->load->view('pruebas/footer');
        
    }

    
}
?>