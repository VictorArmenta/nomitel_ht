window.onload = e=>{
    getEmplaedo();
}

getEmplaedo = () => {
    var param = {
        action:"getSessionEmpleado"
    };  
    $.ajax({
        url:"./actions/empleados.php",
        method:"POST",
        data:param,
        success:data=>{
            var json = JSON.parse(data);
            setEmpleado(json);
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

setEmpleado = empleado => {
    $("#nombres").val(empleado.nombres);
    $("#apellido_paterno").val(empleado.apellido_paterno);
    $("#apellido_materno").val(empleado.apellido_materno);
    $("#fecha_nacimiento").val(empleado.fecha_nacimiento.split("/")[2] + "-" + empleado.fecha_nacimiento.split("/")[1] + "-" + empleado.fecha_nacimiento.split("/")[0]);
    $("#telefono").val(empleado.telefono);
    $("#mail").val(empleado.correo);
    $("#estado_civil").val(empleado.estado_civil);
    $("#nacionalidad").val(empleado.nacionalidad);
    if(empleado.genero == "Hombre"){
        $("#hombre").attr("checked", "true");
    }
    if(empleado.genero == "Mujer"){
        $("#mujer").attr("checked", "true");
    }
    $("#cp").val(empleado.codigo_postal);
    $("#estado").val(empleado.estado);
    $("#municipio").val(empleado.municipio);
    $("#colonia").val(empleado.colonia);
    $("#calle").val(empleado.calle);
    $("#no_ext").val(empleado.no_ext);
    $("#no_int").val(empleado.no_int);
    $("#rfc").val(empleado.rfc);
    $("#curp").val(empleado.curp);
    $("#ine").val(empleado.ine);
    $("#imss").val(empleado.no_imss);
    $("#infonavit").val(empleado.credito_infonavit);
    $("#com_domicilio").text(empleado.com_domicilio.split("/")[empleado.com_domicilio.split("/").length-1]);
    $("#com_domicilio").attr("href", empleado.com_domicilio);
    $("#com_domicilio").attr("target", "_blank");
    $("#acta_nacimiento").text(empleado.acta_nacimiento.split("/")[empleado.acta_nacimiento.split("/").length-1]);
    $("#acta_nacimiento").attr("href", empleado.acta_nacimiento);
    $("#acta_nacimiento").attr("target", "_blank");
    $("#carta_patronal").text(empleado.carta_patronal.split("/")[empleado.carta_patronal.split("/").length-1]);
    $("#carta_patronal").attr("href", empleado.carta_patronal);
    $("#carta_patronal").attr("target", "_blank");
}

$(".btn-azul").click(e=>{
    updatePerfil();
});

updatePerfil = () => {
    if($("#telefono").val() != "" && $("#estado_civil").val() != "" && $("#nacionalidad").val() != "" && $("#cp").val() != "" &&$("#colonia").val() != "" && $("#calle").val() != "" && $("#no_ext").val() != "" && $("#no_int").val() != ""){
        var telefono = $("#telefono").val();
        var estado_civil = $("#estado_civil");
        var nacionalidad = $("#nacionalidad");
        var codigo_postal = $("#cp").val();
        var colonia = $("#colonia").val();
        var calle = $("#calle").val();
        var no_ext = $("#no_ext").val();
        var no_int = $("#no_int").val();

        var formdata = new FormData();

        formdata.append("action", "updatePerfil");
        formdata.append("telefono", telefono);
        formdata.append("estado_civil", estado_civil);
        formdata.append("nacionalidad", nacionalidad);
        formdata.append("codigo_postal", codigo_postal);
        formdata.append("colonia", colonia);
        formdata.append("calle", calle);
        formdata.append("no_ext", no_ext);
        formdata.append("no_int", no_int);

        $.ajax({
            url:"./actions/empleados.php",
            method:"POST",
            data:formdata,
            processData: false,
            contentType: false,
            success:data=>{
                if(data == "true"){
                    getEmplaedo();
                    Swal.fire('', 'Los datos se guardaron correctamente', 'success');
                }
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

    }else{
        Swal.fire('', 'no puede guardar compos vacios   ', 'warning');
    }
}