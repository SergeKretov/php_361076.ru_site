<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="../style.css">
<title>Обновление данных карты</title>
</head>

<body>
<?php
require 'connect.php';
$nfc=trim($_REQUEST['nfc']);
$cardnumber=trim($_REQUEST['cardnumber']);

$update_sql = "UPDATE Cards SET nfc='$nfc' WHERE cardnumber='$cardnumber'";
mysql_query($update_sql) or die("Ошибка вставки" . mysql_error());
echo '<p>Запись успешно обновлена! </p>';
echo $cardnumber;
echo '</br>';
?>
<a href="http://www.361076.ru/ccard/search_card.html">Вернуться к поиску</a><br/><br/>
</body>
</html>