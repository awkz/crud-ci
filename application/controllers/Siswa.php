<?php 
/**
* 
*/
class Siswa extends CI_Controller{
	
	function index(){
		$this->load->model('Siswa_model');
		$data = $this->Siswa_model->get_all();
		$this->load->view('header');
		$this->load->view('siswa/siswa_list',[
			'data' => $data
		]);
		$this->load->view('footer');
	}
	function form(){
		$this->load->view('header');
		$this->load->view('siswa/siswa_form');
		$this->load->view('footer');
	}
	function simpan()
	{
		$this->load->model('Siswa_model');
		$data = array(
			'nisn' => $this->input->post('nisn'), 
			'nama' => $this->input->post('nama'), 
			'tempat_lahir' => $this->input->post('tempat_lahir'), 
			'tanggal_lahir' => $this->input->post('tanggal_lahir'), 
			'jenis_kelamin' => $this->input->post('jenis_kelamin') 
		);
		$this->Siswa_model->simpan($data);
		echo json_encode(array("status" => TRUE));

	}
	function delete($nisn)
	{
		$this->load->model('Siswa_model');
		$this->Siswa_model->delete($nisn);
		redirect('Siswa/index');
	}
	function edit($nisn)
	{
		$this->load->model('Siswa_model');
		$data = $this->Siswa_model->get_siswa($nisn);
		$this->load->view('header');
		$this->load->view('siswa/siswa_edit',[
			'data' => $data
		]);
		$this->load->view('footer');

	}
	function update($nisn)
	{
		$this->load->model('Siswa_model');
		$nisn = $this->input->post('nisn');
		$data = array(
			'nisn' => $this->input->post('nisn'), 
			'nama' => $this->input->post('nama'), 
			'tempat_lahir' => $this->input->post('tempat_lahir'), 
			'tanggal_lahir' => $this->input->post('tanggal_lahir'), 
			'jenis_kelamin' => $this->input->post('jenis_kelamin') 
		);
		$this->Siswa_model->update($nisn,$data);
		echo json_encode(array("status" => TRUE));
	}
}
?>