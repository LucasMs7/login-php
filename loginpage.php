<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Usuario;
use \App\Session\Login;

Login::requireLogout();

$alertaLogin = '';

if (isset($_POST['acao'])) {
 
      $obUsuario = Usuario::getUsuarioPorEmail($_POST['email']);

      

      if (!$obUsuario instanceof Usuario || !password_verify($_POST['senha'],$obUsuario->senha)) {
        $alertaLogin = 'E-mail ou senha inválidos';
      }
      else{
        Login::login($obUsuario);
      }
  

}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario-login.php';
include __DIR__.'/includes/footer.php';

?>

