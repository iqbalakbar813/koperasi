<div class="content-wrapper">
<div class="container-fluid mb-2">
  <div class="row">
    <div class="col-lg-12">

      <div class="card p-2  shadow-sm">
        <h3 class="text-center">Tambah Data Anggota</h3>
        <hr>
        <form action="<?= base_url('admin/tambah_anggota') ?>" method="post" name="form_tambahanggota">
          <div class="form-row">
            <div class="form-group col-lg-12">
              <h5>ID Anggota</h5>
              <input type="text" class="form-control" name="id_anggota" value="<?= $id_anggota; ?>" readonly>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-lg-12">
              <h5>Nama Anggota</h5>
              <input type="text" class="form-control" name="nama" maxlength="50" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-lg-12">
              <h5>Alamat</h5>
              <textarea class="form-control" name="alamat" maxlength="150" rows="5" required></textarea>
            </div>
          </div>
          <input type="text" class="form-control" name="status" value="Aktif" required hidden>
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