<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model{


function __construct(){
	parent::__construct();

}
function hello(){

	return "Hello world";
}


function getUser(){

$this->load->database();
$this->db->query = ("select * from 'usuaris'");

}

}

?>
