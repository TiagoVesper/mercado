<?php
class Usuarios_m extends CI_Model {

	public function salva($usuario) {
		$usuario['senha'] = md5($usuario['senha']);
		$this->db->insert('usuarios',$usuario);
	}

	public function buscaPorEmailESenha ($email, $senha) {
		$this->db->where('email', $email);
		$this->db->where('senha', $senha);
		$usuario = $this->db->get('usuarios')->row_array();
		return $usuario;
	}
}