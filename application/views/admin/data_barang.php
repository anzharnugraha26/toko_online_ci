<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid mt-4">
			<button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
				<i class="fas fa-plus-square"></i> Tambah Barang
			</button>
			<div class="card mb-4 mt-4">
				<div class="card-header">
					<h2>Data Barang</h2>
				</div>
				<div class="card-body">
					<table id="datatablesSimple">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Keterangan</th>
								<th>Kategori</th>
								<th>Harga</th>
								<th>Stok</th>
								<th colspan="3">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($barang as $brg) :
							?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $brg->nama_brg ?></td>
									<td><?php echo $brg->keterangan ?></td>
									<td><?php echo $brg->kategori ?></td>
									<td>Rp. <?php echo $brg->harga ?></td>
									<td><?php echo $brg->stok ?></td>
									<td>
										<a href="#" class="btn btn-success btn-sm" id="edit" onclick="submit()" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="far fa-edit"></i> Edit</a>
									</td>
									<td>
										<a href="" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i> View</a>
									</td>
									<td>
										<a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</a>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>

		</div>

		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<form method="post" action="<?php echo base_url(). 'admin/data_barang/tambah_barang' ?> " enctype="multipart/form-data">
						<div class="modal-body">
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Nama</label>
								<input type="text" class="form-control" id="exampleInputEmail1" name="nama_brg" aria-describedby="emailHelp">

							</div>
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Kategori</label>
								<input type="text" class="form-control" id="exampleInputEmail1" name="kategori" aria-describedby="emailHelp">

							</div>
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Stok</label>
								<input type="text" class="form-control" id="exampleInputEmail1" name="stok" aria-describedby="emailHelp">
							</div>
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Harga</label>
								<input type="number" class="form-control" id="exampleInputEmail1" name="harga" aria-describedby="emailHelp">
							</div>
							<div class="mb-3">
								<label for="exampleInputPassword1" class="form-label">Keterangan</label>
								<textarea class="form-control" id="exampleInputPassword1" name="keterangan"> </textarea>
							</div>
							<div class="mb-3">
								<label for="exampleInputEmail1" class="form-label">Image</label>
								<input type="file" class="form-control" id="exampleInputEmail1" name="gambar" aria-describedby="emailHelp">
							</div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Simpan Barang</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>

	<script>
		$(document).ready(function(){
			$("a#edit").click(function(){
				alert('test');
			})
		});
	</script>
