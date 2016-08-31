<?php defined('BASEPATH') OR exit('No direct script access allowed');

class AuditeUiversitas extends CI_Controller {

	var $data = array(
		'id_type' 	=> 'admin',
		'username'	=> 'Admin001',
		'Load'	=> array(),
		);

	public function __construct(){
        parent::__construct();   
    }

    public function index(){
    	$this->load->view('auditeuiversitas/sidehead');
    	$this->load->view('auditeuiversitas/content');
    	$this->load->view('auditeuiversitas/footer');
    	$this->load->view('auditeuiversitas/script');
    } 
 }