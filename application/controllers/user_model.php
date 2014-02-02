<?php 
class User_model extends CI_Controller {


function hello(){
	$this->load->model ('User_model');
	$hola = $this->User_model->hello();
	$this->load->view->('user',$hola);
    } 
}
 