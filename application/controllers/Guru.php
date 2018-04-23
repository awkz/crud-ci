<?php 
/**
* 
*/
class Guru extends CI_Controller{
	
	function index(){
		$this->load->model('Guru_model');
		$data = $this->Guru_model->get_all();
		$this->load->view('header');
		$this->load->view('guru/index',[
			'data' => $data
		]);
		$this->load->view('footer');
	}
	function form(){
		$this->load->view('header');
		$this->load->view('guru/form');
		$this->load->view('footer');
	}
	function simpan()
	{
		$this->load->model('Guru_model');
		$data = array(
			'nip' => $this->input->post('nip'), 
			'nama' => $this->input->post('nama')			
		);
		$this->Guru_model->simpan($data);
		echo json_encode(array("status" => TRUE));

	}
	function delete($nip)
	{
		$this->load->model('Guru_model');
		$this->Guru_model->delete($nip);
		redirect('Guru/index');
	}
	function edit($nip)
	{
		$this->load->model('Guru_model');
		$data = $this->Guru_model->get_Guru($nip);
		$this->load->view('header');
		$this->load->view('guru/edit',[
			'data' => $data
		]);
		$this->load->view('footer');

	}
	function update($nip)
	{
		$this->load->model('Guru_model');
		$nip = $this->input->post('nip');
		$data = array(
			'nip' => $this->input->post('nip'), 
			'nama' => $this->input->post('nama')
		);
		$this->Guru_model->update($nip,$data);
		echo json_encode(array("status" => TRUE));
	}
}
?>