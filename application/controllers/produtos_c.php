<?php
class Produtos_c extends CI_Controller {

	public function index () {
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('moeda_helper');
		$this->load->model('produtos_m');

		$produtos = $this->produtos_m->buscaTodos();



		$dados = (array('produtos' => $produtos));



		$this->load->view('produtos/index.php', $dados);
	}
}