<?php  ##  Добавление товара в БД
require_once("connect.php"); 
try  {
// Проверяем. заполнены ли поля HTML-формы 
if (empty($_POST['name'])) exit('Не заполнено поле "Название"'); 
if (empty($_POST['created_at']))  exit('Не заполнено поле "Дата"'); 
// Добавляем товар в таблицу  
$query = "INSERT  INTO  tblproducts  VALUES  (NULL,  :name, :created_at)"; 
$tblproducts = $pdo->prepare($query); 
$tblproducts->execute(['name' => $_POST['name']], 'created_at' => $_POST[created_at]); 
// Осуществляем переход на главную страницу
header("Location: index.php"); 
} catch  (PDOException  $e) {
echo  "Ошибка выполнения запроса" . $e->getMessage(); 
}
?> 