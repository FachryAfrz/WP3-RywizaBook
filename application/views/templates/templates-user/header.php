<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Rywiza book - <?= $judul ?></title>

  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="<?= base_url('assets/shop-assets/') ?>assets/favicon.ico" />

  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Fontawesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="<?= base_url('assets/shop-assets/') ?>css/styles.css" rel="stylesheet" />
</head>

<body>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1f1f1f;">
    <div class="container px-4 px-lg-5">
      <a class="navbar-brand" href="<?= base_url(); ?>">
        <i class="fa-solid fa-book" style="transform: rotate(-15deg);"></i> Rywiza Book </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mt-2 mt-lg-0" id="navbarSupportedContent">
        <!-- <ul class="navbar-nav mb-2 mb-lg-0 ms-lg-4">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#!">Home</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
        </ul> -->

        <!-- Topbar Search -->
        <form class="d-block form-inline me-auto my-2 my-md-0 mw-100 navbar-search">
          <div class="input-group">
            <input type="text" class="form-control bg-dark border-1 border-light text-white" placeholder="Cari buku..." aria-label="Search" aria-describedby="basic-addon2" />
            <div class="input-group-append">
              <button class="btn btn-light rounded-0" style="border-top-right-radius: .25rem !important; border-bottom-right-radius: .25rem !important;" type="button">
                <i class="bi bi-search text-dark"></i>
              </button>
            </div>
          </div>
        </form>

        <!-- Jika user belum login -->
        <?php
        if (empty($this->session->userdata('email'))) { ?>
          <a href="<?= base_url('autentifikasi'); ?>" class="btn btn-light mt-2 mt-lg-0">
            <i class="fa-solid fa-circle-user"></i> Daftar / Masuk</a>
        <?php } else { ?>

          <!-- Jika user sudah login -->
          <form class="d-flex ms-lg-2">
            <a class="btn btn-outline-light mt-2 mt-lg-0" type="submit" href="<?= base_url('booking'); ?>">
              <i class="fa-solid fa-book-open"></i>
              Buku
              <span class="badge bg-white text-dark ms-1 rounded-pill"><?= $this->ModelBooking->getDataWhere('temp', ['email_user' => $this->session->userData('email')])->num_rows(); ?></span>
            </a>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="<?= base_url('assets/img/profile/') . $image; ?>" alt="Default Profile Image" width="30px" class="rounded-1" style="max-height: 30px; object-fit: cover; object-position: top;"> <?= $user; ?></a>
              <ul class="dropdown-menu shadow-sm" aria-labelledby="navbarDropdown">
                <li>
                  <a class="dropdown-item" href="<?= base_url('autentifikasi/myprofil'); ?>">
                    <i class="fa-solid fa-circle-user"></i> Profil Saya</a>
                </li>
                <?php if ($role == 1) { ?>
                  <li>
                    <a class="dropdown-item" href="<?= base_url('admin/') ?>">
                      <i class="fa-solid fa-key"></i> Admin</a>
                  </li>
                <?php } ?>
                <li>
                  <a class="dropdown-item" href="#!">
                    <i class="fa-solid fa-gear"></i> Pengaturan</a>
                </li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li>
                  <button class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#logoutModal">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout</button>
                </li>
              </ul>
            </li>
          </ul>
        <?php } ?>
      </div>
    </div>
  </nav>
  <div class="container-md my-5" style="min-height: 70vh ;">