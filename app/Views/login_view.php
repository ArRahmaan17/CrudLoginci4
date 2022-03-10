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
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-md-10 col-lg-8 mx-auto">
        <div class="card border-0 shadow-sm rounded-3 my-5 bg-dark text-primary">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
            <form action="" method="POST">
              <?php if (session()->getFlashdata('ersuccessror')) : ?>
                <div class=" alert alert-success" role="alert">
                  <?= session()->getFlashdata('success') ?>
                </div>
              <?php elseif (!session()->getFlashdata('success')) : ?>
                <div class=" alert alert-success" role="alert" style="display: none;">
                  <?= session()->getFlashdata('success') ?>
                </div>
              <?php endif ?>
              <?php if (session()->getFlashdata('error')) : ?>
                <div class=" alert alert-danger" role="alert">
                  <?= session()->getFlashdata('error') ?>
                </div>
              <?php elseif (!session()->getFlashdata('error')) : ?>
                <div class=" alert alert-danger" role="alert" style="display: none;">
                  <?= session()->getFlashdata('error') ?>
                </div>
              <?php endif ?>
              <div class="mb-3">
                <label for="InputEmail">Email address</label>
                <input type="email" value="<?= session()->getFlashdata('email')?>" name="inputEmail" class="form-control" id="inputEmail" placeholder="example@example.com">
              </div>
              <div class="mb-3">
                <label for="InputPassword">Password</label>
                <input type="password" name="inputPassword" class="form-control" id="inputPassword" placeholder="*******">
              </div>
              <div class="d-grid">
                <input class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" value="Login" name="login">
              </div>
            </form>
            <a href="/register" class="d-block text-right text-decoration-none mt-3">Register Dek!!!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>