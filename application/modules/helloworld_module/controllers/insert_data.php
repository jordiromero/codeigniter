<?php
 class Insert_data extends MX_Controller {

function __construct(){
	parent::__construct();

$this->load->database();

} 

public function delete()
 {
 $data = array(
'ID'=> 15007,
'Name'=> 'Parla',
'CountryCode'=> 'ESP'
);
$this->db->where('ID', 15007);
$this->db->delete('City');
echo 'Files esborrades ' . $this->db->affected_rows();
 }
 }
 ?>
