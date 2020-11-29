<?php

class Bd {

    private $conn;

    function __construct() {
        /* Connect to a MySQL database using driver invocation */
        $this->dsn = 'mysql:dbname=id14818847_usuario_3002;host=localhost';
        $this->user = 'id14818847_wricardo';
        $this->password = 'dw781qaU5N4@f/B]';
        
        try {
            $this->conn = new PDO($this->dsn, $this->user, $this->password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }

    }
    
    function query($sql) {
        try {
            return $this->conn->query($sql) ;
        } catch (PDOException $e) {
            echo 'Query failed: ' . $e->getMessage();
        }
    }
    
    function exec($sql) {
        try {
            return $this->conn->exec($sql) ;
        } catch (PDOException $e) {
            echo 'Exec failed: ' . $e->getMessage();
        }
    }
    
}
?>