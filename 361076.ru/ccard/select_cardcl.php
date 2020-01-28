<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Информация по карте</title>
</head>

<body>
<strong>ООО "Юридическое агентство "ПРАВО"</strong><br/><br/>
<?php
require 'connect.php';
$cardnumber = trim($_REQUEST['cardnumber']);

$sql_select = "SELECT * FROM Cards WHERE cardnumber='$cardnumber'";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);
if ($row['active']==1)
{
$act="Да";	
} else {$act="Нет";}
if ($row['payed']==1)
{
$pay="Да";	
} else {$pay="Нет";}
if ($row['saled']==1)
{
$sale="Да";	
} else {$sale="Нет";}
if($row)
{
	printf("<p>Номер карты: " .$row['cardnumber'] ."</p> 
	<p><i>Данные по карте:</i></p><p>Активна: " .$act . "</p><p>Оплачена: " .$pay . "</p><p>Продана: " .$sale . "</p><p>Цена карты: " .$row['price1'] . "</p><p>Дата активации: " .$row['active_date'] . "</p><p>Активна до: " .$row['active_date_end'] . "</p><p>Активировать до: " .$row['active_date_control'] . "</p><p>Агент: " .$row['agentfio'] . "</p><p>Консультаций: " .$row['nfc'] . "</p><p>Дата продажи: " .$row['saled_date'] . "</p><br/>"
	);
}
else{echo ("Карты с таким номером в базе нет<br/><br/>");}

mysql_close();
?>
<a href="http://юа-право.рф">Вернуться на сайт</a><br/><br/>
</body>
</html>