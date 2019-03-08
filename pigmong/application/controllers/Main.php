<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		redirect('/Main/start','refresh');	
	}

	public function start()
	{
		$this->load->view('login/startpage');
	}

	public function login()
	{
		$this->load->view('login/login');
	}

	public function join()
	{
		$this->load->view('login/join');
	}

	public function needs(){
		$this->load->view('include/header');
		$this->load->view('needs/needList');
		$this->load->view('include/footer');
	}

	public function missions(){
		$this->load->view('include/header');
		$this->load->view('missions/missionList');
		$this->load->view('include/footer');
	}

	public function saving(){
		$this->load->view('include/header');
		$this->load->view('saving/saveMoney');
		$this->load->view('include/footer');
	}
}
