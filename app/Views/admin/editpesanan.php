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
      <div class="card-body px-5 pt-3 pb-2">
        <div class="alert alert-success container sukses text-white" role="alert" <?= (!session()->getFlashdata('berhasil')) ? 'style="display: none;"' : '';  ?>>
          <?= session()->getFlashdata('berhasil'); ?>
        </div>
        <div class="alert alert-danger container error text-white" role="alert" <?= (!session()->getFlashdata('gagal')) ? 'style="display: none;"' : '';  ?>>
          <?= session()->getFlashdata('gagal'); ?>
        </div>
        <form autocomplete="off" action="<?= base_url()?>/Admin/editpesanan/<?= $data['id_pesanan']; ?>" class="col-8 mr-3" method="POST">
          <? csrf_field() ?>
          <input type="hidden" name="idpegawai" value="<?= session()->get('id_pegawai') ?>">
          <div class="mb-3">
            <label for="namapetugas" class="col-form-label">Nama petugas</label>
            <input type="text" class="form-control" name="namapetugas" value="<?= session()->get('nama_pegawai') ?>" readonly disabled>
          </div>
          <div class="mb-3">
            <label for="namapemesan" class="col-form-label">Nama Pemesan</label>
            <select class="form-select" name="namaPemesan">
              <?php foreach ($pelanggan as $p ) : ?>
               <option <?= (old('namaPemesan')) ? 'selected' : ''; ?> value="<?= $p['id_pelanggan'] ?>"><?= $p['nama_pelanggan'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="barangpesanan" class="col-form-label">Nama Barang</label>
            <select class="form-select" name="barangPesanan">
              <?php foreach ($barang as $b ) : ?>
               <option <?= (old('barangPesanan')) ? 'selected' : ''; ?> value="<?= $b['id_barang'] ?>"><?= $b['nama_barang'] ?></option>
              <?php endforeach ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="inputJumlah" class="col-form-label">Jumlah and Dimensi Pesanan</label>
            <div class="input-group">
              <input type="number" name="jumlahPesanan" value="<?= (old('barangPesanan')) ? old('barangPesanan') : $data['jumlah']; ?>" class="form-control">
              <select class="form-select" name="dimensiPesanan" aria-label="Default select example">
                <option selected value="Lt">Lt</option>
                <option value="Kg">Kg</option>
                <option value="Pcs">Pcs</option>
              </select>
            </div>
          </div>
          <div class="mb-3">
            <input type="submit" class="btn btn-primary form-control" value="Edit Pesanan">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>