<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_c extends CI_Controller {

	public function novo () {
		$this->load->helper('url');
		$this->load->model('usuarios_m');

		$this->usuarios_m->salva($this->input->post());

		$this->load->view('usuarios/novo.php');
	}
}