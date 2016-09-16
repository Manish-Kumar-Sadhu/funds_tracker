<?php


class Instrument_type extends CI_Controller{

    function __construct(){
        parent::__construct();        
        if($this->session->logged_in != 'YES'){
            $this->load->view('login_page');
        }
        $this->load->model('instrument_type_model');        
    }
    
    function index(){
        $this->load->view('nav_bars/header');
        $this->load->view('nav_bars/left_nav');
        $this->load->view('pages/bank_pages/instrument_type');
        $this->load->view('nav_bars/footer');
    }
    
    function add_instrument_type(){
        $instrument_type_id = $this->instrument_type_model->add_instrument_type();
        echo json_encode($instrument_type_id);
    }
    
    function get_instrument_type(){
        $instrument_type_information = $this->instrument_type_model->get_instrument_type();
        echo json_encode($instrument_type_information);
    }
    
}
