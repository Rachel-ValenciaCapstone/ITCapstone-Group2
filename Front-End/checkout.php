<?php
//Starts a session
session_start();//
//var_dump($_POST);
    $cart = $_POST['cart'];
    $userId = $_POST['userId'];


        // Connect to database
        $mysqli = require __DIR__ . "/database_handler.php";

        // Check for a successful database connection
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }
        $total=0;

        foreach ($cart as $item)
        {
            $total += ($item['price'] * $item['quantity']);
        }
        $tax = $total * .065;
        $total += $tax + 6.99;
        $insertOrder = "INSERT INTO orders1(user_id, order_date, total_amount, status) VALUES(?,SYSDATE(),?,0)";
        $stmt = $mysqli->prepare($insertOrder);
        $stmt->bind_param("ss", $userId, $total);
        $stmt->execute();
        $orderId = mysqli_insert_id($mysqli);


        $insertOrderDetail = "INSERT INTO order1_items(order_id, product_id, quantity, subtotal) VALUES(?,?,?,?)";
        
        foreach ($cart as $item)
        {

            $subtotal = ($item['price'] * $item['quantity']);
            $stmt = $mysqli->prepare($insertOrderDetail);
            $stmt->bind_param("ssss", $orderId, $item['productId'], $item['quantity'], $subtotal);
            $stmt->execute();
        }

        echo $orderId;


?>
