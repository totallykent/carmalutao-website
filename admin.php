<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Admin</title>
</head>
<body>
    <div class="container">
        <br>
        <button class="btn btn-primary"><a href="adminAdd.php" class="text-light">Add an Item</a></button>
    </div>
    <br>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Brand</th>
                    <th scope="col">Model</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image Link</th>
                    <th scope="col">Operate</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once 'php/connectToSQL.php';

                    $sql = "SELECT * FROM items";
                    $result = $pdo->query($sql);
                    if ($result->rowCount() > 0) {
                        while ($row = $result->fetch()) {
                            $formattedPrice = number_format((float)$row["price"], 2, '.', ',');
                            echo '
                                <tr>
                                <td>' . $row["brand"] . '</td>
                                <td>' . $row["model"] . '</td>
                                <td>$' . $row["price"] . '</td>
                                <td>' . $row["imgLink"] . '</td>
                                <td>
                                    <button class="btn btn-primary"><a class="text-light" href="adminUpdate.php?updateid='. $row["productID"] .'">Update</a></button>
                                    <button class="btn btn-danger"><a class="text-light" href="php/adminItemDelete.php?deleteid='. $row["productID"] .'">Delete</a></button>
                                </td>
                                </tr>
                            ';
                        }
                    }
                ?>
            </tbody>
        </table> 
    </div>
</body>
</html>