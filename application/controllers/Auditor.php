<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auditor extends CI_Controller {

	var $data = array(
		'id_type' 	=> 'admin',
		'username'	=> 'Admin001',
		'Load'	=> array(),
		);

	public function __construct(){
        parent::__construct();   
    }

    public function index(){
    	$this->load->view('auditor/sidehead');
    	$this->load->view('auditor/content');
    	$this->load->view('auditor/footer');
    	$this->load->view('auditor/script');
    } 
 }