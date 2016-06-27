<?php

include_once ('Resources/INIT.php');

class db{

    public $pdo;

    public function __construct()
    {

        $host = "localhost";
        $user = "root";
        $password = "wewontbyte";
        $database = "gdtuk";
        try
        {

            $this->pdo = new PDO("mysql:host=$host;dbname=$database", $user, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch
        (PDOException $e){
            echo "The database is not connected " . $e;

        }
    }

}

