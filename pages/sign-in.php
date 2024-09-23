<?php

    session_start();
    require "conexion.php";
	  error_reporting(0);
    $nombre = $_SESSION['id_admin'];
    
    if ($_POST) {

      $email = $_POST['email'];
      $password = $_POST['password'];
  
      $sql = "SELECT id_admin, correo_admin, user_admin, pass_admin FROM admin WHERE correo_admin='$email'";
      $resultado = $mysqli->query($sql);
      $num = $resultado->num_rows;
  
      if ($num>0) {
  
        $row = $resultado->fetch_assoc();
        $password_bd = $row['pass_admin'];
        $pass_c = ($password);
  
        if ($password_bd == $pass_c) {
  
          $_SESSION['id'] = $row['id_admin'];
          $_SESSION['nombre'] = $row['user_admin'];
  
                  echo "<script>location.href='dashboard.php';</script>";
                  die();
                  
        } else {
  
          $pass_err = "La Contraseña no coincide";
  
        }
  
      } else {
  
        $user_err = "El usuario o contraseña es Incorrecto";
  
      }
  
    }
  
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Sign In
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Sign In</h4>
                  <p class="mb-0">Ingrese su Usuario y Contraseña para continuar</p>
                </div>
                <div class="card-body">
                  <form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="mb-3">
                      <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email">
                    </div>
                    <div class="mb-3">
                      <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password">
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">Recordarme</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" href="dashboard.php" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
                    </div>
                    <p class="warnings" id="warnings"> <?php echo $pass_err, $user_err?></p>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url(../assets/img/login-caution.png);
          background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Atención está es una página privada"</h4>
                <p class="text-white position-relative">En caso de encontrarte con está página favor de reportarlo, cualquier accion que intenté ir más alla del Sign In será castigado.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>