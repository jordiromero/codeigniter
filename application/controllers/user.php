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
	public function create()
	{
		//echo 'Aqui pots crear el teu usuari';
		$this->load->view('create');
	}
	public function delete($id)
	{
		//echo 'Aqui pots borrar el teu usuari';
		$this->load->view('delete');
	}
	public function modify($id)
	{
		//echo 'Aqui pots modificar el teu usuari';
		$this->load->view('modify');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
