<DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=cp1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Информация по делу</title>
</head>

<body>
<strong><p align="center"> Центр правовой помощи ПРИОРИТЕТ</p></strong><br/><br/>
<?php
header("Content-Type: text/html; charset=cp1251");
require 'connect.php';
mysql_set_charset('cp1251');
$cardnumber = trim($_REQUEST['cardnumber']);

$sql_select = "SELECT * FROM dela WHERE delo_num='$cardnumber'";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);
if ($row['ended']==1)
{
$act="Да";	
} else {$act="Нет";}

if($row)
{
	printf("<p>Номер дела: " .$row['delo_num'] ."</p> 
	<p><i>Данные по делу:</i></p><p>Дело закрыто: " .$act . "</p><p>Клиент: " .$row['fioz'] . "</p><p>Дата суда: " .$row['sud_date'] . "</p><p>Юрист: " .$row['sotr_name'] . "</p><p>Текущий статус: " .$row['cur_status'] . "</p><p>Краткая информация: " .$row['info'] . "</p><p>Вид дела: " .$row['delo_inf'] . "</p><p>Платежи: " .$row['pays'] . "</p><br/>"
	);
}
else{echo ("Дело с таким номером отсутствует<br/><br/>");}

mysql_close();
?>
<a href="http://www.prioritetus.ru">Вернуться на сайт</a><br/><br/>
</body>
</html>