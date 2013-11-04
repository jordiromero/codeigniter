<?php
 class Insert_data extends CI_Controller {

function __construct(){
	parent::__construct();

$this->load->database();

} 

public function insert()
 {
 $data = array(
'ID'=> 15000,
'Name'=> 'Harlem',
'CountryCode'=> 'ESP'
);
$this->db->insert('City', $data);
//$this->db->affected_rows();
 }
 }
 ?>
