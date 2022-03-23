<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title><?= $title ?> </title>
  <style>
    .container {
      max-width: 900px;
    }

    .btn-login {
      font-size: 0.9rem;
      letter-spacing: 0.05rem;
      padding: 0.75rem 1rem;
    }
  </style>
</head>

<body>
  <div class="container col-xl-11 col-xxl-10 px-2 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-6 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Lorem ipsum dolor sit amet</h1>
        <p class="col-lg-10 fs-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo nobis doloribus ex, totam nam adipisci unde inventore! Reiciendis, iure aliquid?</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-6 text-center">
        <form action="" method="POST" class="p-2 p-md-4 shadow border rounded-3 bg-light">
          <img class="mb-3" src="/img/hehe.webp" title="logo Perusahaan" width="100px">
          <?php if (session()->getFlashdata('error')) : ?>
            <div class=" alert alert-danger" role="alert">
              <?= session()->getFlashdata('error') ?>
            </div>
          <?php elseif (!session()->getFlashdata('error')) : ?>
            <div class=" alert alert-danger" role="alert" style="display: none;">
              <?= session()->getFlashdata('error') ?>
            </div>
          <?php endif ?>
          <div class="form-floating mb-3">
            <input type="email" value="<?= session()->getFlashdata('email') ?>" name="inputEmail" class="form-control" id="inputEmail" placeholder="example@example.com">
            <label for="inputEmail">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" name="inputPassword" class="form-control" id="inputPassword" placeholder="*******">
            <label for="inputPassword">Password</label>
          </div>
          <div class="d-grid">
            <input class="btn btn-success btn-login text-uppercase fw-bold" type="submit" value="Login" name="login">
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>