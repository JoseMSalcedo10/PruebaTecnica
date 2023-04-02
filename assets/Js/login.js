$('.btnIngresar').click(function(){
    let usuario = $("#user").val();
    let contrasena = $("#pass").val();

    comprobarCredenciales(usuario, contrasena);
})

function comprobarCredenciales(user, pass){
    
    const formData = new FormData()
    formData.append('funcion', 'loginUsuario');
    formData.append('user', user);
    formData.append('pass', pass);

    $.ajax({
        url: "./controllers/userController.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {

        if (data == 'error pass'){
            Swal.fire('Contraseña incorrecta');
        }else if(data == 'error user'){
            Swal.fire('Usuario no encontrado');
        }else{
            location.href ='index.php';
        }
        
    }
    })

}
