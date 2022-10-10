<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	public function index(){
		$this->load_page('register');
	}

	public function openRegister(){
		$this->load_page('register');
	}
}
?>
