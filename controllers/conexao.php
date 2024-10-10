<?php

try {
    $connection = new PDO("mysql:host=localhost;dbname=agenda", 'root', '');

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    $e->getMessage();
}
