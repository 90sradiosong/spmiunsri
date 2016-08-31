<?php defined('BASEPATH') OR exit('No direct script access allowed');

class AuditeProdi extends CI_Controller {

	var $data = array(
		'id_type' 	=> 'admin',
		'username'	=> 'Admin001',
		'Load'	=> array(),
		);

	public function __construct(){
        parent::__construct();   
    }

    public function index(){
    	$this->load->view('auditeprodi/sidehead');
    	$this->load->view('auditeprodi/content');
    	$this->load->view('auditeprodi/footer');
    	$this->load->view('auditeprodi/script');
    } 
 }