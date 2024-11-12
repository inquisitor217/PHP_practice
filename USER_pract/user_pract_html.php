<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post"; action="user_pract.php">
    <label for="name">Имя:</label>
    <input type="text" name="name"><br><br>

    <label for="surname">Фамилия:</label>
    <input type="text" name="surname"><br><br>

    <label for="email">e-mail:</label>
    <input type="text" name="email"><br><br>

    <label for="password">Password:</label>
    <input type="text" name="password"><br><br>

    <input type="radio" name="sex" value="Женский">Женский
    <input type="radio" name="sex" value="Мужской">Мужской<br><br>
    <input type="submit" value="Отправить">
    <button type="reset" value="Очистить">Очистить</button>
</form>

</body>
</html>

