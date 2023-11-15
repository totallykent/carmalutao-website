<?php
    require_once "../php/connectToSQL.php";
    if (isset($_GET['deleteid'])) {
        $id = $_GET['deleteid'];
        try {
            $query = "DELETE FROM items WHERE productID = ?";
        
            $statement = $pdo->prepare($query);

            $statement->execute([$id]);
            
            $pdo = null;
            $statement = null;
            
            header("Location: ../admin.php");

            die();
        } catch (PDOException $e) {
            die("Query Failed: " . $e->getMessage());
        }
    }