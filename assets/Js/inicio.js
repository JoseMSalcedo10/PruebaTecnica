$(()=>{
    cargarVentas();
})

function cargarVentas(){

    const formData = new FormData()
    formData.append('funcion', 'cargarVentas');

    $.ajax({
        url: "controllers/ventaController.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {        
            document.getElementById("table").innerHTML=data;
    }
    })


}

$("#btnCalcularCom").click(function (){
    const formData = new FormData()
    formData.append('funcion', 'calcularComisión');

    $.ajax({
        url: "controllers/ventaController.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {  

            Swal.fire('Comisión calculada exitosamente');

            setTimeout(() => {
                mostrarcomi(data);
              }, "2000");

            
    }
    })
})

function mostrarcomi(data){
    document.getElementById("table").innerHTML=data;

            $("#btnCalcularCom").hide();
}