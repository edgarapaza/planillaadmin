$(document).ready(function() {
    $.ajax({
        type: "Get",
        url: "http://localhost/planillaadmin/registro/sinLogin",
        data: "data",
        success: function (response) {
            let data = JSON.parse(response);
            let html = '';
            data.forEach(element => {
                html += `
                    <option value="${element.id}">${element.nombres}</option>
                    `
            });
            $("#personal").html(html);
        }
    });
});