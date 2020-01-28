<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Список агентов</title>
</head>

<body>
<?php
require 'connect.php';

$sql_select = "SELECT * FROM Agents";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);

do
{
	printf("<p>Номер агента: " .$row['idAgents'] . " " .$row['fio'] ." (Руководитель: " .$row['idsheff'] . ")</p>");
}
while($row = mysql_fetch_array($result));

mysql_close();
?>
<a href="http://www.361076.ru/ccard/addagent.html">Добавить агента</a></br>
<a href="http://www.361076.ru">Выйти</a></br>


</body>
</html>