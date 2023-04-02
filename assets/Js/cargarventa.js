$(()=>{
    cargarCargo()
})

function cargarCargo(){

    const formData = new FormData()
    formData.append('funcion', 'cargarCargo');

    $.ajax({
        url: "controllers/ventaController.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
        
            document.getElementById("id_cargo").innerHTML=data;
            
    }
    })

}

$("#guardarVenta").click(function (){

    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var documento = $("#documento").val();
    var venta = $("#venta").val();
    var cargo = $("#id_cargo").val();
    var fecha = $("#fecha").val();


    const formData = new FormData()
    formData.append('funcion', 'guardarVenta');
    formData.append('nombre', nombre);
    formData.append('apellido', apellido);
    formData.append('documento', documento);
    formData.append('venta', venta);
    formData.append('cargo', cargo);
    formData.append('fecha', fecha);

    $.ajax({
        url: "controllers/ventaController.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
        
            if(data == '\r\n1'){
                Swal.fire('Venta registrada con exito');

                setTimeout(() => {
                    location.reload();
                  }, "2000");

            }else{
                Swal.fire('No se pudo registrar la venta');
            }
            
    }
    })
})