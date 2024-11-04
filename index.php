<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>P1_Login</title>
</head>
<body>

<form action="index.php" method="post">
Имя: <input type="text" name="name"><br><br>
Фамилия: <input type="text" name="surname"><br><br>
Отчество: <input type="text" name="surname2"><br><br>
E-mail: <input type="text" name="email"><br><br>
Пол:
<input type="radio" name="gender" value="Женский">Женский
<input type="radio" name="gender" value="Мужской">Мужской<br><br>
<input type="submit">
<button type="reset" value="Очистить">Очистить</button>
</form>

<?php
//echo $_POST["name"];
//?>


<?php
$newfile = "Data.txt";
//$myfile = fopen("Data.txt", 'w');
$user_info = array($_POST['name']." ", $_POST['surname']." ", $_POST['surname2']." ", $_POST['email']." ", $_POST['gender']."\n");
file_put_contents($newfile, $user_info, FILE_APPEND);
//fclose($myfile);
?>

</body>
</html>