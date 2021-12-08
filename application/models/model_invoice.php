<?php

class Model_invoice extends CI_Model
{
	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$invoice = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'tanggal_pesan' => date('Y-m-d H:i:s'),
			'batas_bayar' => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
		);
		$this->db->insert('tb_invoice' , $invoice);
		$id_invoice = $this->db->insert_id();
		foreach ($this->cart->contents() as $item){
			$data = array(
				'id_invoice'=> $id_invoice ,
				'id_brg' =>$item['id'],
				'nama_barang' => $item['name'],
				'jumlah' => $item['qty'],
				'harga' => $item['price']
			);

		}
	}
}
