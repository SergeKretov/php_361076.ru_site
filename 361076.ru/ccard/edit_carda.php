<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Активировать карту</title>
</head>

<body>
<strong>Активация карты клиента</strong>
<?php
require 'connect.php';
$id = $_REQUEST['cardnum'];
$select_sql = "SELECT * FROM Cards WHERE cardnumber= $id";
$result = mysql_query($select_sql);
$row = mysql_fetch_array($result);
printf("<form action='update_carda.php' method='post' name='forma'>
<fieldset>
<p><strong>Номер карты </strong>" . $row['cardnumber'] . "</p>
<label for='cardnumber'>Номер карты:</label><br/>
<input type='text' name='cardnumber' size='10' value=" . $row['cardnumber'] . "><br/>
<label for='active_date'>Дата активации:</label><br/>
<input type='text' name='active_date' size='10' value=" . $row['active_date'] . "><br/>
<label for='active_date_end'>Активна до:</label><br/>
<input type='text' name='active_date_end' size='10' value=" . $row['active_date_end'] . "><br/>
<label for='active'>Активна</label><br/>
<input name='active' size='1' value=" . $row['active'] . "><br/>
</fieldset>
<br/>
<fieldset>
<input id='submit' type='submit' value='Сохранить изменения'><br/>
</fieldset>
</form>",$row['cardnumber'], $row['active_date'], $row['active_date_end'], $row['active']);
?>

<a href="http://www.361076.ru/ccard/search_card.html">Вернуться к поиску</a><br/><br/>
<a href="http://www.361076.ru/ccard/select_change_card.php">Редактировать карту</a><br/><br/>
<a href="http://www.361076.ru/ccard/addcard.html">Добавить новую карту</a><br/>
<a href="http://www.361076.ru/ccard/activate_card.html">Активация карты клиента</a><br/>
</body>
</html>