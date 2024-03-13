<div class="card">
  <div class="card-body">
    <div class="card-body">
      <div class="row">
        <div class="col-6">
          <?php if ($data["biodata"]) : ?>
            <div class="mb-3">
              <label class="form-label required fw-semibold">Nama</label>
              <p><?= $data["biodata"]["nama"]; ?></p>
            </div>
            <div class="mb-3">
              <label class="form-label required fw-semibold">Alamat</label>
              <p><?= $data["biodata"]["alamat"]; ?></p>
            </div>
            <div class="mb-3">
              <label class="form-label required fw-semibold">Jenis Kelamin</label>
              <p><?= $data["biodata"]["jenis_kelamin"]; ?></p>
            </div>
            <div class="mb-3">
              <label class="form-label required fw-semibold">Tanggal Lahir</label>
              <p><?= $data["biodata"]["tanggal_lahir"]; ?></p>
            </div>
          <?php else : ?>
            <p>Blog tidak ditemukan.</p>
          <?php endif; ?>
        </div>
        <div class="col-6">
          <?php if ($data["biodata"]) : ?>
            <div class="mb-3">
              <label class="form-label required fw-semibold">Nama Orang Tua</label>
              <p><?= $data["biodata"]["nama_ortu"]; ?></p>
            </div>
            <div class="mb-3">
              <label class="form-label required fw-semibold">Email Orang Tua</label>
              <p><?= $data["biodata"]["email_ortu"]; ?></p>
            </div>
            <div class="mb-3">
              <label class="form-label required fw-semibold">No HP Orang Tua</label>
              <p><?= $data["biodata"]["nomor_ortu"]; ?></p>
            </div>
            <div class="mb-3">
              <label class="form-label required fw-semibold">Asal Sekolah</label>
              <p><?= $data["biodata"]["asal_sekolah"]; ?></p>
            </div>
          <?php else : ?>
            <p>Blog tidak ditemukan.</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="card-footer text-start">
      <a href="<?= BASE_URL; ?>/admin" class="btn btn-primary">Kembali</a>
    </div>
  </div>
</div>