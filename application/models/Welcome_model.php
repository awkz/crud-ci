<?php 

/**
* 
*/
class Welcome_model extends CI_Model{
	function countsiswa()
	{
		$query = $this->db->query('SELECT * FROM siswa');
		return $query->num_rows();
	}
	function countguru()
	{
		$query = $this->db->query('SELECT * FROM guru');
		return $query->num_rows();
	}
	function countmapel()
	{
		$query = $this->db->query('SELECT * FROM mapel');
		return $query->num_rows();
	}



}
 ?>