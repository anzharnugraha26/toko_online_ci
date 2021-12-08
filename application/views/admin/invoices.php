<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid mt-4" >
			<div class="row">
				<div class="col">
					<div class="card">
						<div class="card-header">
							<h3>Invoice Pemesanan Produk</h3>
						</div>
						<div class="card-body">
							<table class="table table-bordered table-hover table-striped">
								<tr>
									<th>Id Invoice</th>
									<th>Nama Pemesan</th>
									<th>Alamat Pengiriman</th>
									<th>Tanggal Pemesanan</th>
									<th>Batas Pembayaran</th>
									<th>Aksi</th>
								</tr>
								<?php foreach($invoice as $inv): ?>
								<tr>
									<td><?php echo $inv->id ?></td>
									<td><?php echo $inv->nama ?></td>
									<td><?php echo $inv->alamat ?></td>
									<td><?php echo $inv->tanggal_pesan ?></td>
									<td><?php echo $inv->batas_bayar ?></td>
									<td>
										<a href="">Detail</a>
									</td>
								</tr>
								<?php endforeach; ?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
