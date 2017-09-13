<?php

class Db {
    private $connection;
    private $_host = "localhost";
    private $_username = "root";
    private $_password = "kagunila";
    private $_database = "naldycodes";

    // my Constructor
    function __construct() {
        $this->open_connection();
    }

    public function open_connection(){
        $this->connection = mysqli_connect($this->_host, $this->_username, $this->_password,$this->_database);
        if(!$this->connection){
            die("Connection failed ". mysqli_error($this->connection));
        }
    }

    public function prep_input($value){
        $value =    mysqli_real_escape_string($this->connection, $value);
        return $value;
    }

    public function query($sql){
        $result = mysqli_query($this->connection, $sql);
        if(!$result){
            die("Query failed" .mysqli_error($this->connection));
        } else {
            return $result;
        }
    }

    public function num_rows($result){
        return $result->num_rows;
    }

    public function fetch_array($result){
        return $result->fetch_array();
    }

    public function close_connection(){
        if(isset($this->connection)){
            mysqli_close($this->connection);
            unset($this->connection);
        }
    }

    // Empty clone...this prevents duplication of connection
    private function __clone() { }

}


?>