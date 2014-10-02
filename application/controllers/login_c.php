<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_c extends CI_Controller {

	function autenticar(){
		$this->load->model('usuarios_m');
		$email = $this->input->post('email');
		$senha = md5($this->input->post('senha'));

		$usuario = $this->usuarios_m->buscaPorEmailESenha($email, $senha);

		if ($usuario) {
			$this->session->set_userdata(array('usuario_logado' => $usuario));
			$this->session->set_flashdata('success', 'logado com sucesso!');
		} else {
			$this->session->set_flashdata('danger', 'usuario ou senha invalido!');
		}

		redirect('/');
	}

	function logout() {
		$this->session->unset_userdata('usuario_logado');
		$this->session->set_flashdata('success', 'usuario deslogado com sucesso!');

		redirect('/');
	}
}