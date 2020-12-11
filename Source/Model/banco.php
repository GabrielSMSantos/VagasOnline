<?php

try {

    if(!isset($conn)) {
        $conn = new PDO("mysql: host=localhost;dbname=VagasOnline", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

} catch (PDOException $error) {
    echo "ERROR: ".$error->getMessage();
}