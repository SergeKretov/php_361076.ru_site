<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Добавление услуги в базу...</title>
</head>

<body>
<?php 
require 'connect.php';
$cardnumber = trim($_REQUEST['cardnumber']);
$date_usl = trim($_REQUEST['date_usl']);
$price = trim($_REQUEST['price']);
$discont = trim($_REQUEST['discont']);
$agent_pay = trim($_REQUEST['agent_pay']);

$insert_sql = "INSERT INTO Cards_go (cardnumber, date_usl, price, discont, agent_pay)" .
"VALUES('{$cardnumber}', '{$date_usl}', '{$price}', '{$discont}', '{$agent_pay}');";
mysql_query($insert_sql);

echo "<p>Новая услуга добавлена в базу!</p>";
echo "<p><a href=\"http://www.361076.ru\"Выйти</a></p>";

mysql_close();

?>
</body>
</html>