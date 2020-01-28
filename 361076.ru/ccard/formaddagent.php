<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Добавление агента в базу...</title>
</head>

<body>
<?php 
require 'connect.php';
$idAgents = trim($_REQUEST['idAgents']);
$fio = trim($_REQUEST['fio']);
$idsheff = trim($_REQUEST['idsheff']);

$insert_sql = "INSERT INTO Agents (idAgents, fio, idsheff)" .
"VALUES('{$idAgents}', '{$fio}', '{$idsheff}');";
mysql_query($insert_sql);

echo "<p>Новый Агент добавлен в базу!</p>";
echo "<p><a href=\"http://www.361076.ru/ccard/agentlist.php\">Список агентов</a></p>";
echo "<p><a href=\"http://www.361076.ru\"Выйти</a></p>";

mysql_close();

?>
</body>
</html>