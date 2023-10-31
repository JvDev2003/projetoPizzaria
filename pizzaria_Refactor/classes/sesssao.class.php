<?php

class Sessao {
    public static function verificaConectado($route) {
        if (!isset($_SESSION)) session_start();

        if (empty($_SESSION['userEmail']) OR empty($_SESSION['userID'])) {
            //destrói a sessão
            session_destroy();
            //redireciona o visitante de volta pro login
            header("Location: /{$route}"); exit;
        }
    }

    public static function verificaPermissao($permissao){
        if (!isset($_SESSION)) session_start();

        if(!isset($_SESSION['userPermissoes']) || $_SESSION['userPermissoes'] < $permissao){
            // Destrói a sessão por segurança
            session_destroy();
            // Redireciona o visitante de volta pro login
            header("Location: /funcionario?erro=2"); exit;
        }
    }

    public static function passaDireto($permissao){
        if(isset($_SESSION['userPermissoes']) && $_SESSION['userPermissoes'] >= $permissao){
            header('Location: /sistema'); exit;
        }
    }

    public static function getUsername(){
        if (!isset($_SESSION)) session_start();
        if(isset($_SESSION['userName'])){

            return "<span>{$_SESSION['userName']}".'<i class="fa-regular fa-circle-user user" style="color: #ffffff;"></i>'."</span>";
        }
    }
}