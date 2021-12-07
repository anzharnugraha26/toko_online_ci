<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid mt-4">
			<h4>Keranjang Belanja</h4>

			<table class="table table-bordered table-striped table-hover">
				<tr>
					<th>No</th>
					<th>Nama Product</th>
					<th>Jumlah</th>
					<th>Harga</th>
					<th>Sub Total</th>
				</tr>
				<?php $no = 1;
				foreach ($this->cart->contents() as $items) :
				?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $items['name'] ?></td>
						<td><?php echo $items['qty'] ?></td>
						<td>Rp. <?php echo number_format($items['price'], 0, ',', '.')  ?></td>
						<td>Rp. <?php echo number_format($items['subtotal'], 0, ',', '.')  ?></td>
					</tr>

				<?php endforeach; ?>
				<tr>
					<td colspan="4" align="right">Grand Total : </td>
					<td>Rp. <?php echo number_format($this->cart->total(), 0, ',', '.')  ?></td>
				</tr>
			</table>

			<div align="right">
				<a href="<?php echo base_url('dashboard/hapus_keranjang') ?>" class="btn btn-danger" onclick="return confirm('Anda yakin mau menghapus daftar belanja? ?')">
					<i class="fas fa-trash-alt"></i> Hapus Cart</a>
				<a href="<?php echo base_url('/') ?>" class="btn  btn-primary">
					<i class="fas fa-step-backward"></i> Lanjutkan Belanja</a>
				<a href="<?php echo base_url('dashboard/pembayaran') ?>" class="btn  btn-success">
					<i class="fas fa-money-bill-alt"></i> Check-Out</a>
			</div>
		</div>

	</main>
