
<?php
session_start();

if(isset($_SESSION['tipo']) && $_SESSION['tipo']=="ADMIN"){
   header('Location: admin/index.php');  
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Iniciar sesión- Nomitel</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header" style="text-align: center; display: block;">
                <img src="assets/img/logo-login.png" style="width: 100px; height: auto;">
                <br>
                <h4>INICIAR SESIÓN</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="#" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="txtUsuario">Usuario</label>
                    <input id="txtUsuario" type="text" class="form-control" name="txtUsuario" tabindex="1" required autofocus>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="txtPass" class="control-label">Contraseña</label>
                      <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                          ¿Olvidaste tu contraseña?
                        </a>
                      </div>
                    </div>
                    <input id="txtPass" type="password" class="form-control" name="txtPass" tabindex="2" required>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Recordárme</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="button" class="btn btn-primary btn-lg btn-block" tabindex="4" onclick="iniciar();">
                      Ingresar
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Todos los derechos reservados.&copy; 2022 Hablatel CC
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/sweetalert/sweetalert2.all.min.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>

  <script>
    "use strict";
    $(document).keypress(function(e) {
        if(e.which == 13) {  //13 is enter key code
        iniciar();  //pass form...call function
        }
    });
        //MARCAR REGISTRO
        function iniciar() {
            var user = $('#txtUsuario').val();
            var pass = $('#txtPass').val();
            
            if(user=="" || pass==""){
                  Swal.fire({
                  position: 'center',
                  icon: 'warning',
                  title: '¡Igresa tus datos!',
                  showConfirmButton: false,
                  timer: 2000
                })
            }else{
                var param = {
                    "user" : user,
                    "pass" : pass
                };
                $.ajax({
                    data: param,
                    url: "login-con.php",
                    method: "post",
                    success: function(data) {
                        if(data != 'error'){
                             Swal.fire({
                              position: 'center',
                              icon: 'success',
                              title: '¡Hola '+data+'!',
                              showConfirmButton: false,
                              timer: 2000
                            }).then(function(){
                                 <?php
                                    if($_SESSION['tipo']== "ADMIN"){
                                        echo "window.location.href='admin/index.php';";
                                    }
                                    else if($_SESSION['tipo']== "EMPLEADO"){
                                        echo "window.location.href='empleado/index.php';
                                        ";
                                    }   
                                ?>
                                location.reload();
                            });
                        
                        }else{
                             Swal.fire({
                              icon: 'error',
                              title: 'Error al ingresar',
                              text: 'Los datos son erróneos',
                              confirmButtonText:'Aceptar'
                            }).then(function(){
                                window.location.href='login.php';
                            });
                        }
                    }
                });
            }
                
        }  
    </script>

</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>