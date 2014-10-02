<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produtos_c extends CI_Controller {

	public function index () {
		$this->load->helper(array('moeda_helper'));
		$this->load->model('produtos_m');

		$produtos = $this->produtos_m->buscaTodos();
		$dados = (array('produtos' => $produtos));
		$this->load->view('produtos/index', $dados);
	}

	public function formulario () {
		$this->load->view('produtos/formulario');

	}

	public function novo () {
		$this->load->model('produtos_m');
		$this->produtos_m->salva($this->input->post());
		$this->session->set_flashdata('success','Produto inserido com sucesso!');
		redirect('/');
	}
}