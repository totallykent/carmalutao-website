<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    
    if (empty($brand) || empty($model)) {
        header("Location: admin.html?error=Please fill in all fields");
        die();
    }

    try {
        require_once "../php/connectToSQL.php";

        $query = "DELETE FROM items WHERE brand = ? AND model = ?";

        $statement = $pdo->prepare($query);

        $statement->execute([$brand, $model]);

        $pdo = null;
        $statement = null;

        header("Location: ../admin.html");

        die();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../index.php");
}