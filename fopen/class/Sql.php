<?php

class Sql extends PDO {

    private $conn;

    public function __construct() {

        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

    }

// metodo setParams 
    private function setParams($statement, $parameters = array()) {

        foreach ($parameters as $key => $value) {

            $this->setParam($statement, $key, $value);

        }

    }
// para apenas um parametro
    private function setParam($statement, $key, $value){

        $statement->bindParam($key, $value);

    }

     // rawQuery = comandos sql e params = como array
    public function query($rawQuery, $params = array()) {

               // unindo a conexão ou query
        $stmt = $this->conn->prepare($rawQuery);

        $this->setParams($stmt, $params);

        $stmt->execute();

        return $stmt;

    }

    public function select($rawQuery, $params = array()):array //declaracao de retorno de funcao
    {

        $stmt = $this->query($rawQuery, $params);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

}

?>