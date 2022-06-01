<div class="content-wrapper">
<div class="container-fluid mb-2">
  <div class="row">
    <div class="col-lg-12">

      <div class="card p-2  shadow-sm">
        <h3 class="text-center">Ubah Data Anggota</h3>
        <hr>
        <form action="" method="post" name="form_ubahanggota">
          <div class="form-row">
            <div class="form-group col-lg-12">
              <h5>ID Anggota</h5>
              <input type="text" class="form-control" name="id_anggota" value="<?= $anggota['id_anggota']; ?>" readonly>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-lg-12">
              <h5>Nama Anggota</h5>
              <input type="text" class="form-control" name="nama" value="<?= $anggota['nama']; ?>" maxlength="50" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-lg-12">
              <h5>Alamat</h5>
              <textarea class="form-control" name="alamat" maxlength="150" rows="5" required><?= $anggota['alamat']; ?></textarea>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-lg-12">
              <h5>Status Anggota</h5>
              <select class="form-control" name="status" required>
                <option selected><?= $anggota['status']; ?></option>
                <option value="Aktif">Aktif</option>
                <option value="Tidak Aktif">Tidak Aktif</option>
              </select>
            </div>
          </div>
          <div class="text-center">
            <button type="submit" name="tambah" class="btn btn-success" style="width: 200px;">Input</button>
          </div>
          <div class="text-center mt-2">
            <a class="btn btn-primary" href="<?= base_url('admin/data_anggota');?>">Kembali</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>