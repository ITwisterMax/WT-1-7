<?
// удаление куки
if(isset($_GET['name']))
{
    setcookie($_GET['name'], null, -1);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Cookies</title>
</head>
<body>
	<form method="POST">
		<Label>Название cookie:</Label><br><input type="text" name="name" required><br>
		<Label>Значение cookie:</Label><br><input type="text" name="value" required><br>
		<Label>Количество дней:</Label><br><input type="text" name="days"><br>
		<Label>Количество часов:</Label><br><input type="text" name="hours"><br>
		<Label>Количество минут:</Label><br><input type="text" name="minutes"><br>
		<Label>Количество секунд:</Label><br><input type="text" name="seconds"><br>
		<input name="submit" type="submit" name="add" value="Добавить cookie"><br>
	</form>
</body>
</html>

<?
// Вывод списка куки
$res = "";
if (count($_COOKIE) == 0)
	$res .= "Список cookie в настоящее время пуст!";
else 
{
	$res .= "<br><table><tr><th>Название cookie</th><th>Значение cookie</th><th>Удаление cookie</th>";
	foreach ($_COOKIE as $key => $value)
		$res .=  "<tr><td>$key</td><td>$value</td><td><a href=\"index.php?name=$key\">Удалить cookie</a></td></tr>";
	$res .=  "</table></div>";
}
echo $res;
?>