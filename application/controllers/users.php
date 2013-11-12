<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		
		$this->load->model('user_model');
	}
	
	public function create(){
		
		/*$id = $this->input->post('id'); 
		$nom = $this->input->post('nom');
		$data_naixement = $this->input->post('data_naixement');
		$correu_electronic = $this->input->post('correu_electronic');
		$this->user_model->insertUser($id, $nom, $data_naixement, $correu_electronic);
		$this->load->helper('form');*/
		$this->load->view('create');
		
	}
	public function delete($id) {
		
		$this->load->view('delete');
	}
	public function modify($id){
		
		$this->load->view('modify');
	}
	public function listusers(){
		
		$users ['query'] = $this->user_model->getUser();
				
		$this->load->view('listusers', $users);
	
		
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
