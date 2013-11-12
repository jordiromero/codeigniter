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

function insertUser($id, $nom, $data_naixement, $correu_electronic){
	$data = array(
	'id' => $id,
	'nom'=> $nom,
	'data_naixement'=>$data_naixement,
	'correu_electronic'=>$correu_electronic);
	return $this->db->insert('usuaris', $data);


}

}

?>
