<?php
Class m_brg extends CI_Model
{
	public function getAll(){
		$query = $this->db->get('tb_barang');
		return $query->result_array();
	}

	public function insert($data)
	{
		return $this->db->insert('tb_barang',$data);
	}
	public function getbarang($id)
	{
		$this->db->where('idbarang',$id);
		$query = $this->db->get('tb_barang');
		return $query->row_array();
	}
	public function update($id,$data)
	{
		$this->db->where('idbarang',$id);
		return $this->db->update('tb_barang',$data);
	}
	public function delete($id)
	{
		$this->db->where('idbarang',$id);
		$this->db->delete('tb_barang');
	}
}
?>
