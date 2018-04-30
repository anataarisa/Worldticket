<?php

class user extends CI_Controller{
	public function form()
	{
		$this->load->view('form_v');
	}
	public function index()
	{
		$this->load->view('welcome _message');
	}
	public function add()
	{
		echo $this->input->post("username");
	}
}