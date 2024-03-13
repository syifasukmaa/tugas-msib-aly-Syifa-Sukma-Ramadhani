<body>

  <h1 class="text-center mt-3 mb-3">
    PPDB Sekolah
  </h1>

  <section class="container">
    <form class="card " action="<?= BASE_URL; ?>/register/addBiodata" method="post">
      <div class="card-body">
        <div class="row">
          <div class="col-6">
            <div class="mb-3">
              <label class="form-label required">Nama</label>
              <input type="text" name="nama" class="form-control" placeholder="Masukkan nama calon siswa" required>
            </div>
            <div class="mb-3">
              <label class="form-label required">Alamat</label>
              <textarea class="form-control" name="alamat" placeholder="Masukkan alamat rumah" id="floatingTextarea" required></textarea>
            </div>
            <div class="mb-3">
              <label class="form-label required">Jenis Kelamin</label>
              <select class="form-select" name="jenis_kelamin" required>
                <option value="cowok">Laki-laki</option>
                <option value="cewek">Perempuan</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label required">Tanggal Lahir</label>
              <input type="date" class="form-control" name="tanggal_lahir" placeholder="Masukkan tanggal lahir">
            </div>
          </div>
          <div class="col-6">
            <div class="mb-3">
              <label class="form-label required">Nama Orang Tua</label>
              <input type="text" class="form-control" name="nama_ortu" placeholder="Masukkan nama Orang Tua" required>
            </div>
            <div class="mb-3">
              <label class="form-label required">Email Orang Tua</label>
              <input type="text" class="form-control" name="email_ortu" placeholder="Masukkan email Orang Tua">
            </div>
            <div class="mb-3">
              <label class="form-label required">No HP Orang Tua</label>
              <input type="number" class="form-control" name="nomor_ortu" placeholder="Masukkan No HP Orang Tua" required>
            </div>
            <div class="mb-3">
              <label class="form-label required">Asal Sekolah</label>
              <input type="text" class="form-control" name="asal_sekolah" placeholder="Masukkan Asal Sekolah" required>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </section>



</body>

</html>