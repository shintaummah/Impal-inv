<?php
Class m_asset extends CI_Model
{
	public function getAll(){
		$query = $this->db->get('tb_asset');
		return $query->result_array();
	}

	public function insert($data)
	{
		return $this->db->insert('tb_asset',$data);
	}
	public function getasset($id)
	{
		$this->db->where('idasset',$id);
		$query = $this->db->get('tb_asset');
		return $query->row_array();
	}
	public function update($id,$data)
	{
		$this->db->where('idasset',$id);
		return $this->db->update('tb_asset',$data);
	}
	public function delete($id)
	{
		$this->db->where('idasset',$id);
		$this->db->delete('tb_asset');
	}
}
?>
