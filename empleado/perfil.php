<?php
include("./headerPerfil.php");
?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-body perfil">
    <!-- add content here -->
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <h3>Personal</h3>
                        <p>Edita el nombre, fecha de nacimiento y teléfono del colaborador</p>
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="nombres" class="col-form-label">Nombre(s)</label>
                                        <input id="nombres" class="form-control" type="text">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="apellido_paterno" class="col-form-label">Apellido paterno</label>
                                        <input id="apellido_paterno" class="form-control" type="text">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="apellido_materno" class="col-form-label">Apellido Materno</label>
                                        <input id="apellido_materno" class="form-control" type="text">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="fecha_nacimiento" class="col-form-label">Fecha de Nacimiento</label>
                                        <input id="fecha_nacimiento" class="form-control" type="date">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="telefono" class="col-form-label">Teléfono</label>
                                        <input id="telefono" class="form-control" type="text">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="mail" class="col-form-label">Correo Electrónico</label>
                                        <input id="mail" class="form-control" type="text">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="estado_civil" class="col-form-label">Estado Civil</label>
                                        <select id="estado_civil" class="form-select">
                                            <option selected>Seleccione una Opción</option>
                                            <option value="soltero">Soltero(a)</option>
                                            <option value="vasado">Casado(a)</option>
                                            <option value="union_libre">Union libre</option>
                                            <option value="divorciado">Divorciado(a)</option>
                                            <option value="viudo">Viudo(a)</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="nacionalidad" class="col-form-label">Nacionalidad</label>
                                        <input id="nacionalidad" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="genero" class="col-form-label">Género</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Mujer
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Hombre
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <button class="btn-azul">GUARDAR</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="accordion" id="direccionPerfil">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <h3>Dirección</h3>
                        <p>Edita el domicilio del colaborador.</p>
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#direccionPerfil">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="cp" class="col-form-label">Codigo Postal</label>
                                        <input id="cp" class="form-control" type="text">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="municipio" class="col-form-label">municipio</label>
                                        <input id="municipio" class="form-control" type="text">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="estado" class="col-form-label">Estado</label>
                                        <input id="estado" class="form-control" type="text">
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="colonia" class="col-form-label">Colonia</label>
                                        <select id="colonia" class="form-select">
                                            <option selected>Seleccione una Opción</option>
                                            <option value="1">colonia 1</option>
                                            <option value="2">colonia 2</option>
                                            <option value="3">colonia 3</option>
                                            <option value="4">colonia 4</option>
                                            <option value="5">colonia 5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <label for="calle" class="col-form-label">Calle</label>
                                        <input id="calle" class="form-control" type="text">
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="no_ext" class="col-form-label">No. ext</label>
                                        <input id="no_ext" class="form-control" type="text">
                                    </div>
                                    <div class="col-sm-2">
                                        <label for="no_int" class="col-form-label">No. int</label>
                                        <input id="no_int" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <button class="btn-azul">GUARDAR</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="accordion" id="datos_fiscalesPerfil">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <h3>Datos fiscales e IMSS</h3>
                        <p>Edita datos fiscales e información del IMSS del colaborador.</p>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#datos_fiscalesPerfil">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="rfc" class="col-form-label">RFC</label>
                                        <input id="rfc" class="form-control" type="text" readonly>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="curp" class="col-form-label">CURP</label>
                                        <input id="curp" class="form-control" type="text" readonly>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="imss" class="col-form-label">No. IMSS(Opcional)</label>
                                        <input id="imss" class="form-control" type="text" readonly>
                                    </div>
                                    <div class="col-sm-3">
                                        <label for="infonavit" class="col-form-label">¿Tienes crédito INFONAVIT?</label>
                                        <input id="infonavit" class="form-control" type="text" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label for="ine" class="col-form-label">Ine</label>
                                        <input id="ine" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-2">
                                        <button class="btn-azul">GUARDAR</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
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
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>