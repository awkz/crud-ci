<?php 
/**
* 
*/
class Mapel extends CI_Controller{
	
	function index(){
		$this->load->model('Mapel_model');
		$data = $this->Mapel_model->get_all();
		$this->load->view('header');
		$this->load->view('mapel/index',[
			'data' => $data
		]);
		$this->load->view('footer');
	}
	function form(){
		$this->load->view('header');
		$this->load->view('mapel/form');
		$this->load->view('footer');
	}
	function simpan()
	{
		$this->load->model('Mapel_model');
		$data = array(
			'kode_mapel' => $this->input->post('kode_mapel'), 
			'mapel' => $this->input->post('mapel')			
		);
		$this->Mapel_model->simpan($data);
		echo json_encode(array("status" => TRUE));

	}
	function delete($kode_mapel)
	{
		$this->load->model('Mapel_model');
		$this->Mapel_model->delete($kode_mapel);
		redirect('mapel/index');
	}
	function edit($kode_mapel)
	{
		$this->load->model('Mapel_model');
		$data = $this->Mapel_model->get_mapel($kode_mapel);
		$this->load->view('header');
		$this->load->view('mapel/edit',[
			'data' => $data
		]);
		$this->load->view('footer');

	}
	function update($kode_mapel)
	{
		$this->load->model('Mapel_model');
		$kode_mapel = $this->input->post('kode_mapel');
		$data = array(
			'Kode_mapel' => $this->input->post('kode_mapel'), 
			'Mapel' => $this->input->post('mapel')
		);
		$this->Mapel_model->update($kode_mapel,$data);
		echo json_encode(array("status" => TRUE));
	}
}
?>