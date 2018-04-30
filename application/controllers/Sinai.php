<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sinai extends CI_Controller {

	public function index()
	{
		$data['reservacion'] = $this->load->view('template/reservacion',null,true);
		$data['footer']      = $this->load->view('template/footer',null,true);
		$this->load->view('index',$data);
	}

	public function about()
	{
		$data['reservacion'] = $this->load->view('template/reservacion',null,true);
		$data['footer']      = $this->load->view('template/footer',null,true);
		$this->load->view('about',$data);
	}

	public function portafolio()
	{
		$data['reservacion'] = $this->load->view('template/reservacion',null,true);
		$data['footer']      = $this->load->view('template/footer',null,true);
		$this->load->view('portfolio',$data);
	}

	public function contacto()
	{
		$data['reservacion'] = $this->load->view('template/reservacion',null,true);
		$data['footer']      = $this->load->view('template/footer',null,true);
		$this->load->view('contact',$data);
	}

	public function single()
	{
		$data['reservacion'] = $this->load->view('template/reservacion',null,true);
		$data['footer']      = $this->load->view('template/footer',null,true);
		$this->load->view('single',$data);
	}

	public function productos()
	{
		$data['reservacion'] = $this->load->view('template/reservacion',null,true);
		$data['footer']      = $this->load->view('template/footer',null,true);
		$this->load->view('productos',$data);
	}
}