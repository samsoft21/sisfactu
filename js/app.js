(function(){

cargarEmpleados()


function cargarEmpleados() {

    $.ajax({
        url: './php/cargarempleado.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            let filas = '';
            data.forEach(emp => {
                filas += `
                <tr>
                    <td>${emp.ce_persona}</td>
                    <td>${emp.ap_persona} ${emp.no_persona}</td>
                    <td>${emp.mo_persona}</td>
                </tr>
                `;

            });

            $("#tablausuario").html(filas);
        },

        error: function(xhr, status, error) {
            console.log("Error en ajax:", error);
        }

    });

}

})();