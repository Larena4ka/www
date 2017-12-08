<?php
// Включить в страницу header.php
include ("header.php");
?>
<!------- Здесь вводятся текст и ссылки рисунков -------->
<H1>ГЛАВНАЯ СТРАНИЦА</H1>
<form aсtion="addproduct.php" method="post">
 <table>
   <tr><td>Название</td><td><input name="name" maxlength=32 size=20></td></tr>
   <tr><td>Дата</td><td><input name="created_at" maxlength=10 size=10></td></tr>
   <tr><td colspan=2><input type="submit" value="Ввод"></td></tr>
 </table>
</form> 
<?php
// Включить в страницу footer.php
include ("footer.php");
?>