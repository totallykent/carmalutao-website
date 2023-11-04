<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    
    if (empty($brand) || empty($model) || empty($price) || empty($image)) {
        header("Location: admin.html?error=Please fill in all fields");
        die();
    }

    try {
        require_once "../php/connectToSQL.php";

        $query = "INSERT INTO items (brand, model, price, imgLink)
                  VALUES (?, ?, ?, ?);";

        $statement = $pdo->prepare($query);

        $statement->execute([$brand,$model,$price,$image]);

        $pdo = null;
        $statement = null;

        header("Location: ../database/admin.html");

        die();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../index.php");
}