<?php
Class m_tnh extends CI_Model
{
	public function getAll(){
		$query = $this->db->get('tb_tanah');
		return $query->result_array();
	}

	public function insert($data)
	{
		return $this->db->insert('tb_tanah',$data);
	}
	public function getanah($id)
	{
		$this->db->where('idtanah',$id);
		$query = $this->db->get('tb_tanah');
		return $query->row_array();
	}
	public function update($id,$data)
	{
		$this->db->where('idtanah',$id);
		return $this->db->update('tb_tanah',$data);
	}
	public function delete($id)
	{
		$this->db->where('idtanah',$id);
		$this->db->delete('tb_tanah');
	}
}
?>
