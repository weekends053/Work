<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Work extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('form_work');
	}
	public function create(){
		$data = array(
			'Company_Name' =>$this->input->post("Company_Name"),
			'Company_Address' =>$this->input->post("Company_Address"),
			'Profession' =>$this->input->post("Profession"),
			'Rank' =>$this->input->post("Rank"),
			'Company_Tel' =>$this->input->post("Company_Tel"),
		);
		$get['a'] = $data;
		$this->load->view('get_work',$get);
	}
	
}
