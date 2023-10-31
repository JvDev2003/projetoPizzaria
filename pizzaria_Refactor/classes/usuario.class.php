<?php 

    class User {
        public static function regitrarUsuario($dadosUsuario, $conn) {
            $query = $conn->prepare("INSERT INTO login (email, senha, permissoes) VALUES ('{$dadosUsuario['email']}', '{$dadosUsuario['senha']}', 0)");
            $query->execute();
        }

        public static function registrarDadosClientes($dadosUsuario, $conn) {
            $query = $conn->prepare("INSERT INTO cliente (cpf, nome, fklogin) VALUES ('{$dadosUsuario['cpf']}', '{$dadosUsuario['nome']}', '{$dadosUsuario['email']}')");
            $query->execute();
        }

        public static function registrarDadosEndereco($dadosUsuario, $conn){
            $query = $conn->prepare("INSERT INTO endereco (rua, cep, numero, fkCliente) VALUES ('{$dadosUsuario['rua']}', '{$dadosUsuario['cep']}', {$dadosUsuario['numero']}, '{$dadosUsuario['cpf']}')");
            $query->execute();
        }
    }