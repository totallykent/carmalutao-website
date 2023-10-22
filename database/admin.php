<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
</head>
<body>
    <h1>Admin Portal</h1>
    <form action="adminhandler.inc.php" method="post"><hr>
        <h3>Add an Item</h3>
        <table>
            <tr>
                <td><p><b>Brand:</b></p></td>
                <td><input type="text" name="brand" placeholder="Enter brand name"></td>
            </tr>
            <tr>
                <td><p><b>Model:</b></p></td>
                <td><input type="text" name="model" placeholder="Enter the model name"></td>
            </tr>
            <tr>
                <td><p><b>Price:</b></p></td>
                <td><input type="number" name="price" placeholder="Enter your price"></td>
            </tr>
            <tr>
                <td><p><b>Image:</b></p></td>
                <td><input type="text" name="image" placeholder="Enter Image Link"></td>
            </tr>
        </table>
        <input type="submit" value="Submit" name="submit">
        <hr>
        <h3>Remove an Item</h3>
        <select name="removeItem" id="removeItem">
            <option value="" selected disabled>Select Item to Remove</option>
            <option value="test">test</option>
        </select>
        <input type="submit" value="Remove" name="removeButton">
    </form>
</body>
</html>