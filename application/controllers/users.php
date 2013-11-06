<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		
		$this->load->model('user_model');
	}
	
	public function create(){
		
		$this->load->view('create');
	}
	public function delete($id) {
		
		$this->load->view('delete');
	}
	public function modify($id){
		
		$this->load->view('modify');
	}
	public function listusers(){
		//$data['hello'] = $this->User_model->hello();
		$this->load->view('listusers');
		
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
