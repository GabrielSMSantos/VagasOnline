<?php


define("DATABASE", [
    "host" => "localhost",
    "db_name" => "VagasOnline",
    "username" => "root",
    "password" => ""
]);

try {

    if(!isset($conn)) {
        $conn = new PDO("mysql: host=".DATABASE["host"].";dbname=".DATABASE["db_name"], DATABASE["username"], DATABASE["password"]);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

} catch (PDOException $error) {
    echo "ERROR: ".$error->getMessage();
}