<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- row ux-->
  <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card shadow h-100 py-2" style="background-color: #1f1f1f;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-white text-uppercase mb-1">Jumlah Administrator</div>
              <div class="h1 mb-0 font-weight-bold text-white"><?= $this->ModelUser->getUserWhere(['role_id' => 1, 'is_active' => 1])->num_rows(); ?></div>
            </div>
            <div class="col-auto">
              <a href="<?= base_url('user/anggota'); ?>"><i class="fas fa-users fa-3x text-light"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card shadow h-100 py-2" style="background-color: #1f1f1f;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-white text-uppercase mb-1">Stok Buku <br> Terdaftar</div>
              <div class="h1 mb-0 font-weight-bold text-white">
                <?php
                $where = ['stok != 0'];
                $totalstok = $this->ModelBuku->total('stok', $where);
                echo $totalstok;
                ?>
              </div>
            </div>
            <div class="col-auto">
              <a href="<?= base_url('buku'); ?>"><i class="fas fa-book fa-3x text-light"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card shadow h-100 py-2" style="background-color: #1f1f1f;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-white text-uppercase mb-1">Buku yang <br> dipinjam</div>
              <div class="h1 mb-0 font-weight-bold text-white">
                <?php
                $where = ['dipinjam != 0'];
                $totaldipinjam = $this->ModelBuku->total('dipinjam', $where);
                echo $totaldipinjam;
                ?>
              </div>
            </div>
            <div class="col-auto">
              <a href="<?= base_url('user'); ?>"><i class="fas fa-user-tag fa-3x text-light"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card shadow h-100 py-2" style="background-color: #1f1f1f;">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-md font-weight-bold text-white text-uppercase mb-1">Buku yang dibooking</div>
              <div class="h1 mb-0 font-weight-bold text-white">
                <?php
                $where = ['dibooking !=0'];
                $totaldibooking = $this->ModelBuku->total('dibooking', $where);
                echo $totaldibooking;
                ?>
              </div>
            </div>
            <div class="col-auto">
              <a href="<?= base_url('user'); ?>"><i class="fas fa-shopping-cart fa-3x text-light"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end row ux-->

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- row table-->
  <div class="row">
    <div class="table-responsive table-bordered col-12 ml-auto mr-auto mt-2">
      <div class="page-header">
        <span><i class="fas fa-users text-dark mt-2"></i> Data Administrator</span>
        <a class="text-dark float-right" href="<?= base_url('user/data_user'); ?>"><i class="fas fa-hand-pointer mt-2"></i> Tampilkan</a>
      </div>
      <table class="table mt-3">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <!-- <th>Aktif</th> -->
            <th>Tahun Daftar</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          foreach ($anggota as $a) { ?>
            <tr>
              <th><?= $i++; ?></th>
              <td><?= $a['nama']; ?></td>
              <td><?= $a['alamat']; ?></td>
              <td><?= $a['email']; ?></td>
              <!-- <td><?= $a['is_active']; ?></td> -->
              <td><?= date('Y', $a['tanggal_input']); ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>


    <div class="table-responsive table-bordered col-12 ml-auto mr-auto mt-3">
      <div class="page-header">
        <span><i class="fas fa-book text-dark mt-2"></i> Data Buku</span>
        <a class="text-dark float-right" href="<?php echo base_url('user/data_user'); ?>"><i class="fas fa-hand-pointer mt-2"></i> Tampilkan</a>
      </div>
      <div class="table-responsive">
        <table class="table mt-3" id="table-datatable">
          <thead>
            <tr>
              <th>#</th>
              <th>Judul Buku</th>
              <th>Pengarang</th>
              <th>Penerbit</th>
              <th>Tahun Terbit</th>
              <th>ISBN</th>
              <th>Stok</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            foreach ($buku as $b) { ?>
              <tr>
                <th><?= $i++; ?></th>
                <td><?= $b['judul_buku']; ?></td>
                <td><?= $b['pengarang']; ?></td>
                <td><?= $b['penerbit']; ?></td>
                <td><?= $b['tahun_terbit']; ?></td>
                <td><?= $b['isbn']; ?></td>
                <td><?= $b['stok']; ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>


  </div>
  <!-- end of row table-->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->