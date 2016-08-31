<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	var $data = array(
		'id_type' 	=> 'admin',
		'username'	=> 'Admin001',
		'Load'	=> array(),
		);

	public function __construct(){
        parent::__construct();   
    }

    public function index(){
    	$this->load->view('admin/sidehead');
    	$this->load->view('admin/content');
    	$this->load->view('admin/footer');
    	$this->load->view('admin/script');
    } 
 }