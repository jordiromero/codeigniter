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
		//$this->User_model->hello();
		$users = $this->user_model->getUser();
		$user_view = array('array_usuaris' =>$users);		


		$this->load->view('listusers', $user_view);
		
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
