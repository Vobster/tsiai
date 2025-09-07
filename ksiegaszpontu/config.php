<?php
    $host = "localhost";
    $dbname = "ksiegagosci";
    $username = "root";
    $password = "";
    try {
        $pdo = new PDO("mysql:host=$host;mysql:dbname=$dbname;charset=utf8",$username,$password);
        $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo '<img src="pol.png" alt="połączono">';
    } catch(PDOException $e) {
        die("Błąd połączenia z bazą danych: ".$e->getMessage());
    }
?>