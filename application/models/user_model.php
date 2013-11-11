<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model{


function __construct(){
	parent::__construct();
$this->load->database();
}
function hello(){

	return "Hello world";
}


function getUser(){

//$this->load->database();
$query=$this->db->get('usuaris');

return $query;

}

function insertUser(){


}

}

?>
