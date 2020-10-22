<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link 
  href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" 
  rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php include "./sidebar.php" ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">
      <!-- Content Row -->

      <div class="row mt-2">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Registration</h6>
              <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" 
                aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
              </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Nama Anda" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="username" name="username" 
                  placeholder="Username Anda" required>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="password" name="password" 
                  placeholder="Password Anda" required>
                </div>
                <div class="form-group">
                  <input type="radio" id="jk-laki-laki" name="jk" value="Laki-laki" required>
                  <label for="jk-laki-laki">Laki-laki</label>
                  <input type="radio" id="jk-perempuan" name="jk" value="Perempuan" required>
                  <label for="jk-perempuan">Perempuan</label>
                </div>
                <div class="form-group">
                  <select class="form-control" name="agama" id="agama">
                    <option value="Kristen">Kristen</option>
                    <option selected value="Islam">Islam</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                  </select>
                </div>
                <div class="form-group">
                  <textarea name="biografi" id="biografi" class="form-control" placeholder="Biografi Anda"></textarea>
                </div>
                <button type="submit" class="btn btn-success" name="submit">Tambah</button>
                <?php
                $name = @$_GET['name'];
                $username = @$_GET['username'];
                $email = @$_GET['email'];
                $jk = @$_GET['jk'];
                $agama = @$_GET['agama'];
                $biografi = @$_GET['biografi'];
                if ($name) {
                  echo "<br><br><strong>Nama:</strong> {$name} <br>";
                }
                if ($username) {
                  echo "<strong>Username:</strong> {$username} <br>";
                }
                if ($email) {
                  echo "<strong>Email:</strong> {$email} <br>";
                }
                if ($jk) {
                  echo "<strong>Jenis Kelamin:</strong> {$jk} <br>";
                }
                if ($agama) {
                  echo "<strong>Agama:</strong> {$agama} <br>";
                }
                if ($biografi) {
                  echo "<strong>Biografi:</strong> {$biografi} <br>";
                }
                ?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>