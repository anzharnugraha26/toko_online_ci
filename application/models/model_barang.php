<?php
class Model_barang extends CI_Model
{
	public function tampil_data()
	{
		return $this->db->get('tb_barang');
	}

	public function addData($data, $table)
	{
		$this->db->insert($table, $data);
	}

	public function delete($id)
	{
		$this->db->where('id_brg', $id);
		$this->db->delete('tb_barang');
	}

	public function find($id)
	{
		$result = $this->db->where('id_brg', $id)->limit(1)->get('tb_barang');
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return array();
		}
	}
}
