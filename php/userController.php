<?php

if(isset($_POST['submit'])){
    $username = $_POST['usuario'];
    $pass = $_POST['pass'];
    if(empty($username)|| empty($pass)){
        echo '<div class="alert alert-danger">Nombre de Usuario vacio</div>';
    }
    else{
        $user = new User();
        $username = $user->conectar()->real_escape_string($_POST['usuario']);
        $pass = $user->conectar()->real_escape_string($_POST['pass']);
        list($existe,$nombre)=$user->getUser($username,$pass);
        if($existe){  
            setcookie($username,$nombre);
            header('Location: views/escaleta.php?name='.$username);
        }
        else{
            echo '<div class="alert alert-danger">Usuario o Contraseña Incorrecta</div>';
        }
    }
}