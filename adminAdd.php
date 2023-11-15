<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Admin</title>
</head>
<body>
    <h1><center>Admin Page</center></h1>
    <hr><br>
    <div class="container">
        <form action="php/adminhandler.inc.php" method="post">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Brand</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="brand" placeholder="Brand">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Model</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="model" placeholder="Model">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Price</label>
                <input type="number" class="form-control" id="formGroupExampleInput2" name="price" placeholder="Price">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Image Link</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="image" placeholder="Image Link">
            </div>
            <input type="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>
</body>
</html>