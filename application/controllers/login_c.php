<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_c extends CI_Controller {

	function autenticar(){
		$this->load->model('usuarios_m');
		$email = $this->input->post('email');
		$senha = md5($this->input->post('senha'));

		$usuario = $this->usuarios_m->buscaPorEmailESenha($email, $senha);

		if ($usuario) {
			$this->session->set_userdata(array('usuario_logado', $usuario));
			$dados = array('mensagem' => 'logado com sucesso!');
		} else {
			$dados = array('mensagem' => 'usuario ou senha invalido!');
		}

		$this->load->view('login/autenticar', $dados);
	}
}