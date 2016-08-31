<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pimpinan extends CI_Controller {

	var $data = array(
		'id_type' 	=> 'admin',
		'username'	=> 'Admin001',
		'Load'	=> array(),
		);

	public function __construct(){
        parent::__construct();   
    }

    public function index(){
    	$this->load->view('pimpinan/sidehead');
    	$this->load->view('pimpinan/content');
    	$this->load->view('pimpinan/footer');
    	$this->load->view('pimpinan/script');
    } 
 }