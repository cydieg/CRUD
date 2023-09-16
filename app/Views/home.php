<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home</h1>
    <a href ="/insert">Add new product</a>
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
                    <td> <?= $product['ID']?></td>
                    <td><?= $product['UPC']?></td>
                    <td><?= $product['Name']?></td>
                    <td><?= $product['Quantity']?></td>
                    <td><?= $product['Price']?></td>
                    <td><?= $product['Expiry_date']?></td>
                    <td><?= $product['Created_at']?></td>
                    <td>
                        <a href="/update">Update</a>
                        <a href="/delete/<?=$product['ID']?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
        </table>
        <?php endif; ?>
</body>
</html>