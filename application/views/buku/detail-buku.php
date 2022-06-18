        <!-- Product section-->
        <section class="py-5">
          <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-start">
              <div class="col-md-6">
                <img class="card-img-top mb-5 mb-md-0" src="<?php echo base_url(); ?>assets/img/upload/<?= $gambar; ?>" alt="..." style="object-fit: cover; max-width: 600px; max-height: 700px;" />
              </div>
              <div class="col-md-6">
                <h1 class="display-5 fw-bolder" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= $judul_buku ?>"><?= $judul_buku ?> (<?= $tahun ?>)</h1>
                <div class="fs-5">Penulis: <?= $pengarang ?></div>
                <div class="fs-5 mb-3">Penerbit:
                  <?= $penerbit ?>
                </div>
                <button type="button" class="btn btn-success mb-3" style="cursor: default !important;">
                  Tersedia <span class="badge bg-light text-dark rounded-pill"><?= $stok; ?></span>
                </button>
                <p class="lead"><?= $judul_buku; ?> Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>
                <div class="d-flex">
                  <!-- <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" /> -->
                  <?php
                  if ($stok < 1) {
                    echo "<div class='text-center'>
								<a class='btn btn-outline-danger disabled mt-auto'>
								<i class='fa-solid fa-ban'></i> Stok Habis</a>
							</div>";
                  } else {
                    echo "<div class='text-center'>
										<a class='btn btn-outline-success mt-auto' href='" . base_url('booking/tambahBooking/' . $id) . "'>
											<i class='fa-solid fa-book-bookmark'>
											</i> Booking Sekarang</a>
									</div>";
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
          </div>
        </section>