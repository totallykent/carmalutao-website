<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Update</title>
</head>
<body>
    <h1><center>Update</center></h1>
    <hr><br>
    <div class="container">
        <?php
            include_once 'php/connectToSQL.php';

            $id = $_GET['updateid'];

            $sql = "SELECT * FROM items WHERE productID = ?";
            $statement = $pdo->prepare($sql);
            $statement->execute([$id]);
            $row = $statement->fetch();
        ?>
        <form action="php/adminItemUpdate.php" method="post">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Brand</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="brand" placeholder="Brand" value="<?php echo htmlspecialchars($row["brand"]); ?>">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Model</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="model" placeholder="Model" value="<?php echo htmlspecialchars($row["model"]); ?>">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Price</label>
                <input type="number" class="form-control" id="formGroupExampleInput2" name="price" placeholder="Price" value="<?php echo htmlspecialchars($row["price"]); ?>">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Image Link</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="image" placeholder="Image Link" value="<?php echo htmlspecialchars($row["imgLink"]); ?>">
            </div>
            <input type="hidden" name="updateid" value="<?php echo htmlspecialchars($_GET['updateid']); ?>">
            <input type="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>
</body>
</html>