<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('index');
		
	}
	
	public function addCv()
	{
		$this->load->view('User/cv');
		
	}
	
	/****************Login */
	public function loginSign(){
		$this->load->Model('User/User');
		$this->load->helper('login_helper');

		$email = $this->input->post("email");
		$mdp = $this->input->post("mdp");
		$data = $this->User->getUser()->result_array();

		$value = verify($email,$mdp,$data);

		if($value == 0){
			redirect("adminController/index");
		}else if($value == 1){
			$data = $this->User->getUserByEmail($email,$mdp)->result_array();
			$this->session->set_userdata('idUser',$data[0]['idutilisateur']);

			redirect("accueilController/accueil");
		}else{
			$error['error'] = $this->errorMessage();
			$this->load->view("index",$error);
		}
	}

	public function errorMessage(){
		return "Verifier votre mot de passe ou votre email!";
	}
}
