<?php 
class User_model extends CI_Controller {


function hello(){
	$this->load->model ('User_model');
	$this->load->view('user');
	
	
	} 
}
?> 