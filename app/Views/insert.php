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
    <input type= "number" name = "ID" placeholder = "" value = "<?=$products['ID']?>">
    <br>
    <br>
    <label>UPC</label>
    <input type= "text" name = "UPC" placeholder = "" value = "<?=$products['UPC']?>">
    <br>
    <br>
    <label>Name</label>
    <input type= "text" name = "Fullname" placeholder = "" value = "<?=$products['Name']?>">
    <br>
    <br>
    <label>Quantity</label>
    <input type= "number" name = "Quantity" placeholder = "" value = "<?=$products['Quantity']?>">
    <br>
    <br>
    <label>Price</label>
    <input type="number" min="1" step="any"  name = "Price" placeholder = "" value = "<?=$products['Price']?>">
    <br>
    <br>
    <label>Expiry_date</label>
    <input type="datetime-local" name = "Expiry_date" placeholder = "" value = "<?=$products['Expiry_date']?>">
    <br>
    <br>
    <label>Created_at</label>
    <input type="datetime-local" name = "Created_at" placeholder = "" value = "<?=$products['Created_at']?>">
    <br>
    <br>
    <?php if($products):?>
    <input type="submit" name="update" value = "Save Product">
    <?php else:?>
    <input type="submit" name="submit" value = "Save Product">
    <?php endif;?>
    </form>
</body>
</html>