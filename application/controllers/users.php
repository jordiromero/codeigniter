<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		
		$this->load->model('user_model');
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('header');
		$this->load->view('inici');
		$this->load->view('footer');

	}

	public function createUser(){

		$this->load->view('header');
		$this->load->view('create_user');
		$this->load->view('footer');
		$id=$this->input->post('id');
		$nom=$this->input->post('nom');
		$data_naix=$this->input->post('data_naixement');
		$mail=$this->input->post('correu_electronic');
		if($id !=null && $nom !=null && $data_naix !=null && $mail !=null)
			$this->user_model->insertUser($id, $nom, $data_naix, $mail);
	}
	
	public function editUser(){

		$this->load->view('header');
		$this->load->view('edit_user');
		$this->load->view('footer');

	}

	public function deleteUser($id){

		$this->user_model->deleteUser($id);	
		$this->load->view('header');
		$this->load->view('delete_user');
		$this->load->view('footer');

	}

	public function listUser(){

		$this->load->view('header');
		$users ['query'] = $this->user_model->getUser();
				
		$this->load->view('list_user', $users);
		$this->load->view('footer');
	
		
	}
	public function getId($id){
	   $this->load->model('user_model', 'usuaris');
	   $data['json'] = $this->user_model->get($id);
       $this->load->view('json_view', $data);
	
	}
	public function profile(){
	   
       $this->load->view('profile');
       
	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
