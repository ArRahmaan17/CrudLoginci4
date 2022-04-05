<?= $this->extend('templates'); ?>
<?= $this->section('content'); ?>
<?= $this->include('navbar'); ?>
<!-- card data pegawai -->
<div class="container mt-5 ">
  <div class="card bg-dark">
    <div class="card-header">
      Data Pegawai
    </div>
    <div class="card-body">
      <div class="container-md ">
        <div class="row align-items-center">
          <div class="col-12">
            <!-- table data pegawai -->
            <table class="table table-dark table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Bidang</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach ($data as $pegawai) : ?>
                  <tr>
                    <th class="align-middle"><?= $no++ ?></th>
                    <td class="align-middle"><?= $pegawai['nama'] ?></td>
                    <td class="align-middle"><?= $pegawai['bidang'] ?></td>
                    <td class="align-middle"><?= $pegawai['alamat'] ?></td>
                    <td class="align-middle"><?= $pegawai['jeniskelamin'] ?></td>
                    <td class="align-middle">
                      <button type="button" class="btn btn-warning btn-sm d-block my-1" data-bs-toggle="modal" href="#updateModal" role="button" onclick="edit(<?= $pegawai['id'] ?>)">Edit</button>
                      <button type="button" class="btn btn-danger btn-sm d-block my-1" onclick="hapus(<?= $pegawai['id'] ?>)">Delete</button>
                    </td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <?php
      $link = $pager->links('pegawai');
      $link = str_replace('<li class="active">', '<li class="page-item active">', $link);
      $link = str_replace('<li>', '<li class="page-item">', $link);
      $link = str_replace('<a', '<a class="page-link"', $link);
      echo $link;
      ?>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>