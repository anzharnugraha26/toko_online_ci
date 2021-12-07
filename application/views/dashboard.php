<div id="layoutSidenav_content">
	<main>
		<div class="container-fluid px-4">
			<!-- <div id="carouselExampleIndicators" class="carousel slide mt-3" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?php echo base_url() . 'uploads/slider/b1.jpg' ?>" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?php echo base_url() . 'uploads/slider/b2.jpg' ?>" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?php echo base_url() . 'uploads/slider/b3.jpg' ?>" class="d-block w-100" alt="...">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div> -->
			<div class="row justify-content-center">
				<?php foreach ($barang as $brg) : ?>
					<div class="col-md-3 mt-4 text-center justify-content-center">
						<div class="card" style="width: 18rem;">
							<img src="<?php echo base_url() . 'uploads/' . $brg->gambar ?>" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title"><?php echo $brg->nama_brg ?></h5>
								<p></p><small> <?php echo $brg->keterangan ?></small>
								<p><span class="badge bg-success">Rp. <?php echo $brg->harga ?></span></p>
								<a href="#" class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart"></i> Add To Cart</a>
								<a href="#" class="btn btn-sm btn-success"><i class="fas fa-info-circle"></i> View Detail</a>
							</div>
						</div>
					</div>

				<?php endforeach ?>

			</div>
		</div>
	</main>
