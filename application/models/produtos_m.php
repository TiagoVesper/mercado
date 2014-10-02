<?php
class Produtos_m extends CI_Model {

	public function buscaTodos() {
		return $this->db->get('produtos')->result_array();
	}

	public function salva($produtos) {
		$usuarioID = $this->session->userdata('usuario_logado');
		$produtos['usuario_id'] = $usuarioID['id'];
		$this->db->insert('produtos', $produtos);
	}
}