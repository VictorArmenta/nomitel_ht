<?php
include("./header.php");
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
    <!-- add content here -->
      <div class="row">
        <div id="publicaciones" class="col-md-7">
          <h3>Comunicación Interna</h3>
          <div id="pub_cont" class="row pub_content">

          </div>
        </div>
        <div id="eventos" class="col-md-5">
          <h3>Eventos</h3>
          <div id="eventosContainer" class="ev_content row">
            
          </div>
        </div>
      </div>
    </div>
  </section>
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
  <!-- JS Libraies -->
  <script src="assets/bundles/sweetalert/sweetalert2.all.min.js"></script>
  <script src="./assets/bundles/bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/chart.min.js"></script>
  <script src="assets/js/empleado.js"></script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>