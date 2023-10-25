<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="58273569823768.ico" />
    <link rel="stylesheet" href="style.css">
    <title>Carmalutao</title>
</head>
<body>
    <div>
        <header>
            <h1 style="color: black; font-weight: bold; text-align: center;">Carmalutao's Motorcycle Dealership</h1>
            <hr>
            <nav class="navbar">
                <form action="php/connectToSQL.php" method="post">
                    <ul>
                        <li>Kent <b>Ca</b>rtoneros</li>
                        <li>Roger <b>Ma</b>dulara</li>
                        <li>Aeron <b>Lu</b>cero</li>
                        <li>Alraffy Ca<b>tao</b></li>
                    </ul>
                </form>
                <hr>
            </nav>
        </header>
    </div>
    <br>
    <div class="items">
        <ul>
            <?php
                include_once 'php/connectToSQL.php';

                $sql = "SELECT * FROM items";
                $result = $pdo->query($sql);
                if ($result->rowCount() > 0) {
                    while ($row = $result->fetch()) {
                        $formattedPrice = number_format((float)$row["price"], 2, '.', ',');
                        echo '<li>
                                <img src="' . $row["imgLink"] . '" alt="">
                                <p class="brand">' . $row["brand"] . '</p>
                                <h3>' . $row["model"] . '</h3>
                                <p class="price">$' . $formattedPrice . '</p>
                            </li>';
                    }
                }
            ?>
        </ul>
    </div>
</body>
</html>