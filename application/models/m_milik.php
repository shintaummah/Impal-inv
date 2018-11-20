<?php
Class m_milik extends CI_Model
{
	public function getAll(){
		$query = $this->db->get('tb_milik');
		return $query->result_array();
	}

	public function insert($data)
	{
		return $this->db->insert('tb_milik',$data);
	}
	public function getmilik($id)
	{
		$this->db->where('idinventaris',$id);
		$query = $this->db->get('tb_milik');
		return $query->row_array();
	}
	public function update($id,$data)
	{
		$this->db->where('idinventaris',$id);
		return $this->db->update('tb_milik',$data);
	}
	public function delete($id)
	{
		$this->db->where('idinventaris',$id);
		$this->db->delete('tb_milik');
	}
}
?>
