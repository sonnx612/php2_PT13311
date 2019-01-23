<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?= $baseUrl . 'save-edit-product'?>" method="post" 
                    enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $model->id ?>">
        <div>
            <label for="">Product name</label>
            <input type="text" name="name" value="<?= $model->name ?>">
        </div>
        <div>
            <label for="">Category</label>
            <select name="cate_id" id="">
                <?php foreach($cates as $c): ?>
                    <option 
                        <?php if($model->cate_id == $c->id):?>
                            selected
                        <?php endif; ?>
                        value="<?= $c->id ?>"><?= $c->cate_name ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <div>
                <img src="<?= $model->image ?>" width="100">
            </div>
            <label for="">Product Image</label>
            <input type="file" name="image" id="">
        </div>
        <div>
            <label for="">Product price</label>
            <input type="number" name="price" value="<?= $model->price ?>">
        </div>
        <div>
            <label for="">Product star</label>
            <input type="number" name="star" max="5" value="<?= $model->star ?>">
        </div>
        <div>
            <label for="">Product views</label>
            <input type="number" name="views" min="0" value="<?= $model->views ?>">
        </div>
        <div>
            <label for="">Short description</label>
            <textarea name="short_desc" id="" cols="30" rows="10"><?= $model->short_desc ?></textarea>
        </div>
        <div>
            <label for="">Detail</label>
            <textarea name="detail" id="" cols="30" rows="10"<?= $model->detail ?>></textarea>
        </div>
        <div>
            <button type="submit">Save</button>
        </div>
    </form>
</body>
</html>