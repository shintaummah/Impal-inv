<?php
Class m_pinjaman extends CI_Model
{
	public function getAll(){
		$query = $this->db->get('tb_pinjaman');
		return $query->result_array();
	}

	public function insert($data)
	{
		return $this->db->insert('tb_pinjaman',$data);
	}
	public function getpinjaman($id)
	{
		$this->db->where('idpinjaman',$id);
		$query = $this->db->get('tb_pinjaman');
		return $query->row_array();
	}
	public function update($id,$data)
	{
		$this->db->where('idpinjaman',$id);
		return $this->db->update('tb_pinjaman',$data);
	}
	public function delete($id)
	{
		$this->db->where('idpinjaman',$id);
		$this->db->delete('tb_pinjaman');
	}
}
?>
