<?= $this->extend('allin/templates'); ?>
<?= $this->section('content'); ?>
<div class="row">
  <div class="col-xl-12 col-md-12">
    <div class="card mb-1">
      <div class="card-header pb-0">
        <a class="text-decoration-none" href="<?= base_url('/orderoffline') ?>">
          <h5 class="d-inline-block mx-3">Pesanan Masuk</h5>
          <a href="<?= base_url('orderoffline/tambahpesanan') ?>">
            <span type="button" class="badge p-3 mb-3 badge-xl bg-gradient-primary">Tambah Pesanan</span>
          </a>
        </a>
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-xxs font-weight-bolder opacity-7 ps-4">Nama Pemesan</th>
                <th class="text-uppercase text-xxs font-weight-bolder opacity-7 ps-2">Pesanan</th>
                <th class="text-uppercase text-xxs font-weight-bolder opacity-7">Tanggal Pesan</th>
                <th class="text-uppercase text-xxs font-weight-bolder opacity-7">Status</th>
                <th class="opacity-7"></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($masuk as $d) : ?>
                <tr>
                  <td>
                    <div class="d-flex">
                      <div>
                        <img src="<?= base_url('/img/avatardefault.png') ?>" class="avatar avatar-sm me-2">
                      </div>
                      <h6 class="pt-2 text-md"><?= $d['nama_pelanggan'] ?></h6>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs text-wrap font-weight-bold text-uppercase mb-0">Beras <?= $d['nama_barang'] ?></p>
                    <p class="text-xs text-secondary text-uppercase mb-0"><?= $d['jumlah'] ?> <?= $d['dimensi'] ?></p>
                  </td>
                  <td class="ps-4 text-md">
                    <span class="text-secondary text-xs font-weight-bold"><?= $d['tanggalmasuk'] ?></span>
                  </td>
                  <td class="ps-3">
                    <span class="badge badge-sm bg-gradient-secondary">Masuk</span>
                  </td>
                  <td class="align-middle dropleft">
                    <a class="text-secondary font-weight-bold text-xs" type="button" id="editDrdw" data-bs-toggle="dropdown" aria-expanded="false">Proses Pesanan</a>
                    <ul class=" dropdown-menu" aria-labelledby="editDrdw">
                      <li><a class="dropdown-item text-xs" onclick="prosespesanan(<?= $d['id_pesanan'] ?>)">Proses</a></li>
                      <li><a href="<?= base_url()?>/orderoffline/editpesanan/<?= $d['id_pesanan'] ?>" class="dropdown-item text-xs">Edit</a></li>
                    </ul>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end barang masuk -->

<!-- proses barang -->
<div class="row mt-4">
  <div class="col-xl-6 col-md-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <h5>Pesanan Di Proses</h5>
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center justify-content-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Orderan</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status Order</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Completion</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($proses as $p) : ?>
                <tr>
                  <td title="Garapan Pak <?= $p['nama_pelanggan'] ?>">
                    <div class="d-flex">
                      <div class="my-auto">
                        <h6 class="mb-0 text-sm"><?= $p['nama_pelanggan'] ?></h6>
                      </div>
                    </div>
                  </td>
                  <td class="ps-3">
                    <span class="badge badge-sm bg-gradient-danger" type="button" id="prosesDrpdw" data-bs-toggle="dropdown" aria-expanded="false">Proses</span>
                    <ul class=" dropdown-menu" aria-labelledby="prosesDrpdw">
                      <?php if ($p['fotoproses'] == null) : ?>
                        <li><a class="dropdown-item text-xs" href="<?= base_url("/orderoffline/proses") ?>/<?= $p['id_pesanan'] ?>">Masukan Bukti Proses</a></li>
                      <?php elseif ($p['fotoselesai'] == null) : ?>
                        <li><a class="dropdown-item text-xs" href="<?= base_url("/orderoffline/selesai") ?>/<?= $p['id_pesanan'] ?>">Masukan Bukti Selesai</a></li>
                      <?php endif ?>
                      <?php if ($p['fotoselesai'] !== null) : ?>
                        <li><a class=" dropdown-item text-xs" onlclick="prosesselesai(<?= $p['id_pesanan'] ?>)">Selesai</a></li>
                      <?php endif ?>
                    </ul>
                  </td>
                  <td>
                    <div class="text-truncate">
                      <span class="me-1 text-xs font-weight-bold">50%</span>
                      <div class="progress">
                        <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                      </div>
                    </div>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-6 col-md-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <h5>Pesanan Selesai</h5>
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center justify-content-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Orderan</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status Order</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Completion</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($selesai as $s) : ?>
                <tr>
                  <td title="Garapan Pak <?= $s['nama_pelanggan'] ?>">
                    <div class="d-flex">
                      <div class="my-auto">
                        <h6 class="mb-0 text-sm"><?= $s['nama_pelanggan'] ?></h6>
                      </div>
                    </div>
                  </td>
                  <td class="ps-3">
                    <span class="badge badge-sm bg-gradient-success ">selesai</span>
                  </td>
                  <td>
                    <div class="text-truncate">
                      <span class="me-1 text-xs font-weight-bold">100%</span>
                      <div class="progress">
                        <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                      </div>
                    </div>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>