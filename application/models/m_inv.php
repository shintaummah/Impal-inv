<?php
Class m_inv extends CI_Model
{
	public function getAll(){
		$query = $this->db->get('inventaris');
		return $query->result_array();
	}

	public function insert($data)
	{
		return $this->db->insert('inventaris',$data);
	}
	public function getInventaris($id)
	{
		$this->db->where('idinventaris',$id);
		$query = $this->db->get('inventaris');
		return $query->row_array();
	}
	public function update($id,$data)
	{
		$this->db->where('idinventaris',$id);
		return $this->db->update('inventaris',$data);
	}
	public function delete($id)
	{
		$this->db->where('idinventaris',$id);
		$this->db->delete('inventaris');
	}
}
?>
