<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
   <?= $title ?>
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.2" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    body{
    background-color: rgb(108,150,200); 
    }
  </style>
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
      <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="/admindashboard">
          <img src="<?= base_url('/assets/img/logo-ct-dark.png') ?>" class="navbar-brand-img h-100" alt="main_logo">
          <span class="ms-1 font-weight-bold"><?= $title ?></span>
        </a>
      </div>
      <hr class="horizontal dark mt-0">
      <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?= ($title == 'Admin Dashboard') ? 'active' : ' ' ;  ?>" href="<?= base_url('/admindashboard')?>">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  <?= ($title == 'Order Offline') ? 'active' : ' ' ;  ?> " href="<?= base_url('/orderoffline') ?>">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Order Offline</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./pages/billing.html">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Barang Masuk</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./pages/virtual-reality.html">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-app text-info text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Laporan Harian</span>
            </a>
          </li>
          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./pages/profile.html">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Profile</span>
            </a>
          </li>
        </ul>
      </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
      <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3">
          <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
              <div class="input-group">
                <span class="input-group-text text-body">
                  <i class="fas fa-search" aria-hidden="true"></i>
                </span>
                <input type="text" class="form-control" placeholder="Type here...">
              </div>
            </div>
            <ul class="navbar-nav  justify-content-end">
              <li class="nav-item d-flex align-items-center">
                <a href="#" class="nav-link text-white font-weight-bold px-0">
                  <i class="fa fa-user me-sm-1"></i>
                  <span class="d-sm-inline d-none"><?= session()->get('nama') ?></span>
                </a>
              </li>
              <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
              <li class="nav-item px-3 d-flex align-items-center">
                <div class="form-check form-switch ps-0 ms-auto my-auto">
                  <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- end navbar -->

      <div class="container-fluid">
        <?= $this->renderSection('content'); ?>  
      </div>

      <footer class="footer pt-3  ">
          <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                  © <script>
                    document.write(new Date().getFullYear())
                  </script>,
                  made with <i class="fa fa-heart"></i> by
                  <a href="https://github.com/ArRahmaan17/" target="_blank" class="font-weight-bold" >Rahmaan17</a>
                  for a better Company.
                </div>
              </div>
            </div>
          </div>
      </footer>
  </main>
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
  <script src="<?= base_url('/assets/js/core/popper.min.js') ?>"></script>
  <script src="<?= base_url('/assets/js/plugins/perfect-scrollbar.min.js') ?>"></script>
  <script src="<?= base_url('/assets/js/plugins/smooth-scrollbar.min.js') ?>"></script>
  <script src="<?= base_url('/assets/js/plugins/chartjs.min.js') ?>"></script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="<?= base_url('/assets/js/argon-dashboard.min.js?v=2.0.2') ?>"></script>
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
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    var ctx1 = document.getElementById("chart-line").getContext("2d");
              var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

              gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
              gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
              gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
              new Chart(ctx1, {
                type: "line",
                data: {
                  labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                  datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#5e72e4",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                  }],
                },
                options: {
                  responsive: true,
                  maintainAspectRatio: false,
                  plugins: {
                    legend: {
                      display: false,
                    }
                  },
                  interaction: {
                    intersect: false,
                    mode: 'index',
                  },
                  scales: {
                    y: {
                      grid: {
                        drawBorder: false,
                        display: true,
                        drawOnChartArea: true,
                        drawTicks: false,
                        borderDash: [5, 5]
                      },
                      ticks: {
                        display: true,
                        padding: 10,
                        color: '#fbfbfb',
                        font: {
                          size: 11,
                          family: "Open Sans",
                          style: 'normal',
                          lineHeight: 2
                        },
                      }
                    },
                    x: {
                      grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                        borderDash: [5, 5]
                      },
                      ticks: {
                        display: true,
                        color: '#ccc',
                        padding: 20,
                        font: {
                          size: 11,
                          family: "Open Sans",
                          style: 'normal',
                          lineHeight: 2
                        },
                      }
                    },
                  },
                },
              });
            </script>
            <script>
              var win = navigator.platform.indexOf('Win') > -1;
              if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                  damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
              }
  </script>


</body>

</html>