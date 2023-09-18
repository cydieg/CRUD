<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
<style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }

    tr:nth-child(even) {
    background-color: #dddddd;
    }
    h1{
        text-align: center;
        background-color: #0a9396;
        padding: 20px;
        text-align: center;
        font color: white
    }
    .footer {
        background-color: #0a9396;
        text-align: center;
        padding: 4px;
    }
</style>
</head>

<body>
    <h1 style ="color:white">Grocery Store Management</h1>
    <a href ="/insert">Add new product</a>
    <br>
    <br>
    <nav>
    <ul>
      <li><a href="#">cracklings</a></li>
      <li><a href="#">oishi</a></li>
      <li><a href="#">coffee</a></li>
    </ul>
  </nav>
  
    <?php if($products):?>
        <table border = "3">
            <tr>
                <th>ID</th>
                <th>UPC</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>$Price</th>
                <th>Expiry_date</th>
                <th>Created_at</th>
                <th>Action</th>
            </tr>
            <?php foreach ($products as $product):?>
                <tr>
                    <td> <?=$product['ID']?></td>
                    <td><?= $product['UPC']?></td>
                    <td><?= $product['Name']?></td>
                    <td><?= $product['Quantity']?></td>
                    <td><?= $product['Price']?></td>
                    <td><?= $product['Expiry_date']?></td>
                    <td><?= $product['Created_at']?></td>
                    <td>
                        <a href="/update/<?=$product['ID']?>">Update</a>
                        <a href="/delete/<?=$product['ID']?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
        </table>
        <?php endif; ?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="footer">
        <p style ="color:white"><b>©2023 Grocery Store Management</b></p>
        </div>
</body>
</html>