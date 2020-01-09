<?php
require('connect.php');

if (isset($_POST['username'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $query = "INSERT INTO `orders` (`username`, `email`, `address`, `product`, `price`, `quantity`) VALUES ('$username', '$email', '$address', '$product', '$price', '$quantity');";
    $result = mysqli_query($connection, $query);

    if($result){
        echo "<div style='margin-bottom: 0px' class=\"alert alert-success\" role=\"alert\">Successfully ordered $product!</div>";
        require_once "product.html";
    }else{
        echo "<div style='margin-bottom: 0px' class=\"alert alert-danger\" role=\"alert\">Order failed, please try again!</div>";
        echo "<br><a href='product.html'>Back</a>";
    }
}