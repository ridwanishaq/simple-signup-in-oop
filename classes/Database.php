<?php

class Database
{
    /**connection credentials */
    private $host       = "mysql";
    private $dbname     = "learning_php_prog";
    private $username   = "ubuntu";
    private $password   = "password";

    private function __construct( $host, $dbname, $username, $password )
    {
        $this->host     = $host;
        $this->dbname   = $dbname;
        $this->username = $username;
        $this->password = $password;
    }
    
    /** Connect to mysql database */
    protected function connect()
    {
        try {
            $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
    
}