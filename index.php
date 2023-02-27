<?php 
include_once 'Php/conexion.php';
include_once 'Php/userModel.php';
include_once 'Php/userController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <title>Login</title>
<style>
.login{
    width: 25%;
    margin: 0 auto;
    margin-top:150px ;
    align-content: center;
    border: 1px solid #E5E5E5;
    padding: 20px;
    border-radius: 30px;
    box-shadow: 10px 5px 5px #C6C6C6;
}
.form-control{
    border-radius: 60px;
}

</style>
</head>
<body style="">
    <div class="container-fluid">
        <div class="login">
        <div class="img-logo" style="text-align: center;" >
        <img src="img/logoBolivision.png" width="150px" height="150px">
        </div>
        <form action="" method="POST">
            <div class="mb-3">
        <label for="Usuario" class="form-label">Nombre de Usuario:</label>
        <input type="text" class="form-control" placeholder="JuanPerez" name="usuario">
        </div>
        <div class="mb-3">
        <label for="Pass" class="form-label">Contraseña:</label>
        <input type="password" class="form-control" name="pass">
        <br>

        <button type="submit" class="btn btn-danger" name="submit" style="width: 100%; border-radius: 60px;"><strong>INGRESAR</strong></button>
        </div>        
    </form>    
    </div>
       
        
        
    </div>
    
</body>
</html>