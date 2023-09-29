<?php
    Class Conexao{
        public $conn; // conexão com o banco
        private $servername = "localhost";//nome do server
	    private $database = "pizzaria";//nome do banco de dados
        private $username = "root";//nome do usuario
	    private $senha = "";//senha do usuario


        //******************************************************************************************************
        //
        // -- Funcões de controle do banco para criar e fechar a conexão com o banco
        //

        public function iniciarConexao(){
            return $this->conn = mysqli_connect($this->servername,$this->username,$this->senha,$this->database) or die('ERRO!!' . mysqli_connect_error());
        }

        public function __construct(){
            return $this->iniciarConexao();
        }

        public function __desconstruct(){
            return mysqli_close($this->conn);  
        }

        //*******************************************************************************************************
        //
        // -- Funcões de controle de query para manipular e extrair dados das tabelas do banco
        //

        public function executaQuery($query){
            return mysqli_query($this->conn,$query);
        }

        public function executaSelect($query){
            return $this->arrays($query, true);
        }
        
        public function id(){//recebe o ultimo id inserido no banco
            return mysqli_insert_id($this->conn);     
        }

        public function fields($table){
		
            $fields = array();
            
            $result = $this->query("SHOW COLUMNS FROM tbl_".strtolower($table));
            
            while($row = $result->fetch_object()){
                
                array_push($fields, $row);
                    
            }
            
            return $fields;
                
        }

        public function arrays($query, $array = false){
		
            $a = $this->executaQuery($query);	
            $fields = array();
            
            $finfo = $a->fetch_fields();
    
            foreach($finfo as $val){
                
                array_push($fields, array(
                    "field"=>$val->name,
                    "type"=>strtoupper($val->type),
                    "max_length"=>$val->max_length
                ));
                
            }
            
            $data = array();
            
            while($a1 = $a->fetch_array()){
                
                $record = array();
                
                foreach($fields as $f){
                    
                    switch($f['type']){
                        case 'DATETIME':
                        $record[$f['field']] = strtotime(formatdatetime($a1[$f['field']],8));
                        break;
                        case 'MONEY':
                        $record[$f['field']] = number_format($a1[$f['field']],2,'.','');
                        break;
                        case 'DECIMAL':
                        $record[$f['field']] = number_format($a1[$f['field']],2,'.','');
                        break;
                        default:
                        $record[$f['field']] = utf8_encode(trim($a1[$f['field']]));
                        break;
                    }
                        
                }
                
                array_push($data, $record);
                    
            }
            
            if(!$array){
                return $data;	
            }else{		
                if(count($data)==1 && $array){
                    return $data[0];
                }else{
                    return $data;
                }
            }
                
        }

        //*******************************************************************************************************


    }
?>