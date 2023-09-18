<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
    h1{
        text-align: center;
        background-color: #0a9396;
        padding: 10px;
        text-align: center;
        font color: white
        }

    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-sizing: border-box;
        }
    input[type=number], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-sizing: border-box;
        }
    input[type=datetime-local], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-sizing: border-box;
        }   

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        text-align: center;
        }

    input[type=submit]:hover {
        background-color: #45a049;
        }

    div {
        border-radius: 20px;
        background-color: #f2f2f2;
        padding: 10px;
        width: 35%;
        text-align: left;
        }   
    </style>
</head>
<body>
    <div>
    <h1 style ="color:white">Grocery Store Products</h1>
    <form action="/actionInsert" method= "post">
    <label><b>ID</b></label>
    <input type= "number" name = "ID" placeholder = "" value = "<?=$products['ID']?>">
    <br>
    <label><b>UPC</b></label>
    <input type= "text" name = "UPC" placeholder = "" value = "<?=$products['UPC']?>">
    <br>
    <label><b>Name</b></label>
    <input type= "text" name = "Fullname" placeholder = "" value = "<?=$products['Name']?>">
    <br>
    <label><b>Quantity</b></label>
    <input type= "number" name = "Quantity" placeholder = "" value = "<?=$products['Quantity']?>">
    <br>
    <label><b>Price</b></label>
    <input type="number" min="1" step="any"  name = "Price" placeholder = "" value = "<?=$products['Price']?>">
    <br>
    <label><b>Expiry_date</b></label>
    <input type="datetime-local" name = "Expiry_date" placeholder = "" value = "<?=$products['Expiry_date']?>">
    <br>
    <label><b>Created_at</b></label>
    <input type="datetime-local" name = "Created_at" placeholder = "" value = "<?=$products['Created_at']?>">
    <br>
    <?php if($products):?>
    <input type="submit" name="update" value = "Update Product">
    <?php else:?>
    <input type="submit" name="submit" value = "Save Product">
    <?php endif;?>
    </form>
    </div>
</body>
</html>