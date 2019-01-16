<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Category Name</th>
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
                <?= $item->getCate()->cate_name?>
            </td>
        </tr>
    <?php endforeach;?>
</table>
    
</body>
</html>