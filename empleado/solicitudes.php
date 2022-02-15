<?php
include("./headerSolicitudes.php");
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body">
    <!-- add content here -->
    <h3>Solicitudes</h3>
      <div class="row" id="preview_solicitudes">
        <div class="col-sm-12" id="solicitudes_content">
        </div>
      </div>
      <div class="row justify-content-center" id="tipo_solicitud">
        <div class="col-sm-8">
          <select id="motivo" class="form-select" aria-label="Default select example">
            <option value="0" selected>Selecione el Tipo de Solicitud</option>
            <option>Vacaciones</option>
            <option>Dia Personal</option>
            <option>Justificar Falta</option>
          </select>
        </div>
      </div>
      <div class="row justify-content-center" id="solicitudes">
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
  <script src="assets/js/solicitudes.js"></script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>