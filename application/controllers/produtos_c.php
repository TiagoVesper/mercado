<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produtos_c extends CI_Controller {

	public function index () {
		$this->load->helper(array('url', 'moeda_helper', 'form'));
		$this->load->model('produtos_m');

		$produtos = $this->produtos_m->buscaTodos();
		$dados = (array('produtos' => $produtos));
		$this->load->view('produtos/index.php', $dados);
	}
}