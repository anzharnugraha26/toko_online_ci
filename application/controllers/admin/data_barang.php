<?php
class Data_barang extends CI_Controller
{
	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_barang', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_barang()
	{
		$nama_brg = $this->input->post('nama_brg');
		$kategori = $this->input->post('kategori');
		$keterangan = $this->input->post('keterangan');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		$gambar = $_FILES['gambar']['name'];
		if ($gambar = '') {
			# code...
		} else {
			$config['upload_path'] = './uploads';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				echo "gambar gagal di upload ";
			} else {
				$gambar = $this->upload->data('file_name');
			}
		}
		$data = array(
			'nama_brg' => $nama_brg,
			'kategori' => $kategori,
			'keterangan' => $keterangan,
			'harga' => $harga,
			'stok' => $stok,
			'gambar' => $gambar
		);
		$this->model_barang->addData($data, 'tb_barang');
		redirect('admin/data_barang');
	}
}
