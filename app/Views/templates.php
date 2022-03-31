<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title><?= $title ?> </title>
  <style>
    .container {
      max-width: 900px;
    }

    body {
      background-color: black;
    }

    .diver {
      background-image: url(/img/background.webp);
      background-size: contain;
      background-position: right;
      background-repeat: no-repeat;
    }
  </style>
  <title><?= $title ?></title>
</head>

<body>
  <div class="container-fluid diver text-light">
    <?= $this->renderSection('content'); ?>
  </div>
  <div class="modal fade" id="updateModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-secondary">
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
              <input type="text" autocomplete="off" name="nama" maxlength="50" minlength="5" class="form-control" id="inputNama">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputEmail" class="col-sm-6 col-form-label">Email</label>
            <div class="col-sm-12">
              <input type="email" maxlength="50" minlength="5" class="form-control" name="email" id="inputEmail">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-6 col-form-label">Password</label>
            <div class="col-sm-12">
              <input type="text" maxlength="50" minlength="5" class="form-control" name="password" id="inputPassword">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPasswordcf" class="col-sm-6 col-form-label">Confirm Password</label>
            <div class="col-sm-12">
              <input type="text" maxlength="50" minlength="5" class="form-control" id="inputPasswordcf">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputFoto" class="form-label">Foto Anda</label>
            <div class="col-sm-12">
              <input class="form-control" name="foto" type="file" id="inputFoto">
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
              <input type="text" name="alamat" autocomplete="off" maxlength="50" minlength="5" class="form-control" id="inputAlamat">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputBidang" class="col-sm-6 col-form-label">jenis Kelamin</label>
            <div class="col-sm-12">
              <select class="form-select" name="jeniskelamin" id="inputJk">
                <option value="L">Laki Laki</option>
                <option value="P">Perempuan</option>
                <option value="Kh">Khusus</option>
              </select>
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
          <div class="modal-footer">
            <button type="button" class="btn btn-danger tombol-tutup" onclick="bersihkan()" data-bs-dismiss="modal">Cancel</button>
            <button type="button" id="tombolUpdate" class="btn btn-warning">Update</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- modal create -->
  <div class="modal fade" id="createModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content bg-secondary">
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
              <input type="text" autocomplete="off" name="nama" maxlength="50" minlength="5" class="form-control" id="inputNama">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputEmail" class="col-sm-6 col-form-label">Email</label>
            <div class="col-sm-12">
              <input type="email" maxlength="50" minlength="5" class="form-control" name="email" id="inputEmail">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-6 col-form-label">Password</label>
            <div class="col-sm-12">
              <input type="text" maxlength="50" minlength="5" class="form-control" name="password" id="inputPassword">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputPasswordcf" class="col-sm-6 col-form-label">Confirm Password</label>
            <div class="col-sm-12">
              <input type="text" maxlength="50" minlength="5" class="form-control" id="inputPasswordcf">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputFoto" class="form-label">Foto Anda</label>
            <div class="col-sm-12">
              <input class="form-control" name="foto" type="file" id="inputFoto">
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
              <input type="text" name="alamat" autocomplete="off" maxlength="50" minlength="5" class="form-control" id="inputAlamat">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="inputBidang" class="col-sm-6 col-form-label">jenis Kelamin</label>
            <div class="col-sm-12">
              <select class="form-select" name="jeniskelamin" id="inputJk">
                <option value="L">Laki Laki</option>
                <option value="P">Perempuan</option>
                <option value="Kh">Khusus</option>
              </select>
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
          <div class="modal-footer">
            <button type="button" class="btn btn-danger tombol-tutup" onclick="bersihkan()" data-bs-dismiss="modal">Cancel</button>
            <button type="button" id="tombolSimpan" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>
  </div>
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
      var result = confirm("Yakin Mau Hapus data dengan ID = " + $id);
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
            $('#inputJk').val($hasilobj.jeniskelamin);
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
      $('#inputFoto').val('');
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
      var $jeniskelamin = $('#inputJk').val();
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
            'jeniskelamin': $jeniskelamin,
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
      var $jeniskelamin = $('#inputJk').val();
      var $role = $('#inputRole').val();

      alert($fileupload);
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
            'jeniskelamin': $jeniskelamin,
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