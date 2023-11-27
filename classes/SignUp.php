<?php

class SignUp extends Database
{
    private $name;
    private $username;
    private $password;

    public function __construct( $name, $username, $password )
    {
        $this->name     = $name;
        $this->username = $username;
        $this->password = $password;
    }
    
    /** Insert new user record */
    private function insertNewUser()
    {
        $stmt = parent::connect()->prepare("INSERT INTO users (`name`, `username`, `password`) VALUES (:name, :username, :password)");
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':password', $this->password);
        $stmt->execute();
    }

    /** Execute signup */
    public function exec()
    {
        // If no errors , signup
        $this->insertNewUser();
    }
}


