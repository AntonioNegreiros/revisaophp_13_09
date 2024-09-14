<?php
$host = "localhost";
$db_name = "aulaphp";
$db_user = "root";
$db_password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name",$db_user, $db_password);
    echo "Conexão bem sucessida, By Antônio";
} catch (PDOException $e){
    echo $e->getMessage();
}
?>