(function(){

cargarInventario()


function cargarInventario() {

    $.ajax({
        url: '../api/api_inventario.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            let filas = '';
            data.forEach(emp => {
                filas += `
                <tr>
                    <td>${emp.cod_inventario}</td>
                    <td>${emp.pro_inventario}</td>
                    <td>${emp.can_inventario}</td>
                    <td>${emp.val_inventario}</td>
                   <td>${emp.est_inventario}</td>
                   <td><button type='button' class='btn btn-info btn-edita btn-sm' data-id="${emp.cod_inventario}" >editar</button>
                    <button type='button' class='btn btn-danger btn-eliminar btn-sm' data-id="${emp.cod_inventario}" >eliminar</button></td>


                    
                </tr>
                `;

            });

            $("#tablainventario").html(filas);
        },

        error: function(xhr, status, error) {
            console.log("Error en ajax:", error);
        }

    });

}

})();