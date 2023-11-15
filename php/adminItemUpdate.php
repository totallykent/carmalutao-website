<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['updateid'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    
    if (empty($brand) || empty($model) || empty($price) || empty($image)) {
        header("Location: adminUpdate.php?error=Please fill in all fields");
        die();
    }

    try {
        require_once "../php/connectToSQL.php";

        $query = "UPDATE items 
                  SET brand = ?, model = ?, price = ?, imgLink = ? 
                  WHERE productID = ?";

        $statement = $pdo->prepare($query);

        $statement->execute([$brand, $model, $price, $image, $id]);

        $pdo = null;
        $statement = null;

        header("Location: ../admin.php");

        die();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../index.php");
}