<?php
    require 'config.php';

    Class Pedido{
        private $data;
        private $fkCliente;
        private $valorTotal;
        private $id;
        private $conexao;

        //**************************************************************************************
        //
        // -- Funções de criação de um pedido e inserção no banco
        //
        private function createPedido(){
            $this->conexao->executaQuery("INSERT INTO `pedido`( `data`, `fkCliente`) VALUES ('$this->data','$this->fkCliente')");
            $this->id = $this->conexao->id();
        }

        public function __construct($fkCliente) {
            $this->data = date('Y/m/d H:i:s');
            $this->fkCliente = $fkCliente;
            $this->valorTotal = 0;
            $this->conexao = new Conexao();
            $this->createPedido();
        }


        //**************************************************************************************
        //
        // -- getters do pedido
        //

        public function getData (){return $this->data;}
        public function getCliente (){return $this->fkCliente;}
        public function getValorTotal (){return $this->valorTotal;}
        public function getId (){return $this->id;}

        //**************************************************************************************
        //
        //
        //

        public function trataString($string){
            return preg_replace('/_/', " ", $string);
        }

        public function insereItens($itens){
            $query = "INSERT INTO `itemPedido` ( `fkPedido`, `quantidade`, `fkPizza`) VALUES ";
            $count = 0;
            foreach($itens as $key => $item){
                $id = $this->trataString($key);
                if($count == 0){
                    $query .=  "('$this->id','$item', '$id')";
                    $count++;
                }else{
                    $query .=  ",('$this->id','$item', '$id')";
                }  
            }
            $this->conexao->executaQuery($query);
        }
    }
?>