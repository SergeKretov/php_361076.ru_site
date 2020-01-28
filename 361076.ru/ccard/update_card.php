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
$agentfio=$_REQUEST['agentfio'];
$agent_id=trim($_REQUEST['agent_id']);
$saled_date=trim($_REQUEST['saled_date']);
$saled=trim($_REQUEST['saled']);
$payed=trim($_REQUEST['payed']);
$cardnumber=trim($_REQUEST['cardnumber']);

$update_sql = "UPDATE Cards SET agentfio='$agentfio', agent_id='$agent_id', saled_date='$saled_date', saled='$saled', payed='$payed' WHERE cardnumber='$cardnumber'";
mysql_query($update_sql) or die("Ошибка вставки" . mysql_error());
echo '<p>Запись успешно обновлена! </p>';
echo $cardnumber;
echo '</br>';
?>
<a href="http://www.361076.ru/ccard/search_card.html">Вернуться к поиску</a><br/><br/>
<a href="http://www.361076.ru/ccard/select_change_card.php">Редактировать карту</a><br/><br/>
<a href="http://www.361076.ru/ccard/addcard.html">Добавить новую карту</a><br/>
<a href="http://www.361076.ru/ccard/activate_card.html">Активация карты клиента</a><br/>
</body>
</html>