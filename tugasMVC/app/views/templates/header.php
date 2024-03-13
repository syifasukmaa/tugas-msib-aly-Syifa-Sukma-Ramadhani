<div class="page-wrapper px-5">
  <!-- Page header -->
  <div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col mb-5">
          <!-- Page pre-title -->
          <div class="page-pretitle">
            Overview
          </div>
          <h2 class="page-title">
            <?= $data["title"]; ?> </h2>
        </div>
        <!-- Page title actions -->
        <div class="col-auto ms-auto d-print-none">
          <div class="dropdown">
            <span class="avatar avatar-sm btn dropdown-toggle" data-bs-toggle="dropdown" style="background-image: url(./static/avatars/000m.jpg)"></span>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?= BASE_URL; ?>/login/logout">Logout</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>