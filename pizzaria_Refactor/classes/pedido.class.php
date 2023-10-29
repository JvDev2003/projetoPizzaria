<?php 
    class Pedido{
        private static $pedidos = array();

        public static function getPedidos(){
            $conn = Conexao::get();

            $query = $conn->query("SELECT p.idPedido, p.data, c.nome, e.rua, e.numero, e.cep FROM pedido p, cliente c, endereco e WHERE p.fkCliente = c.cpf AND c.cpf = e.fkCliente AND concluido = 0");
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
            $query = $conn->query("SELECT SUM(p.valor*i.quantidade)  AS valor FROM pizza p, itempedido i WHERE i.fkPedido = {$id} AND i.fkPizza = p.nome");
            $query->execute();
            foreach($query->fetchAll(PDO::FETCH_ASSOC) as $item){
                $valor = $item;
            }
            return $valor['valor'];
        }

        public static function trataString($string){
            return preg_replace('/_/', " ", $string);
        }

        public static function makePedido($idCliente, $itens){
            $conn = Conexao::get();
            $date = date('Y/m/d H:i:s');

            $query = $conn->prepare("INSERT INTO `pedido`( `data`, `fkCliente`) VALUES ('$date','$idCliente')");
            $query->execute();

            self::insereItens($conn->lastInsertId(), $itens, $conn);
        }

        private static function insereItens($idPedido, $itens, $conn){
            
            $query = "INSERT INTO `itemPedido` (`fkPedido`, `quantidade`, `fkPizza`) VALUES ";
            $count = 0;
            foreach($itens as $key => $item){
                $id = self::trataString($key);
                if($count == 0){
                    $query .=  "('$idPedido','$item', '$id')";
                    $count++;
                }else{
                    $query .=  ",('$idPedido','$item', '$id')";
                }  
            }

            $dados = $conn->prepare($query);
            $dados->execute();
        }

        public static function concluirPedido($idPedido){
            $conn = Conexao::get();
            echo $idPedido;
            $query = $conn->prepare("UPDATE `pedido` SET `concluido`= 1 WHERE `idPedido` = {$idPedido}");
            $query->execute();
        }

        public static function deletarPedido($idPedido){
            $conn = Conexao::get();
            $query = $conn->prepare("DELETE FROM `pedido` WHERE idPedido = {$idPedido}");
            $query->execute();
        }
    }