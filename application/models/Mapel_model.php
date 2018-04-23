<?php 

/**
* 
*/
class Mapel_model extends CI_Model{
	function get_all(){
		$query = "SELECT * FROM mapel";
		return $this->db->query($query)->result_array();
	}	
	function simpan($data)
		{
			$this->db->insert('mapel',$data);
		}
	function delete($kode_mapel)
		{
			$this->db->where('Kode_mapel',$kode_mapel);
			$this->db->delete('mapel');
		}	
	function get_mapel($kode_mapel)
	{
		$this->db->where('Kode_mapel',$kode_mapel);
		$query = $this->db->get('mapel');
		return $query->row_array();
	}
	function update($kode_mapel,$data)
	{
		$this->db->where('Kode_mapel',$kode_mapel);
		$this->db->update('mapel',$data);
	}

}
 ?>