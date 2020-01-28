<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Добавление карты в базу...</title>
</head>

<body>
<?php 
require 'connect.php';
$cardnumber = trim($_REQUEST['cardnumber']);
$nfc = trim($_REQUEST['nfc']);
$price1 = trim($_REQUEST['price1']);
$Price2 = trim($_REQUEST['Price2']);
$sclad = trim($_REQUEST['sclad']);
$saled = trim($_REQUEST['saled']);
$active = trim($_REQUEST['active']);
$active_date_control = trim($_REQUEST['active_date_control']);
$payed = trim($_REQUEST['payed']);

$insert_sql = "INSERT INTO Cards (cardnumber, price1, Price2, sclad, saled, active, active_date_control, payed, nfc)" .
"VALUES('{$cardnumber}', '{$price1}', '{$Price2}', '{$sclad}', '{$saled}', '{$active}', '{$active_date_control}', '{$payed}', '{$nfc}');";
mysql_query($insert_sql);

echo "<p>Новая карта добавлена в базу!</p>";
echo "<p><a href=\"http://www.361076.ru/ccard/addcard.html\">Внести еще карту</a></p>";
echo "<p><a href=\"http://www.361076.ru\"Выйти</a></p>";

mysql_close();

?>
</body>
</html>