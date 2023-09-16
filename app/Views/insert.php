<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Grocery Store Products</h1>
    <br>
    <form action="/actionInsert" method= "post">
    <label>ID</label>
    <input type= "number" name = "ID" placeholder = "">
    <br>
    <br>
    <label>UPC</label>
    <input type= "text" name = "UPC" placeholder = "">
    <br>
    <br>
    <label>Name</label>
    <input type= "text" name = "Fullname" placeholder = "">
    <br>
    <br>
    <label>Quantity</label>
    <input type= "number" name = "Quantity" placeholder = "">
    <br>
    <br>
    <label>Price</label>
    <input type="number" min="1" step="any"  name = "Price" placeholder = "">
    <br>
    <br>
    <label>Expiry_date</label>
    <input type="datetime-local" name = "Expiry_date" placeholder = "">
    <br>
    <br>
    <label>Created_at</label>
    <input type="datetime-local" name = "Created_at" placeholder = "">
    <br>
    <br>
    <input type="submit" name="submit" value = "Save Product">
    <input type="reset" value="Reset">
    </form>
</body>
</html>