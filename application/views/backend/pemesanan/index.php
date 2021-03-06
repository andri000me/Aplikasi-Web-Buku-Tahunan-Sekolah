<div class="main-panel">
  <div class="content-wrapper">
    <div class="row mb-3">
      <div class="col-md-3">
        <div class="input-group">
          <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
            <span class="input-group-text" id="search">
              <i class="ti-search"></i>
            </span>
          </div>
          <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title"><?= $title; ?></h4>
            <p class="card-description float-right">
              <a href="<?= base_url('admin/Pemesanan/create')?>" class="btn-rounded btn-success btn-sm" >Tambah Data Tahunan</a>
            </p>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Pelanggan</th>
                    <th>Alamat</th>
                    <th>No Handphone</th>
                    <th>Jenis Ukuran</th>
                    <th>Model Bahan</th>
                    <th>Jumlah</th>
                    <th>Total Harga</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;
                  foreach ($All->result() as $psn) : ?>
                    <tr>
                      <td><?= $i++; ?></td>
                      <td><?= $psn->nama_pelanggan; ?></td>
                      <td><?= $psn->alamat; ?></td>
                      <td><?= $psn->no_hp; ?></td>
                      <td><?= $psn->jenis_ukuran; ?></td>
                      <td><?= $psn->bahan; ?></td>
                      <td><?= $psn->jumlah_katalog; ?></td>
                      <td><?= $psn->total; ?></td>
                      <td><?= $psn->konfirmasi; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.templatewatch.com/" target="_blank">Templatewatch</a>. All rights reserved.</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
    </div>
  </footer>
</div>

</div>