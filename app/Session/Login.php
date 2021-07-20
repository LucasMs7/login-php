<?php

namespace App\Session;

//verificar se está logado;
class Login{

    public static function getUsuarioLogado(){
        self::init();

        return self::isLogged() ? $_SESSION['usuario'] : null;
    }

    private static function init(){
        if (session_status() !== PHP_SESSION_ACTIVE) {

            session_start();
        }
        
    }

    public static function login($obUsuario){
        self::init();

        $_SESSION['usuario'] = ['id'=> $obUsuario->id,'nome'=> $obUsuario->nome,'email'=> $obUsuario->email];

        header('location: index.php');
        exit;

    }

    public static function logout(){
        self::init();

        unset($_SESSION['usuario']);

        header('location: loginpage.php');
        exit;
    }

    public static function isLogged(){
        self::init();

        return isset($_SESSION['usuario']['id']);
    }
//obrigar estar logado;
    public static function requireLogin(){
        if(!self::isLogged()){
            header('location: loginpage.php');
            exit;
        }
    }

    public static function requireLogout(){
        if(self::isLogged()){
            header('location: index.php');
            exit;
        }
    }
}
?>