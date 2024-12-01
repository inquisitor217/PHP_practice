<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TO-DO list</title>
</head>
<body>
<form method="post" action="TO-DO_List.php">
    <label for="title">Название задачи:</label>
    <input type="text" name="title"><br><br>

    <label for="description">Описание:</label>
    <input type="text" name="description" id="description"><br><br>

    <label for="created_at">Дата создания:</label>
    <input type="date" name="created_at"><br><br>

    <label for="due_date">Дата завершения:</label>
    <input type="date" name="due_date"><br><br>

    <input type="checkbox" name="check" value="done">Выполнено<br><br>

    <input type="submit" value="Готово">
    <button type="reset" value="Очистить">Очистить</button>
</form>
</body>
</html>
