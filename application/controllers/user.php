<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
       {
           
            parent::__construct(); 
            $this->load->database();
       }

	public function create()
	{
		//echo 'Aqui pots crear el teu usuari';
		$this->load->view('create');
		$this->db->select('titulo, contenido, $fecha');
		$query = $this->db->get('City');
		//if ($query->num_rows() > 0)
		
		//	foreach ($query->result() as $row) {
		//		echo $row->ID;
		//		echo $row->Name;
		//		echo $row->CountryCode;
		//	}
		
	}
	public function delete()
	{
		//echo 'Aqui pots borrar el teu usuari';
		$this->load->view('delete');
	}
	public function modify()
	{
		//echo 'Aqui pots modificar el teu usuari';
		$this->load->view('modify');
	}
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */
