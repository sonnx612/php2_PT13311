<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
</head>
<body>
<form action="" method="get">
    <input type="text" name="keyword" value="<?= $keyword ?>">
    <button type="submit">Search</button>
</form>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <td>Image</td>
        <th>Category Name</th>
        <th>
            <a href="<?= $baseUrl . "add-product"?>">Thêm</a>
        </th>
    </tr>
    <?php foreach ($product as $item): ?>
        <tr>
            <td>
                <?= $item->id?>
            </td>
            <td>
                <?= $item->name?>
            </td>
            <td>
                <img src="<?= $item->image?>" width="70">
            </td>
            <td>
                <?= $item->getCate()->cate_name?>
            </td>
            <td>
                <a href="<?= $baseUrl . "remove?id=" . $item->id?>">Remove</a>
            </td>
        </tr>
    <?php endforeach;?>
</table>
    
</body>
</html>