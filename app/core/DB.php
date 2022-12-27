<?php

class DB {
    protected function conn() {
        try {
            $connection = new PDO("mysql:host=".DB_Host."; dbname=".DB_Name, DB_User, DB_PW);
            // $connection->exec("set names utf8"); // To show the french letters
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch(PDOException $err) {
            echo "Connection failed: " . $err->getMessage();
        }
    }
}