<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gửi email</title>
</head>
<body>

    <form action="sendmail.php" method="post">
        <div>
            <label for="">Email nhận</label>
            <textarea name="recceive" cols="50" rows="5"></textarea>
        </div>
        <div>
            <label for="">Tiêu đề email</label>
            <input type="text" name="subject">
        </div>
        <div>
            <label for="">Nội dung email</label>
            <textarea name="content" cols="50" rows="10"></textarea>
        </div>
        <div>
            <button type="submit">Gửi email</button>
        </div>
    </form>
    
</body>
</html>