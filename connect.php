<?php  ##  Обработка ошибки соединения с базой данных

try { 
$pdo = new PDO('mysql:host=localhost;dbname=sys', 'root', 'Dr27911120rD', 
				[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) { 
	echo "Невозможно установить соединение с базой данных"; 
}
?> 