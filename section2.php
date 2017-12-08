<?php
// Включить в страницу header.php
include ("header.php");
?>
<!------- Здесь вводятся текст и ссылки рисунков -------->
<H1>СПИСОК ТОВАРОВ</H1>
<?php  ##  Вывод содержимого таблицы tblproducts 
require_once("connect.php"); 
$query= "SELECT * FROM tblproducts"; 
$cat= $pdo->query($query); 
try {
while($catalog = $cat->fetch()) 
echo $catalog ['name'] . "<br/>";
}
catch (PDOException  $e) {
echo  "Ошибка віполнения запроса:  " . $e->getMessage(); }
?> 

<?php
// Включить в страницу footer.php
include ("footer.php");
?>