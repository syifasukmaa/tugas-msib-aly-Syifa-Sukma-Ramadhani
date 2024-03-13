<!-- Page body -->
<?php if (isset($_SESSION['flash'])) : ?>
  <script>
    Swal.fire({
      icon: "success",
      title: "Success",
      text: "<?php echo $_SESSION['flash']; ?>",
      timer: 100,
      showConfirmButton: false,
      timer: 1500
    })
  </script>
<?php

  unset($_SESSION['flash']);
endif;
?>

<div class="px-3">
  <?php Flasher::flash(); ?>
  <div class="card">
    <div class="table-responsive">
      <table class="table table-vcenter card-table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Jenis Kelamin</th>
            <th>Email Ortu</th>
            <th>Asal Sekolah</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data["biodata"] as $biodata) : ?>
            <tr>
              <td>
                <?= $biodata["nama"]; ?>
              </td>
              <td>
                <?= $biodata["jenis_kelamin"]; ?>
              </td>
              <td>
                <?= $biodata["email_ortu"]; ?>
              </td>
              <td>
                <?= $biodata["asal_sekolah"]; ?>
              </td>
              <td>
                <a style="margin-bottom: 2px;" class="btn btn-info btn-sm" href="<?= BASE_URL . '/admin/detail/' . $biodata["id_biodata"]; ?>">Detail</a>
                <a style="margin-bottom: 2px;" class="btn btn-success btn-sm" href="<?= BASE_URL . '/admin/edit/' .  $biodata["id_biodata"]; ?>">Edit</a>
                <a style="margin-bottom: 2px;" class="btn btn-danger btn-sm" href="<?= BASE_URL . '/admin/delete/' . $biodata["id_biodata"]; ?>">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>

        </tbody>
      </table>
    </div>
  </div>
</div>