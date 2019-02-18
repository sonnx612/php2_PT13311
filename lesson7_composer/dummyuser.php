<?php
require './vendor/autoload.php';

$faker = Faker\Factory::create();




?>

<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Tên</th>
            <th>Ảnh</th>
            <th>Địa chỉ</th>
        </tr>
    </thead>
    <tbody>
    <?php for($i = 0; $i <100; $i++): ?>
        <tr>
            <td><?= $i+1 ?></td>
            <td><?= $faker->name ?></td>
            <td>
                <img src="<?= $faker->imageUrl($width = 640, $height = 480) ?>" width="70">
            </td>
            <td><?= $faker->streetAddress ?></td>
        </tr>
    
    <?php endfor ?>
    </tbody>
</table>