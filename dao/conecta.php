<?php
class DAO
{
    //linux - Professor
    const HOST = "172.17.0.2";
    const USER = "root";
    const PASS = "mypass";
    const DB = "phpschool";
    //Windows
    // const HOST = "localhost";
    // const USER = "root";
    // const PASS = "";
    // const DB = "phpschool";
    
    public function conecta()
    {
        $pdo = null;
        try {
            $pdo = new PDO("mysql:host=".self::HOST.";dbname=".self::DB , self::USER, self::PASS);
            //$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo("Error!: " . $e->getMessage() . "<br/>");
            die();
        }
        return $pdo;
    }
}