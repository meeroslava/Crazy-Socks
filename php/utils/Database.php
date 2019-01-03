<?php
class Database {
    public static $conn;

    public function __construct(){
        self::connect();
    }

    public static function connect(){ //connect to database
        if(self::$conn) { return self::$conn; }

        $servername = "localhost";
        $username = "root";
        $password = "root";

        $conn = new mysqli($servername, $username, $password, 'crazy');

        self::$conn = $conn;
        return $conn;
    }

    public function query($query) {
        $result = mysqli_query(self::$conn, $query);
        $array = array();
        if (mysqli_num_rows($result)>0){
            while ($row = mysqli_fetch_assoc($result)){
                $array[] = $row;
            }
        }
        return $array;
    }

    public function getAllProducts() {
        $query = "SELECT * FROM product";
        return $this->query($query);
    }

    public function getHighSocks() {
        $query = "SELECT * FROM product where category='high'";
        return $this->query($query);
    }


    public function getLowSocks() {
        $query = "SELECT * FROM product where category='low'";
        return $this->query($query);
    }

    public function setUser(){

    }
}
