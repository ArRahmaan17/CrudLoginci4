<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title><?= $title ?> </title>
  <style>
    .container {
      max-width: 900px;
    }
  </style>
</head>

<body>
  <?= $this->include('navbar'); ?>
  <!-- card data pegawai -->
  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        Data Pegawai
      </div>
      <div class="card-body">
        <!-- modal update -->
        <div class="modal fade" id="updateModal" aria-hidden="true" aria-labelledby="updateModalLabel" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Form Update Pegawai</h5>
                <button type="button" class="btn-close tombol-tutup" data-bs-dismiss="modal" onclick="bersihkan()" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="alert alert-success sukses" role="alert" style="display: none;">
                </div>
                <div class=" alert alert-danger error" role="alert" style="display: none;">
                </div>
                <input type="hidden" id="inputId">
                <div class="mb-3 row">
                  <label for="inputNama" class="col-sm-6 col-form-label">Nama</label>
                  <div class="col-sm-12">
                    <input type="text" autocomplete="off" maxlength="50" minlength="5" class="form-control" id="inputNama">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputEmail" class="col-sm-6 col-form-label">Email</label>
                  <div class="col-sm-12">
                    <input type="email" maxlength="50" minlength="5" class="form-control" id="inputEmail">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputPassword" class="col-sm-6 col-form-label">Password</label>
                  <div class="col-sm-12">
                    <input type="text" maxlength="50" minlength="5" class="form-control" id="inputPassword">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputPassword" class="col-sm-6 col-form-label">Confirm Password</label>
                  <div class="col-sm-12">
                    <input type="text" maxlength="50" minlength="5" class="form-control" id="inputPasswordcf">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputBidang" class="col-sm-6 col-form-label">Bidang</label>
                  <div class="col-sm-12">
                    <select class="form-select" name="bidang" id="inputBidang">
                      <option value="Finance">Finance</option>
                      <option value="Marketing">Marketing</option>
                      <option value="Hr">HR</option>
                    </select>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputAlamat" class="col-sm-6 col-form-label">Alamat</label>
                  <div class="col-sm-12">
                    <input type="text" autocomplete="off" maxlength="50" minlength="5" class="form-control" id="inputAlamat">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputBidang" class="col-sm-6 col-form-label">Role</label>
                  <div class="col-sm-12">
                    <select class="form-select" name="role" id="inputRole">
                      <option value="Staff">Staff</option>
                      <option value="Admin">Admin</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary tombol-tutup" onclick="bersihkan()" data-bs-dismiss="modal">Cancel</button>
                <button type="button" id="tombolUpdate" class="btn btn-warning">Update</button>
              </div>
            </div>
          </div>
        </div>

        <!-- modal create -->
        <div class="modal fade" id="createModal" aria-hidden="true" aria-labelledby="createModalLabel" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Form Create Pegawai</h5>
                <button type="button" class="btn-close tombol-tutup" data-bs-dismiss="modal" onclick="bersihkan()" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="alert alert-success sukses" role="alert" style="display: none;">
                </div>
                <div class=" alert alert-danger error" role="alert" style="display: none;">
                </div>
                <div class="mb-3 row">
                  <label for="inputNama" class="col-sm-6 col-form-label">Nama</label>
                  <div class="col-sm-12">
                    <input type="text" autocomplete="off" maxlength="50" minlength="5" class="form-control" id="inputNama">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputEmail" class="col-sm-6 col-form-label">Email</label>
                  <div class="col-sm-12">
                    <input type="email" maxlength="50" minlength="5" class="form-control" id="inputEmail">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputPassword" class="col-sm-6 col-form-label">Password</label>
                  <div class="col-sm-12">
                    <input type="text" maxlength="50" minlength="5" class="form-control" id="inputPassword">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputPassword" class="col-sm-6 col-form-label">Confirm Password</label>
                  <div class="col-sm-12">
                    <input type="text" maxlength="50" minlength="5" class="form-control" id="inputPasswordcf">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputBidang" class="col-sm-6 col-form-label">Bidang</label>
                  <div class="col-sm-12">
                    <select class="form-select" name="bidang" id="inputBidang">
                      <option value="Finance">Finance</option>
                      <option value="Marketing">Marketing</option>
                      <option value="Hr">HR</option>
                    </select>
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputAlamat" class="col-sm-6 col-form-label">Alamat</label>
                  <div class="col-sm-12">
                    <input type="text" autocomplete="off" maxlength="50" minlength="5" class="form-control" id="inputAlamat">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputBidang" class="col-sm-6 col-form-label">Role</label>
                  <div class="col-sm-12">
                    <select class="form-select" name="role" id="inputRole">
                      <option value="Staff">Staff</option>
                      <option value="Admin">Admin</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary tombol-tutup" onclick="bersihkan()" data-bs-dismiss="modal">Cancel</button>
                <button type="button" id="tombolSimpan" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Table Data Pegawai -->
        <div class="container-md ">
          <div class="row align-items-center">
            <div class="col-12">
              <!-- table data pegawai -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Bidang</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($data as $pegawai) : ?>
                    <tr>
                      <th scope="row"><?= $no++ ?></th>
                      <td class="align-middle"><?= $pegawai['nama'] ?></td>
                      <td class="align-middle"><?= $pegawai['email'] ?></td>
                      <td class="align-middle"><?= $pegawai['bidang'] ?></td>
                      <td class="align-middle"><?= $pegawai['alamat'] ?></td>
                      <td class="align-middle">
                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" href="#updateModal" role="button" onclick="edit(<?= $pegawai['id'] ?>)">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm" onclick="hapus(<?= $pegawai['id'] ?>)">Delete</button>
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
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
      $("#pegawai").hover(
        function() {
          $("#toggel").click();
        },
        function() {
          $("#toggel").click();
        });
      $('.tombol-tutup').on('click', function() {
        if ($('.sukses').is('visible')) {
          window.location.href = "<?= current_url() . "?" . $_SERVER['QUERY_STRING']  ?>";
        }
        $('.alert').hide();
        bersihkan();
      })

      function hapus($id) {
        var result = confirm("Yakin Mau Hapus data yang berid = " + $id);
        if (result) {
          window.location = "<?= base_url('Pegawai/hapus') ?>/" + $id
        }
      }

      function edit($id) {
        $.ajax({
          url: "<?= base_url('Pegawai/edit') ?>/" + $id,
          type: "GET",
          success: function(hasil) {
            var $hasilobj = $.parseJSON(hasil);
            if ($hasilobj.id != null) {
              $('#inputId').val($hasilobj.id);
              $('#inputNama').val($hasilobj.nama);
              $('#inputEmail').val($hasilobj.email);
              $('#inputPassword').val($hasilobj.password);
              $('#inputPasswordcf').val($hasilobj.password);
              $('#inputBidang').val($hasilobj.bidang);
              $('#inputAlamat').val($hasilobj.alamat);
              $('#inputRole').val($hasilobj.role);
            }
          }
        });
      }

      function bersihkan() {
        $('#inputId').val('');
        $('#inputNama').val('');
        $('#inputEmail').val('');
        $('#inputUsername').val('');
        $('#inputPassword').val('');
        $('#inputPasswordcf').val('');
        $('#inputAlamat').val('');
      }

      $('#tombolUpdate').on('click', function() {
        var $id = $('#inputId').val();
        var $nama = $('#inputNama').val();
        var $email = $('#inputEmail').val();
        var $password = $('#inputPassword').val();
        var $cfpassword = $('#inputPasswordcf').val();
        var $bidang = $('#inputBidang').val();
        var $alamat = $('#inputAlamat').val();
        var $role = $('#inputRole').val();

        if ($password == $cfpassword) {
          $.ajax({
            url: "<?= base_url('Pegawai/update') ?>",
            type: "POST",
            data: {
              'id': $id,
              'nama': $nama,
              'email': $email,
              'password': $password,
              'cfpassword': $cfpassword,
              'bidang': $bidang,
              'alamat': $alamat,
              'role': $role
            },
            success: function(hasil) {
              $hasilobj = $.parseJSON(hasil);
              if ($hasilobj.status == true) {
                $('.error').hide();
                $('.sukses').html($hasilobj.pesan);
                $('.sukses').show();
                bersihkan();
                window.location = "<?= base_url() ?>";
              } else {
                $('.sukses').hide();
                $('.error').html($hasilobj.pesan);
                $('.error').show();
              }
            }
          });
        } else {
          $('.sukses').hide();
          $('.error').html("Password dan confirm Password Tidak Sama");
          $('.error').show();
        }
      });

      $('#tombolSimpan').on('click', function() {
        var $nama = $('#inputNama').val();
        var $email = $('#inputEmail').val();
        var $password = $('#inputPassword').val();
        var $cfpassword = $('#inputPasswordcf').val();
        var $bidang = $('#inputBidang').val();
        var $alamat = $('#inputAlamat').val();
        var $role = $('#inputRole').val();

        if ($password == $cfpassword) {
          $.ajax({
            url: "<?= base_url('Pegawai/simpan') ?>",
            type: "POST",
            data: {
              'nama': $nama,
              'email': $email,
              'password': $password,
              'cfpassword': $cfpassword,
              'bidang': $bidang,
              'alamat': $alamat,
              'role': $role
            },
            success: function(hasil) {
              $hasilobj = $.parseJSON(hasil);
              if ($hasilobj.status == true) {
                $('.error').hide();
                $('.sukses').html($hasilobj.pesan);
                $('.sukses').show();
                bersihkan();
                window.location = "<?= base_url() ?>";
              } else {
                $('.sukses').hide();
                $('.error').html($hasilobj.pesan);
                $('.error').show();
              }
            }
          });
        } else {
          $('.sukses').hide();
          $('.error').html("Password dan confirm Password Tidak Sama");
          $('.error').show();
        }
      });
    </script>
</body>

</html>