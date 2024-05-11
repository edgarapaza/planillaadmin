$(document).ready(function() {
    // OBTENER TABLAS
    // TABLA LOGIN
    $.ajax({
        type: "Get",
        url: "http://localhost/planillaadmin/tablas/getLogin",
        success: function (response) {
            let data = JSON.parse(response);
            let html = '';
            data.forEach(element => {
                let nivel = element.nivusu == 1 ? 'Administrador' : 'Personal';
                let estado = element.estado == 1 ? 'Activo' : 'Inactivo';
                html += `
                <tr>
                    <td>${element.nombre}</td>
                    <td>${element.usuario}</td>
                    <td>${element.pass}</td>
                    <td>${nivel}</td>
                    <td>${estado}</td>
                    <td>${element.fecha}</td>
                    <td>
                    <a href="http://localhost/planillaadmin/tablas/renderEdit/${element.id}" class="button success">Editar</a>
                    </td>
                    <td><a href="http://localhost/planillaadmin/tablas/deleteLogin/${element.id}" class="button alert">Eliminar</a></td>
                </tr>
                    `
            });
            $("#login").html(html);
        }
    });
    // TABLA PERSONAL
    $.ajax({
        type: "Get",
        url: "http://localhost/planillaadmin/tablas/getPersonal",
        success: function (response) {
            let data = JSON.parse(response);
            let html = '';
            data.forEach(element => {
                html += `
                <tr>
                    <td>${element.nombre}</td>
                    <td>${element.apellido}</td>
                    <td>${element.sexo}</td>
                    <td>${element.fecha}</td>
                    <td>${element.fechacre}</td>
                </tr>
                    `
            });
            $("#personal").html(html);
        }
    });
});