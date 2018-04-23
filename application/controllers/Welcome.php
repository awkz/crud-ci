<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('Welcome_model');
		$siswa = $this->Welcome_model->countsiswa();
		$guru = $this->Welcome_model->countguru();
		$mapel = $this->Welcome_model->countmapel();
		$this->load->view('header');
		$this->load->view('welcome',[
			'siswa' => $siswa,
			'guru' => $guru,
			'mapel' => $mapel
		]);
		$this->load->view('footer');
	}
}
