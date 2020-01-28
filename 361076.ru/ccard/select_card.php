<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Информация по карте</title>
</head>

<body>
<?php
require 'connect.php';
$cardnumber = trim($_REQUEST['cardnumber']);

$sql_select = "SELECT * FROM Cards WHERE cardnumber='$cardnumber'";
$result = mysql_query($sql_select);
$row = mysql_fetch_array($result);

if($row)
{
	printf("<p>Номер карты: " .$row['cardnumber'] . " - Склад: " .$row['sclad'] ."</p> 
	<p><i>Данные по карте:</i></p><p>Активна: " .$row['active'] . "</p><p>Оплачена: " .$row['payed'] . "</p><p>Продана: " .$row['saled'] . "</p><p>Цена карты: " .$row['price1'] . "</p><p>Агентские: " .$row['Price2'] . "</p><p>Дата активации: " .$row['active_date'] . "</p><p>Активна до: " .$row['active_date_end'] . "</p><p>Активировать до: " .$row['active_date_control'] . "</p><p>Агент: " .$row['agentfio'] . "</p><p>Агентский номер: " .$row['agent_id'] . "</p><p>Дата продажи: " .$row['saled_date'] . "</p>-------------------------------------------------------------------------------------------------------<br/>"
	);
}
else{echo ("Карты с таким номером в базе нет<br/><br/>");}

mysql_close();
?>
<a href="http://www.361076.ru/ccard/search_card.html">Вернуться к поиску</a><br/><br/>
<a href="http://www.361076.ru/ccard/select_change_card.php">Редактировать карту</a><br/><br/>
<a href="http://www.361076.ru/ccard/addcard.html">Добавить новую карту</a><br/>
	  <a href="http://www.361076.ru/ccard/activate_card.html">Активация карты клиента</a><br/>
</body>
</html>