<?php
include "includes/header.php";
include 'db.php';
include 'entrar.php';
?>
<?php 
   if(isset($_SESSION['user_id'])){
        header('Location: index.php');
        exit;
    } else {
        // No inicio sesión! 
    }
?>
<body class="bg-dark">
      <section class="container">
        <div class="row d-flex g-0 min-vh-100 justify-content-center align-items-center">
            <div class="row p-3 mb-5 bg-white">
              <div class="col-lg-5 d-none d-lg-block p-0">
                <img src="image/login.png" class="img-fluid w-100">
              </div>
              <div class="col-lg-7 bg-black d-flex">
                  <div class="align-self-center w-100 px-lg-5 py-lg-4 p-5">
                    <h1 class="font-weight-bold mb-4">Bienvenido de vuelta!</h1>
                    <?php if (isset($_SESSION['mensaje'])) { ?>
                        <div class="mt-2 alert alert-<?= $_SESSION['tipo_mensaje'] ?> alert-dismissible fade show" role="alert">
                            <?= $_SESSION['mensaje'] ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php session_unset(); } ?>
                    <form action="" method="POST" class="needs-validation" novalidate>
                        <div class="mb-4">
                          <label for="exampleInputEmail1" class="form-label font-weight-bold">Correo</label>
                          <input type="email" class="form-control bg-dark-x border-0 text-light" id="exampleInputEmail1" placeholder="Ingresa tu email" aria-describedby="emailHelp" name="email" required>
                          <div class="invalid-feedback">
                            Por favor agregué un correo.
                          </div>
                        </div>
                        <div class="mb-4">
                          <label for="exampleInputPassword1" class="form-label font-weight-bold">Contraseña</label>
                          <input type="password" class="form-control bg-dark-x border-0 mb-2 text-light" placeholder="Ingresa tu contraseña" id="exampleInputPassword1" name="pass" required>
                          <div class="invalid-feedback">
                            Por favor agregué una contraseña.
                          </div>
                        </div>
                        <input type="submit" class="btn btn-primary w-100" value="Iniciar sesión" name="login">
                    </form>
                  </div>       
              </div>
            </div>
        </div>
      </section>
<?php
include "includes/footer.php";
?>