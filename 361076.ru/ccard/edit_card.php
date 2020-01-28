<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Редактировать карту</title>
</head>

<body>
<strong>Редактирование карты клиента</strong>
<?php
require 'connect.php';
$id = $_REQUEST['cardnum'];
$select_sql = "SELECT * FROM Cards WHERE cardnumber= $id";
$result = mysql_query($select_sql);
$row = mysql_fetch_array($result);
printf("<form action='update_card.php' method='post' name='forma'>
<fieldset>
<p><strong>Номер карты </strong>" . $row['cardnumber'] . "</p>
<label for='cardnumber'>Номер карты:</label><br/>
<input type='text' name='cardnumber' size='10' value=" . $row['cardnumber'] . "><br/>
<label for='agentfio'>Ф.И.О. агента:</label><br/>
<input type='text' name='agentfio' size='45' value=" . $row['agentfio'] . "><br/>
<label for='agent_id'>ID агента:</label><br/>
<input type='text' name='agent_id' size='11' value=" . $row['agent_id'] . "><br/>
<label for='saled_date'>Дата продажи:</label><br/>
<input type='text' name='saled_date' size='10' value=" . $row['saled_date'] . "><br/>
<label for='saled'>Продана</label><br/>
<input name='saled' size='1' value=" . $row['saled'] . "><br/>
<label for='payed'>Оплачена</label><br/>
<input name='payed' size='1' value=" . $row['payed'] . ">
</fieldset>
<br/>
<fieldset>
<input id='submit' type='submit' value='Сохранить изменения'><br/>
</fieldset>
</form>",$row['cardnumber'], $row['agentfio'], $row['agent_id'], $row['saled_date'], $row['saled'], $row['payed']);
?>

<a href="http://www.361076.ru/ccard/search_card.html">Вернуться к поиску</a><br/><br/>
<a href="http://www.361076.ru/ccard/select_change_card.php">Редактировать карту</a><br/><br/>
<a href="http://www.361076.ru/ccard/addcard.html">Добавить новую карту</a><br/>
	  <a href="http://www.361076.ru/ccard/activate_card.html">Активация карты клиента</a><br/>
</body>
</html>