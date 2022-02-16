<?php 
  include('header.php');

    include('../connection/conn_db.php');
    
    if(isset($_SESSION['nombre'])){
      $nombre = $_SESSION['nombre'];
    }else{
      header('Location: ../login.php');
    }
     date_default_timezone_set('America/Hermosillo');
    
    $fecha =$meses[date('n')-1]." ".date('d').", ".date('Y');
    
?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-md-8">
                <div class="card">
                  <div class="card-header">
                    <h3 style="color: #212529;">¡Hola <?php echo $nombre; ?>!</h3>
                  </div>
                  <div class="card-body pb-0">
                    <h6 style="color: #212529;">Lo que tenemos para ti</h6>
                    <p>Noticias, eventos y más publicaciones de los administradores.</p>

                    <div class="card author-box card-primary">
                      <div class="card-body">
                        <div class="author-box-left">
                          <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle author-box-picture">
                          <div class="clearfix"></div>
                        </div>
                        <div class="author-box-details">
                          <div class="author-box-name">
                            <a href="#">Lillian Centeno</a>
                          </div>
                          <div class="author-box-job"><?php echo $fecha; ?></div>
                          <div class="author-box-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                              consequat.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card author-box card-primary">
                      <div class="card-body">
                        <div class="author-box-left">
                          <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle author-box-picture">
                          <div class="clearfix"></div>
                        </div>
                        <div class="author-box-details">
                          <div class="author-box-name">
                            <a href="#">Carlos Quiroz</a>
                          </div>
                          <div class="author-box-job"><?php echo $fecha; ?></div>
                          <div class="author-box-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                              consequat.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card author-box card-primary">
                      <div class="card-body">
                        <div class="author-box-left">
                          <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle author-box-picture">
                          <div class="clearfix"></div>
                        </div>
                        <div class="author-box-details">
                          <div class="author-box-name">
                            <a href="#">Victor Armenta</a>
                          </div>
                          <div class="author-box-job"><?php echo $fecha; ?></div>
                          <div class="author-box-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                              consequat.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-header">
                    <h4>Crear nuevo post</h4>
                  </div>
                  <div class="card-body pb-0">
                    <div class="form-group">
                      <label>Titulo</label>
                      <input type="text" name="title" class="form-control" required>
                      <div class="invalid-feedback">
                        Por favor complete el título
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Contenido</label>
                      <textarea class="summernote"></textarea>
                    </div>
                  </div>
                  <div class="card-footer pt-0">
                    <button class="btn btn-primary">Publicar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Presiona "Salir" si estás listo para cerrar tu sesión actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="../logout.php">Salir</a>
                </div>
            </div>
        </div>
    </div>
    
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/chart.min.js"></script>
  <script src="assets/bundles/summernote/summernote-bs4.js"></script>

  <script>
    
    </script>
</body>

 
<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>