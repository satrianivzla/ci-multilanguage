<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function setLanguage()
	{
		$language = $this->input->post('lang');

		$this->session->set_userdata('lang', $language);

		redirect('Welcome');
	}
}
