<?php
if (!isset($_POST['name']) || !isset($_POST['created_at'])){
        die ("Не все данные введены.<br>
                Пожалуйста, вернитесь назад и закончите ввод");
}
$name   = trim ( $_POST['name'] );
$created_at = trim ( $_POST['created_at'] );
$name   = addslashes ( $name );
$created_at = addslashes ( $created_at );
//по названию БД: у меня так называется БД (по умолчанию), в ней создалась табличка, я проверила))
$db = "sys";
//МОЖНО создать connect.php из след.трех строк
$link = mysql_connect();
if ( !$link ) die ("Невозможно подключение к MySQL");
mysql_select_db ( $db ) or die ("Невозможно открыть $db");
$query = "INSERT INTO tblproducts VALUES ('"
    .$name."', '".$created_at."')";
$result = mysql_query ( $query );
if ($result) echo "Продукт добавлен в базу данных.";
mysql_close ( $link );
?>
