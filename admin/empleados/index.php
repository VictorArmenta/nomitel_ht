<?php 
  include('header.php');
    
  $fecha =$meses[date('n')-1]." ".date('d').", ".date('Y');
    
?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="card">
              <div class="card-header">
                <h4>Gestión de Empleados</h4>
              </div>
              <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="nomina-tab" data-toggle="tab" href="#nomina" role="tab"
                          aria-controls="nomina" aria-selected="true">En nómina</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pendientes-tab" data-toggle="tab" href="#pendientes" role="tab"
                          aria-controls="pendientes" aria-selected="false">Pendientes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="bajas-tab" data-toggle="tab" href="#bajas" role="tab"
                          aria-controls="bajas" aria-selected="false">Bajas</a>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="nomina" role="tabpanel" aria-labelledby="nomina-tab">
                    <div class="card-header" style="display: block; text-align: right;">
                      <a href="#" class="btn btn-icon icon-left btn-primary" title="Agregar empleado" data-toggle="modal" data-target="#registroEmpleado"><i class="fas fa-user-plus"></i> Agregar</a>
                      <a href="#" class="btn btn-icon icon-left btn-light" id="cargarArchivo" title="Cargar archivo"><i class="fas fa-file-import"></i> Carga masiva</a>
                      <input id="file-input" type="file" name="name" style="display: none;" />
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                          <thead>
                            <tr>
                              <th class="text-center">
                                #
                              </th>
                              <th>Task Name</th>
                              <th>Progress</th>
                              <th>Members</th>
                              <th>Due Date</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                1
                              </td>
                              <td>Create a mobile app</td>
                              <td class="align-middle">
                                <div class="progress progress-xs">
                                  <div class="progress-bar bg-success width-per-40">
                                  </div>
                                </div>
                              </td>
                              <td>
                                <img alt="image" src="../assets/img/users/user-5.png" width="35">
                              </td>
                              <td>2018-01-20</td>
                              <td>
                                <div class="badge badge-success badge-shadow">Completed</div>
                              </td>
                              <td><a href="#" class="btn btn-primary">Detail</a></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pendientes" role="tabpanel" aria-labelledby="pendientes-tab">
                    Sed sed metus vel lacus hendrerit tempus. Sed efficitur velit tortor, ac efficitur est lobortis
                    quis. Nullam lacinia metus erat, sed fermentum justo rutrum ultrices. Proin quis iaculis tellus.
                    Etiam ac vehicula eros, pharetra consectetur dui. Aliquam convallis neque eget tellus efficitur,
                    eget maximus massa imperdiet. Morbi a mattis velit. Donec hendrerit venenatis justo, eget
                    scelerisque tellus pharetra a.
                  </div>
                  <div class="tab-pane fade" id="bajas" role="tabpanel" aria-labelledby="bajas-tab">
                    Vestibulum imperdiet odio sed neque ultricies, ut dapibus mi maximus. Proin ligula massa,
                    gravida in lacinia efficitur, hendrerit eget mauris. Pellentesque fermentum, sem interdum
                    molestie finibus, nulla diam varius leo, nec varius lectus elit id dolor. Nam malesuada orci non
                    ornare vulputate. Ut ut sollicitudin magna. Vestibulum eget ligula ut ipsum venenatis ultrices.
                    Proin bibendum bibendum augue ut luctus.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

<!-- MODAL CERRAR SESION -->
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

    <!-- MODAL REGISTRO EMPLEADO -->
        <div class="modal fade" id="registroEmpleado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Información básica de registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Nombre(s)</label>
                  <input type="text" id="empNombre" class="form-control">
                </div>
                <div class="form-group">
                  <label>Apellido Paterno</label>
                  <input type="text" id="empApellidoP" class="form-control">
                </div>
                <div class="form-group">
                  <label>Apellido Materno</label>
                  <input type="text" id="empApellidoM" class="form-control">
                </div>
                <div class="form-group">
                  <label>Correo</label>
                  <input type="email" id="empCorreo" class="form-control">
                </div>
                <div class="form-group">
                  <div class="pretty p-icon p-round">
                    <input type="radio" name="icon" />
                    <div class="state p-primary-o">
                      <i class="icon material-icons">done</i>
                      <label>Registro completo</label>
                    </div>
                  </div>
                  <div class="pretty p-icon p-round">
                    <input type="radio" name="icon" />
                    <div class="state p-primary-o">
                      <i class="icon material-icons">done</i>
                      <label>Enviar invitación</label>
                    </div>
                  </div>
              </div>
              <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-primary" id="btnContinuar">Continuar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              </div>
            </div>
          </div>
        </div>
    
  <!-- General JS Scripts -->
  <script src="../assets/js/app.min.js"></script>
  <!-- Template JS File -->
  <script src="../assets/bundles/summernote/summernote-bs4.js"></script>
  <script src="../assets/bundles/datatables/datatables.min.js"></script>
  <script src="../assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="../assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <script src="../assets/js/page/datatables.js"></script>
  <script src="../assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="../assets/js/custom.js"></script>
  <script>

  </script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>