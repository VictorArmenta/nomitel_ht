window.onload = () => {
    getSolicitudes();
}

const container = document.getElementById("solicitudes");

const vacaciones = document.createElement("div");
    vacaciones.setAttribute("id", "vacaciones");
    vacaciones.setAttribute("class", "col-sm-8");
    vacaciones.innerHTML = `
        <div class="row">
            <div class="col-sm-9">
                <div class="input-group mb-3">
                    <input id="desde" type="date" class="form-control">
                    <span class="input-group-text">Desde/Hasta</span>
                    <input id="hasta" type="date" class="form-control">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="input-group mb-3">
                    <span class="input-group-text">Dias</span>
                    <input type="text" class="form-control" readonly value="2">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="comentario" class="form-label">Comentario</label>
            <textarea class="form-control" id="comentario" rows="3"></textarea>
        </div>
    `;
    var button = document.createElement("button");
        button.setAttribute("id", "enviar_solicitud_btn");
        var icon = document.createElement("i");
            icon.setAttribute("class", "fas fa-paper-plane");
        button.textContent = "Enviar ";
        button.appendChild(icon);
        button.addEventListener("click", ()=>{
            enviarSolicitud();
        });
    vacaciones.appendChild(button);

    
const justificarFalta = document.createElement("div");
        justificarFalta.setAttribute("id", "justificarFalta");
        justificarFalta.setAttribute("class", "col-sm-8");
        justificarFalta.innerHTML = `
            <div class="row">
                <div class="col-sm-9">
                    <div class="input-group mb-3">
                        <input id="desde" type="date" class="form-control">
                        <span class="input-group-text">Desde/Hasta</span>
                        <input id="hasta" type="date" class="form-control">
                        
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Dias</span>
                        <input type="text" class="form-control" readonly value="2">
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="comentario" class="form-label">Comentario</label>
                <textarea class="form-control" id="comentario" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="formato" class="form-label">Formato</label>
                <input class="form-control" type="file" id="formato" accept=".pdf">
            </div>
        `;
        var button = document.createElement("button");
        button.setAttribute("id", "enviar_solicitud_btn");
        var icon = document.createElement("i");
            icon.setAttribute("class", "fas fa-paper-plane");
        button.textContent = "Enviar ";
        button.appendChild(icon);
        button.addEventListener("click", ()=>{
            enviarSolicitud();
        });
        justificarFalta.appendChild(button);


const diaPersonal = document.createElement("div");
        diaPersonal.setAttribute("id", "diaPersonal");
        diaPersonal.setAttribute("class", "col-sm-8");
        diaPersonal.innerHTML = `
        <div class="mb-3">
            <label for="dia" class="form-label">Dia</label>
            <input id="dia" type="date" class="form-control">
        </div>
        <div class="mb-3">
            <label for="comentario" class="form-label">Comentario</label>
            <textarea class="form-control" id="comentario" rows="3"></textarea>
        </div>
    `;
    var button = document.createElement("button");
        button.setAttribute("id", "enviar_solicitud_btn");
        var icon = document.createElement("i");
            icon.setAttribute("class", "fas fa-paper-plane");
        button.textContent = "Enviar ";
        button.appendChild(icon);
        button.addEventListener("click", ()=>{
            enviarSolicitud();
        });
        diaPersonal.appendChild(button);


changeForm = form => {
    switch(form){
        case "Vacaciones":
            container.innerHTML = "";
            container.appendChild(vacaciones);
            break;
        case "Dia Personal":
            container.innerHTML = "";
            container.appendChild(diaPersonal);
            break;
        case "Justificar Falta":
            container.innerHTML = "";
            container.appendChild(justificarFalta);
            break;
    }
}

$("#motivo").change(e=>{
    changeForm($("#motivo").val());
});

enviarSolicitud = () => {
    switch ($("#motivo"),val()){
        case "Vacaciones":
            var desde = $("#desde").val();
            var hasta = $("#hasta").val();
            var commentario = $("#comentario");
            break;
        case "Dia Personal":
            container.innerHTML = "";
            container.appendChild(diaPersonal);
            break;
        case "Justificar Falta":
            container.innerHTML = "";
            container.appendChild(justificarFalta);
            break;
    }
}

genSolicitudes = solicitudes => {
    var container = document.getElementById("solicitudes_content");
    container.innerHTML = "";
    solicitudes.forEach(solicitud => {
        var solicitudContent = document.createElement("div");
            solicitudContent.setAttribute("class", "row solicitud");
            solicitudContent.setAttribute("id", solicitud.id);
        var subSolicitudContent = document.createElement("div");
            subSolicitudContent.setAttribute("class", "col-sm-12");
            subSolicitudContent.innerHTML = `
                    <i class="far fa-file"></i>
                    <p>${solicitud.motivo}</p>
                    <p>${solicitud.desde} a ${solicitud.hasta}</p>
                    <p id="estatus" class="${solicitud.estado.toLowerCase().replaceAll(" ", "")}">${solicitud.estado}</p>
            `;
            var button = document.createElement("i");
                button.setAttribute("id", "vermas");
                button.setAttribute("class", "fas fa-search-plus");
            subSolicitudContent.appendChild(button);
        solicitudContent.appendChild(subSolicitudContent);
        container.appendChild(solicitudContent);
    });
}

getSolicitudes = () => {
    var param = {
        action:"getSolicitudes"
    };
    $.ajax({
        url:"./actions/solicitudes.php",
        method:"POST",
        data:param,
        success:data=>{
            var json = JSON.parse(data);
            genSolicitudes(json);
        },
        error: function (jqXHR, exception) {
            var msg = '';
            if (jqXHR.status === 0) {
                msg = 'Not connect.\n Verify Network.';
            } else if (jqXHR.status == 404) {
                msg = 'Requested page not found. [404]';
            } else if (jqXHR.status == 500) {
                msg = 'Internal Server Error [500].';
            } else if (exception === 'parsererror') {
                msg = 'Requested JSON parse failed.';
            } else if (exception === 'timeout') {
                msg = 'Time out error.';
            } else if (exception === 'abort') {
                msg = 'Ajax request aborted.';
            } else {
                msg = 'Uncaught Error.\n' + jqXHR.responseText;
            }
            Swal.fire('Error', msg, 'error');
        }
    });
}