<?php
class DB{
    private $connection;

    public function __construct(){
        $servername = "localhost";
        $username = "shop";
        $password = "SomeHardPassword1";
        $dbname = "shop";

        $this->connection = mysqli_connect($servername, $username, $password, $dbname);

        if (!$this->connection) {
            die('Connect Error (' . mysqli_connect_errno() . ') '.mysqli_connect_error() );
        }

        mysqli_set_charset($this->connection, "utf8");
    }

    public static function getInstance(){
        static $db = null;
        if($db === null){
            $db = new DB();
        }
        return $db;
    }

    public function queryOne( $query )
    {
        $result = mysqli_query($this->connection, $query);

        if (mysqli_affected_rows($this->connection) > 0) {

            $row = mysqli_fetch_assoc($result);
            return $row;
        }
        return false;
    }

    public function select($query){
        $returnList = [];

        $result = mysqli_query($this->connection, $query);

        if (mysqli_affected_rows($this->connection) > 0) {

            while( $row = mysqli_fetch_assoc($result)){
                $result[] = $row;
            }
        }
        return $returnList;
    }
}