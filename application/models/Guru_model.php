<?php 

/**
* 
*/
class Guru_model extends CI_Model{
	function get_all(){
		$query = "SELECT * FROM guru";
		return $this->db->query($query)->result_array();
	}	
	function simpan($data)
		{
			$this->db->insert('guru',$data);
		}
	function delete($nip)
		{
			$this->db->where('NIP',$nip);
			$this->db->delete('guru');
		}	
	function get_guru($nip)
	{
		$this->db->where('NIP',$nip);
		$query = $this->db->get('guru');
		return $query->row_array();
	}
	function update($nip,$data)
	{
		$this->db->where('NIP',$nip);
		$this->db->update('guru',$data);
	}

}
 ?>