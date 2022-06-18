  <!-- Begin Page Content -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-9">
        <?= form_open_multipart('autentifikasi/ubahProfil'); ?>
        <div class="form-group row">
          <div class="col-sm-2">Gambar</div>
          <div class="col-sm-10">
            <div class="row flex-column">
              <div class="col-sm-3">
                <img src="<?= base_url('assets/img/profile/') . $image; ?>" class="img-thumbnail mb-3" alt="">
              </div>
              <div class="col-sm-9">
                <div class="input-group mb-3">
                  <input type="file" class="form-control" name="image" id="inputGroupFile02">
                  <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group row mb-3">
          <label for="email" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="email" value="<?= $email; ?>" readonly>
          </div>
        </div>
        <div class="form-group row mb-3">
          <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $user; ?>">
            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
        </div>
        <div class="form-group row justify-content-end">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Ubah</button>
            <button class="btn btn-dark" onclick="window.history.go(- 1)"> Kembali</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
  </div>
  <!-- End of Main Content -->