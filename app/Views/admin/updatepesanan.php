<?= $this->extend('allin/templates'); ?>
<?= $this->section('content'); ?>
<div class="row">
  <div class="p-5 col-xl-12 col-md-12">
    <div class="card mb-1">
      <div class="card-header pb-0">
        <a class="text-decoration-none">
          <h5><?= $title ?></h5>
        </a>
      </div>
      <div class="card-body px-5 pt-3 pb-2 ">
        <form action="/Admin/buktiproses/<?= session()->get('id') ?>" class="col-8" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $data['id'] ?>">
          <input type="hidden" name="id_pegawai" value="<?= session()->get('id') ?>">
          <div class="mb-3 col-10">
            <label for="InputNama" class="form-label">Nama Pegawai</label>
            <input type="text" class="form-control" name="nama_pegawai" readonly id="InputNama" value="<?= session()->get('nama') ?>">
          </div>
          <div class="mb-3 col-10">
            <label for="InputNama" class="form-label">Pesanan</label>
            <input type="text" class="form-control" name="nama_pegawai" readonly id="InputNama" value="<?= $data['barang'] ?> <?= $data['jumlah'] ?> <?= $data['dimensi'] ?>">
          </div>
          <div class="mb-3 col-10">
            <label for="inputFoto" class="form-label">Masukan Foto Proses</label>
            <input type="file" class="form-control" name="foto_proses">
          </div>
          <div class="mb-3 col-10">
            <input type="submit" class="btn btn-primary form-control" value="Masukan Bukti Proses">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>