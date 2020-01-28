<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="style.css" type="text/css">
<title>Выбор карты для активации.</title>
</head>
<body>
<strong>Выбор карты для активации</strong>
<form action="edit_carda.php" method="post">
  <fieldset>
<?php
require 'connect.php';
$select_sql = "SELECT * FROM Cards";
$result = mysql_query($select_sql);
$row = mysql_fetch_array($result);
do
{
printf("<input type='radio' name='cardnum' value=" . $row['cardnumber'] . " id=" . $row['cardnumber'] . ">" . $row['cardnumber'] . "<br>");	
}
while($row = mysql_fetch_array($result));
mysql_close();
?>
</fieldset>
<fieldset>
<input type="submit" value="Выбрать карту">
</fieldset>
</form>
<a href="http://www.361076.ru/ccard/activate_card.html">Активация карты клиента</a><br/>
</body>
</html>