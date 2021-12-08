<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid pt-4">
			<div class="row">
				<div class="col-md-2">

				</div>
				<div class="col-md-8">
					<div class="btn btn-sm btn-success">
						<?php
						$grand_total = 0;
						if ($keranjang = $this->cart->contents()) {
							foreach ($keranjang as $item) {
								$grand_total = $grand_total + $item['subtotal'];
							}

							echo "<h4>Total Belanja Anda :  Rp. " . number_format($grand_total, 0, ',', '.');
						}
						?>
					</div>
					<br><br>
					<h3>Input Alamat Pengiriman </h3>
					<form action="<?php echo base_url('dashboard/proses_pesanan') ?>" method="post">
						<div class="mb-3 form-group">
							<label for="exampleInputEmail1" class="form-label">Nama Lengkap Anda</label>
							<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" placeholder="Nama Lengkap Anda">
						</div>
						<div class="mb-3 form-group">
							<label for="exampleInputEmail1" class="form-label">No Telpon Anda</label>
							<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomor Telpon Anda">
						</div>
						<div class="mb-3 form-group">
							<label for="exampleInputEmail1" class="form-label">Alamat Lengkap Anda</label>
							<textarea name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
						</div>
						<div class="mb-3 form-group">
							<label for="exampleInputEmail1" class="form-label">Jasa Pengiriman</label>
							<select class="form-control form-select" id="exampleInputEmail1" aria-describedby="emailHelp">
								<option value="">JNE</option>
								<option value="">POS</option>
								<option value="">tIKI</option>
							</select>
						</div>
						<div class="mb-3 form-group">
							<label for="exampleInputEmail1" class="form-label">Pilih Bank</label>
							<select class="form-control form-select" id="exampleInputEmail1" aria-describedby="emailHelp">
								<option value="">BCA</option>
								<option value="">BRI</option>
								<option value="">MANDIRI</option>
							</select>
						</div>
						<div class="row">
							<div class="col-md-4">
								<button  type="submit" class="btn btn-primary">Pesan</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-2">

				</div>
			</div>
		</div>
	</main>
