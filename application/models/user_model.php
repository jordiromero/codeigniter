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
function get($id){
	$result = $this->db->get_where('usuaris', array('id' => $id));
    return $result->row();

}

/*function updateUser($id){
	
	
	$data = array(
	'id' => $id);
    $this->db->where('id', $id);
    $this->db->update('usuaris', $data);
	
	
	
}*/

function deleteUser($id){
	
	
	$data = array(
	'id' => $id);
	$this->db->where('id', $id);
	$this->db->delete('usuaris', $data);
}

}

?>
