window.onload = () => {
    getPublicaciones();
    getEventos();
  }

  tConvert = time => {
    // Check correct time format and split into components
    time = time.toString ().match (/^([01]\d|2[0-3])(:)([0-5]\d)(:[0-5]\d)?$/) || [time];
  
    if (time.length > 1) { // If time format correct
      time = time.slice (1);  // Remove full string match value
      time[5] = +time[0] < 12 ? 'AM' : 'PM'; // Set AM/PM
      time[0] = +time[0] % 12 || 12; // Adjust hours
    }
    return time.join (''); // return adjusted time or original string
  }

  getEventos = () => {
    var param = {
      action:"getEventos"
    };
    $.ajax({
      url:"./actions/eventos.php",
      method:"POST",
      data:param,
      success:data=>{
        var json = JSON.parse(data);
        var eventos = genEvents(json);
        var eventosContainer = document.getElementById("eventosContainer");
        eventosContainer.innerHTML = "";
        eventosContainer.appendChild(eventos);
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

  getPublicaciones = () => {
    var param = {
      action:"getPubArt"
    };
    $.ajax({
      url:"./actions/publicaciones.php",
      method:"POST",
      data:param,
      success:data=>{
        var json = JSON.parse(data);
        console.log(json);
        var publicaciones = genPubs(json);
        var container = document.getElementById("pub_cont");
        container.innerHTML = "";
        container.appendChild(publicaciones);
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

  genEvents = eventos => {
    var eventosC = document.createElement("div");
      eventosC.setAttribute("class", "ev_content row");
      eventosC.setAttribute("id", "eventosContainer");
    eventos.forEach(evento => {
      var img = document.createElement("img");
        img.src = "./assets/img/users/"+evento.img;
      var infoextraC = document.createElement("p");
        infoextraC.append(img);
        infoextraC.append(" " + evento.nombres + ' ' + evento.apellido_paterno + " " + evento.apellido_materno);
      var infoextra = document.createElement("div");
        infoextra.setAttribute("id", "infoextra");
        infoextra.appendChild(infoextraC);
      var nombreC = document.createElement("p");
        nombreC.textContent = evento.titulo;
      var nombre = document.createElement("div");
        nombre.setAttribute("id", "nombre");
        nombre.appendChild(nombreC);
      var fechaC = document.createElement("p");
        var hora = evento.fecha_evento.split(" ")[1];
        var prefecha = evento.fecha_evento.split(" ")[0];
        var newfecha = prefecha.replaceAll("-", "/");
        var newHora = tConvert(hora.split(":")[0] + ":" + hora.split(":")[1])
        fechaC.textContent = newfecha + " a las " + newHora;
      var fecha = document.createElement("div");
        fecha.setAttribute("id", "fecha");
        fecha.appendChild(fechaC);
      var collapseBtn = document.createElement("button");
        collapseBtn.setAttribute("class", "accordion-button collapsed");
        collapseBtn.setAttribute("type", "button");3
        collapseBtn.setAttribute("data-bs-toggle", "collapse");
        collapseBtn.setAttribute("data-bs-target", "#flush-collapseOne"+evento.id);
        collapseBtn.setAttribute("aria-expanded", "false");
        collapseBtn.setAttribute("aria-controls", "flush-collapseOne"+evento.id);
        collapseBtn.appendChild(nombre);
        collapseBtn.appendChild(fecha);
        collapseBtn.appendChild(infoextra);
      var h2 = document.createElement("h2");
        h2.setAttribute("class", "accordion-header");
        h2.setAttribute("id", "flush-headingOne");
        h2.appendChild(collapseBtn);
      var descC = document.createElement("p");
        descC.textContent = evento.des;
      var desc = document.createElement("div");
        desc.setAttribute("id", "desc");
        desc.appendChild(descC);
      var collapsed = document.createElement("div");
        collapsed.setAttribute("class", "accordion-collapse collapse");
        collapsed.setAttribute("id", "flush-collapseOne"+evento.id);
        collapsed.setAttribute("aria-labelledby", "flush-headingOne");
        collapsed.setAttribute("data-bs-parent", "#accordionFlushExample"+evento.id);
        collapsed.appendChild(desc);
      var accordionItem = document.createElement("div");
        accordionItem.setAttribute("class", "accordion-item");
        accordionItem.appendChild(h2);
        accordionItem.appendChild(collapsed);
      var accordion = document.createElement("div");
        accordion.setAttribute("class", "accordion accordion-flush evento");
        accordion.setAttribute("id", "accordionFlushExample"+evento.id);
        accordion.appendChild(accordionItem);
      eventosC.appendChild(accordion);
    });
    return eventosC;
  }

  genPubs = publicaciones => {
    publicacionesC = document.createElement("div");
    publicacionesC.setAttribute("class", "row pub_content");
    publicacionesC.setAttribute("id", "pub_cont");
    publicaciones.forEach(publicacion => {
      var profilePicSrc = document.createElement("img");
        profilePicSrc.src = "../assets/img/users/"+publicacion.usuario.img;
      var nombreText = document.createElement("p");
        nombreText.textContent = publicacion.usuario.nombre + " " + publicacion.usuario.apellido;
      var profilePic = document.createElement("div");
        profilePic.setAttribute("class", "profile_pic col-sm-2");
        profilePic.appendChild(profilePicSrc);
      var nombre = document.createElement("div");
        nombre.setAttribute("class", "nombre col");
        nombre.appendChild(nombreText);
      var horaText = document.createElement("p");
      preHora = publicacion.fecha.split(" ")[1];
      preFecha = publicacion.fecha.split(" ")[0];
      postFecha = preFecha.replaceAll("-", "/");
      horaText.textContent = postFecha + " | " + tConvert(preHora.split(":")[0] + ":" + preHora.split(":")[1]);
      var hora = document.createElement("div");
        hora.setAttribute("class", "hora col");
        hora.appendChild(horaText);
      var row = document.createElement("div");
        row.setAttribute("class", "row");
        row.appendChild(profilePic);
        row.appendChild(nombre);
        row.appendChild(hora);
      var usuario = document.createElement("div");
        usuario.setAttribute("class", "usuario col-sm-12");
        usuario.appendChild(row);
      var headUp = document.createElement("div");
        headUp.setAttribute("class", "row");
        headUp.appendChild(usuario);
      var descripcionText = document.createElement("p");
        descripcionText.textContent = publicacion.des;
      var descripcion = document.createElement("div");
        descripcion.setAttribute("class", "descripcion col-sm-12");
        descripcion.appendChild(descripcionText);
      var headDown = document.createElement("div");
        headDown.setAttribute("class", "row");
        headDown.appendChild(descripcion);
      var header = document.createElement("div");
        header.setAttribute("class", "header col-sm-12");
        header.appendChild(headUp);
        header.appendChild(headDown);
      var rowUp = document.createElement("div");
        rowUp.setAttribute("class", "row");
        rowUp.appendChild(header);

        var inner = document.createElement("div");
        inner.setAttribute("class", "carousel-inner");
        inner.addEventListener("mouseenter", e=>{
          var id = e.target.parentNode.id.split("-")[1];
          $("#"+id + " .contenidoArticulo").show();
        });
        inner.addEventListener("mouseleave", e=>{
          var id = e.target.parentNode.id.split("-")[1];
          $("#"+id + " .contenidoArticulo").hide();
        });
      var imgSrcA = document.createElement("img");
        imgSrcA.src = "./assets/img/posts/"+publicacion.img;
        imgSrcA.setAttribute("class", "d-block w-100");
      var contenido = document.createElement("p");
        contenido.setAttribute("class", "contenidoArticulo");
        contenido.textContent = publicacion.contenido;
      var item = document.createElement("div");
        item.setAttribute("class", "oscuro");
        item.appendChild(imgSrcA);
        item.appendChild(contenido);
        inner.appendChild(item);
      var carousel = document.createElement("div");
        carousel.setAttribute("id", "publicacion-"+publicacion.id);
        carousel.setAttribute("class", "carousel  slide carousel-fade");
        carousel.setAttribute("data-bs-ride", "carousel");
        
        carousel.appendChild(inner);
      var body = document.createElement("div");
        body.setAttribute("class", "body col-sm-12");
      var rowDown = document.createElement("div");
        rowDown.setAttribute("class", "row");
        rowDown.appendChild(carousel);
      var publicacioni = document.createElement("div");
        publicacioni.setAttribute("id", publicacion.id);
        publicacioni.setAttribute("class", "publicacion");
        publicacioni.appendChild(rowUp);
        publicacioni.appendChild(rowDown);
      publicacionesC.appendChild(publicacioni);
    });
    return publicacionesC;
  }