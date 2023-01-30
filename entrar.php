<?php 
    if (isset($_POST['login'])) {
        $email= $_POST['email'];
        $pass= $_POST['pass'];

        $user_email= md5($email);
        $user_pass= md5($pass);
        
        $query_email= "SELECT * FROM usuario WHERE email='$user_email'";
        $resultado_email = mysqli_query($conn,$query_email);

        $query_pass= "SELECT * FROM usuario WHERE pass='$user_pass'";
        $resultado_pass = mysqli_query($conn,$query_pass);

        $row_email = mysqli_fetch_array($resultado_email);
        $row_pass = mysqli_fetch_array($resultado_pass);

        if (!$row_email & !$row_pass) {
            $_SESSION['mensaje'] = 'Correo y contraseña es incorrecto';
            $_SESSION['tipo_mensaje'] = 'danger';
        }elseif (!$row_email) {
            $_SESSION['mensaje'] = 'Correo es incorrecto';
            $_SESSION['tipo_mensaje'] = 'danger';
        }elseif (!$row_pass) {
            $_SESSION['mensaje'] = 'Contraseña es incorrecto';
            $_SESSION['tipo_mensaje'] = 'danger';
        }else{
            if ($row_email['email']==$user_email & $row_pass['pass']==$user_pass) {
                $_SESSION['user_id'] = $row_email['id'];
                header("Location: index.php");
            }
        }
    }    
?>