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

        $conn = new mysqli($servername, $username, $password, 'project');

        self::$conn = $conn;
        return $conn;
    }

    public function query($query) {
        $result = mysqli_query(self::$conn, $query);
        if(!$result) { return []; }

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

    public function getProduct($id) {
        $query = "SELECT * FROM product where product_id=".$id;
        return $this->query($query)[0];
    }

    public function getUser() {
        if($_SESSION['user']) {
            return $_SESSION['user'];
        } else {
            return ['name'=> 'Guest', 'user_email' => ''];
        }
    }

    public function loginUser($email, $password){
        $query = "SELECT * FROM users where password='$password' AND user_email='$email' limit 1";
        $result = $this->query($query);
        $user = sizeof($result) > 0 ? $result[0] : null;
        $_SESSION['user'] = $user;
        return $this->getUser();
    }

    public function createUser($name, $mail, $password) {
        return mysqli_query(self::$conn, "INSERT INTO users (user_email, password, name) VALUES ('$mail','$password', '$name')");
    }

    public function updateQuantity($product_id, $user_email, $inc = true) {
        $val = $inc ? 1 : -1;
        return mysqli_query(self::$conn, "UPDATE cart SET quantity=GREATEST(1, quantity + $val) where product_id='$product_id' and user_email='$user_email' limit 1");
    }

    public function addToCart($product_id, $quantity, $user_email) {
        $is_item_exist = $this->query("Select * from cart where product_id='$product_id' and user_email='$user_email' limit 1");
        if(sizeof($is_item_exist) > 0) {
            return $this->updateQuantity($product_id, $user_email);
        } else {
            return mysqli_query(self::$conn, "INSERT INTO cart (user_email, product_id, quantity) VALUES ('$user_email','$product_id', '$quantity')");
        }
    }

    public function deleteCartItem($product_id, $user_email) {
        return mysqli_query(self::$conn, "delete from cart where product_id='$product_id' and user_email='$user_email'");
    }

    public function getCartItems($user_email) {
        return $this->query("SELECT * from cart INNER JOIN product ON cart.product_id = product.product_id where user_email='$user_email'");
    }


    public function getWishListItems($user_email) {
        return $this->query("SELECT * from wish_list INNER JOIN product ON wish_list.product_id = product.product_id where user_email='$user_email'");
    }

    public function addToWishList($user_email, $product_id) {
        $is_item_exist = $this->query("Select * from wish_list where product_id='$product_id' and user_email='$user_email' limit 1");
        if(!sizeof($is_item_exist) > 0) {
            return mysqli_query(self::$conn, "INSERT INTO wish_list (user_email, product_id) VALUES ('$user_email','$product_id')");
        }
    }

    public function deleteFromWishList($product_id, $user_email) {
        return mysqli_query(self::$conn, "delete from wish_list where product_id='$product_id' and user_email='$user_email'");
    }
}
