<?php 

/**
* 
*/
class Siswa_model extends CI_Model{
	function get_all(){
		$query = "SELECT * FROM siswa";
		return $this->db->query($query)->result_array();
	}
	function simpan($data)
		{
			$this->db->insert('siswa',$data);
		}
	function delete($nisn)
		{
			$this->db->where('nisn',$nisn);
			$this->db->delete('siswa');
		}	
	function get_siswa($nisn)
	{
		$this->db->where('nisn',$nisn);
		$query = $this->db->get('siswa');
		return $query->row_array();
	}
	function update($nisn,$data)
	{
		$this->db->where('nisn',$nisn);
		$this->db->update('siswa',$data);
	}
}
 ?>