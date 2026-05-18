<?php
$host = "mysql-3a089ff2-arounatraore592-6bf5.e.aivencloud.com";
$port = "16042";
$user = "avnadmin";
$pass = "AVNS_pOWHh7anA31D-8JznZT";
$dbname = "defaultdb";

try {
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
    $options = [
        PDO::MYSQL_ATTR_SSL_CA => true, // Indispensable pour Aiven !
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    $pdo = new PDO($dsn, $user, $pass, $options);
    $bdd = $pdo;
    $conn = $pdo;

} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
?>