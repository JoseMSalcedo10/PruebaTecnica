<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container">
        <div class="tituloLogin">
                <h2>Iniciar Sesión</h2>
            </div>
        <div class="caja">
            <div>
                <form action="javascript:void(0);" name="login-form">
                    <div class="form-element">
                        <input type="text" placeholder="Usuario" name="username" id="user" required />
                    </div>
                    <div class="form-element">
                        <input type="password" placeholder="Contraseña" id="pass" name="password" required />
                    </div>
                    <button type="submit" name="ingresar" value="ingresar" class="btnIngresar">Ingresar</button>
                </form>
            </div>
        </div>
        
    </div>

</body>
<script src="assets/Js/Jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="assets/Js/login.js"></script>

</html>