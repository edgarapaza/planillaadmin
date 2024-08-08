$(document).ready(function () {
  var host = "localhost";
  // OBTENER TABLAS
  // TABLA LOGIN
  $.ajax({
    type: "Get",
    url: `http://${host}/planillaadmin/tablas/getLogin`,
    success: function (response) {
      let data = JSON.parse(response);
      let html = "";
      data.forEach((element) => {
        let nivel = "";
        if (element.nivusu == 0) {
          nivel = "Personal";
        } else if (element.nivusu == 1) {
          nivel = "Administrador";
        } else if (element.nivusu == 2) {
          nivel = "Visitante";
        }
        let estado = element.estado == 1 ? "Activo" : "Inactivo";
        html += `
                <tr>
                    <td>${element.nombre}</td>
                    <td>${element.usuario}</td>
                    <td>${element.pass}</td>
                    <td>${nivel}</td>
                    <td>${estado}</td>
                    <td>${element.fecha}</td>
                    <td>
                    <a href="http://${host}/planillaadmin/tablas/renderEdit/${element.id}" class="button success">Editar</a>
                    </td>
                    <td><a href="http://${host}/planillaadmin/tablas/deleteLogin/${element.id}" class="button alert">Eliminar</a></td>
                </tr>
                    `;
      });
      $("#login").html(html);
      initPaginador(5, "login", "usuarios-paginacion");
    },
  });
  // TABLA PERSONAL
  $.ajax({
    type: "Get",
    url: `http://${host}/planillaadmin/tablas/getPersonal`,
    success: function (response) {
      console.log(response);
      let data = JSON.parse(response);
      let html = "";
      data.forEach((element) => {
        html += `
                <tr>
                    <td>${element.nombre}</td>
                    <td>${element.apellido}</td>
                    <td>${element.sexo}</td>
                    <td>${element.fecha}</td>
                    <td>${element.fechacre}</td>
                </tr>
                    `;
      });
      $("#personal").html(html);
      initPaginador(5, "personal", "personal-paginacion");
    },
  });
});

