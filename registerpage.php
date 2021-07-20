<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Usuario;
use \App\Session\Login;

Login::requireLogout();

$alertaCadastro = '';





if (isset($_POST['acao'])) {

        if(isset($_POST['name'],$_POST['email'],$_POST['senha'])) {
               
            $obUsuario = new Usuario;
            $obUsuario-> nome = $_POST['name'];
            $obUsuario-> email = $_POST['email'];
            $obUsuario-> senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
            $obUsuario->cadastrar();

            header('location: loginpage.php');
        }
    }
         




include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario-register.php';
include __DIR__.'/includes/footer.php';

?>

