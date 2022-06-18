<!-- Header-->
<!-- <header class="bg-dark py-5">
	<div class="container px-4 px-lg-5 my-5">
		<div class="text-center text-white">
			<h1 class="display-4 fw-bolder">Shop in style</h1>
			<p class="lead fw-normal text-white-50 mb-0">
				With this shop hompeage template
			</p>
		</div>
	</div>
</header> -->
<!-- Section-->
<section>

	<div class="container px-4 px-lg-5 mt-5">
		<?= $this->session->flashdata('pesan'); ?>
		<div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-xl-4 justify-content-center">

			<?php foreach ($buku as $buku) { ?>

				<div class="col mb-5">
					<div class="card h-100">

						<!-- Terlaris badge-->
						<!-- <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
							<i class="fa-solid fa-fire-flame-curved"></i>
							Terlaris
						</div> -->

						<!-- Terlaris badge-->
						<?php if ($buku->rating >= 4) { ?>
							<div class="badge bg-danger text-light position-absolute shadow" style="top: 0.5rem; right: 0.5rem; font-size: .875rem;">
								<i class="fa-solid fa-fire-flame-curved"></i>
								Terlaris
							</div>
						<?php } ?>

						<!-- Product image-->
						<img class="card-img-top" src="<?= base_url(); ?>assets/img/upload/<?= $buku->image; ?>" alt="..." style="object-fit: fill; max-width: 450px; min-height: 400px; max-height: 500px;" loading="lazy" />

						<!-- Product details-->
						<div class="card-body p-4">
							<div class="text-center">

								<!-- Book title-->
								<h5 class="fw-bolder" style="
							display: -webkit-box;
							-webkit-line-clamp: 2;
							-webkit-box-orient: vertical;  
							overflow: hidden;
							min-height: 50px;">
									<?= $buku->judul_buku ?> (<?= $buku->tahun_terbit ?>)</h5>

								<!-- Author name-->
								<span class="mb-2" style="
							display: -webkit-box;
							-webkit-line-clamp: 1;
							-webkit-box-orient: vertical;  
							overflow: hidden;
							">
									<?= $buku->pengarang ?></span>

								<!-- Book reviews-->
								<!-- <div class="d-flex justify-content-center small text-warning mb-2">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star-half-stroke"></i>
								</div> -->

								<?php if ($buku->rating == 0) { ?>

									<div class="d-flex justify-content-center small text-warning mb-2">
										<i class="fa-regular fa-star"></i>
										<i class="fa-regular fa-star"></i>
										<i class="fa-regular fa-star"></i>
										<i class="fa-regular fa-star"></i>
										<i class="fa-regular fa-star"></i>
									</div>

								<?php }
								if ($buku->rating == 1) { ?>
									<div class="d-flex justify-content-center small text-warning mb-2">
										<i class="fa-solid fa-star"></i>
										<i class="fa-regular fa-star"></i>
										<i class="fa-regular fa-star"></i>
										<i class="fa-regular fa-star"></i>
										<i class="fa-regular fa-star"></i>
									</div>
								<?php }
								if ($buku->rating == 1.5) { ?>
									<div class="d-flex justify-content-center small text-warning mb-2">
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star-half-stroke"></i>
										<i class="fa-regular fa-star"></i>
										<i class="fa-regular fa-star"></i>
										<i class="fa-regular fa-star"></i>
									</div>
								<?php }
								if ($buku->rating == 2) { ?>
									<div class="d-flex justify-content-center small text-warning mb-2">
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-regular fa-star"></i>
										<i class="fa-regular fa-star"></i>
										<i class="fa-regular fa-star"></i>
									</div>
								<?php }
								if ($buku->rating == 2.5) { ?>
									<div class="d-flex justify-content-center small text-warning mb-2">
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star-half-stroke"></i>
										<i class="fa-regular fa-star"></i>
										<i class="fa-regular fa-star"></i>
									</div>
								<?php }
								if ($buku->rating == 3) { ?>
									<div class="d-flex justify-content-center small text-warning mb-2">
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-regular fa-star"></i>
										<i class="fa-regular fa-star"></i>
									</div>
								<?php }
								if ($buku->rating == 3.5) { ?>
									<div class="d-flex justify-content-center small text-warning mb-2">
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star-half-stroke"></i>
										<i class="fa-regular fa-star"></i>
									</div>
								<?php }
								if ($buku->rating == 4) { ?>
									<div class="d-flex justify-content-center small text-warning mb-2">
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-regular fa-star"></i>
									</div>
								<?php }
								if ($buku->rating == 4.5) { ?>
									<div class="d-flex justify-content-center small text-warning mb-2">
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star-half-stroke"></i>
									</div>
								<?php }
								if ($buku->rating == 5) { ?>
									<div class="d-flex justify-content-center small text-warning mb-2">
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
									</div>
								<?php } ?>

							</div>
						</div>

						<!-- Product actions-->
						<div class="card-footer p-4 pt-0 border-top-0 bg-transparent d-flex flex-column gap-2">
							<?php
							if ($buku->stok < 1) {
								echo "<div class='text-center'>
								<a class='btn btn-outline-danger disabled mt-auto'>
								<i class='fa-solid fa-ban'></i> Stok Habis</a>
							</div>";
							} else {
								echo "<div class='text-center'>
										<a class='btn btn-outline-success mt-auto' href='" . base_url('booking/tambahBooking/' . $buku->id) . "'>
											<i class='fa-solid fa-book-bookmark'>
											</i> Booking</a>
									</div>";
							}
							?>
							<div class="text-center">
								<a class="btn btn-outline-primary mt-auto" href="<?= base_url('home/detailBuku/' . $buku->id); ?>"><i class="fa-solid fa-eye"></i> Lihat Detail</a>
							</div>
						</div>
					</div>
				</div>

			<?php } ?>

		</div>
	</div>
	</div>
</section>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Yakin mau keluar?</h5>
			</div>
			<div class="modal-body">Pilih "Logout" di bawah jika kamu yakin sudah selesai.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
				<a class="btn btn-danger" href="<?= base_url('autentifikasi/logout'); ?>">Logout</a>
			</div>
		</div>
	</div>
</div>