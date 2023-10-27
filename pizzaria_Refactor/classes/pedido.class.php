<?php 
    class Pedido{
        private static $pedidos = array();

        public static function getPedidos(){
            $conn = Conexao::get();

            $query = $conn->query("SELECT p.idPedido, p.data, c.nome, e.rua, e.numero, e.cep FROM pedido p, cliente c, endereco e WHERE p.fkCliente = c.cpf AND c.cpf = e.fkCliente");
            $query->execute();
            $dados = $query->fetchAll(PDO::FETCH_ASSOC);

            foreach($dados as $value){
                self::getItems($value['idPedido'], $conn);

                self::$pedidos[] =['id' => $value['idPedido'], 'data' => $value['data'], 'nome' => $value['nome'], 
                'endereco' => ['rua' => $value['rua'],'numero' => $value['numero'],'cep' => $value['cep']],
                'items' => self::getItems($value['idPedido'], $conn),
                'valor' => self::getValor($value['idPedido'], $conn)];
            }

            return self::$pedidos;
        }

        private static function getItems($id, $conn){
            $query = $conn->query("SELECT quantidade, fkPizza FROM itemPedido WHERE fkPedido = {$id}");
            $query->execute();
            $frase = '';
            foreach($query->fetchAll(PDO::FETCH_ASSOC) as $item){
                $frase.="{$item['quantidade']} X {$item['fkPizza']} <br />";
            }
            return $frase;
        }

        private static function getValor($id, $conn){
            $query = $conn->query("SELECT SUM(p.valor) AS valor FROM pizza p, itempedido i WHERE i.fkPedido = {$id} AND i.fkPizza = p.nome");
            $query->execute();
            foreach($query->fetchAll(PDO::FETCH_ASSOC) as $item){
                $valor = $item;
            }
            return $valor['valor'];
        }
    }