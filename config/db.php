<?php

require 'constants.php';

try {
    $conn = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_HOST . '', DB_USER, DB_PASS);
} catch (PDOException $ex) {
    echo "connection failed: " . $ex->getMessage();
}
