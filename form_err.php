<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
<div class="container">
    <form action="index.php" method="post">
        <label for="password">Пароль:</label><input type="text" name="password" id="password">
        <button type="submit">Подтвердить</button>
        <p class="error_message">Ну ты чего? Какой <b><?php echo $_POST['password'];?></b>? Пробуй ещё раз!</p>
    </form>
</div>
</body>
</html>