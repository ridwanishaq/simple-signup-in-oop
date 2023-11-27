<?php

if ( $_SERVER['REQUEST_METHOD'] == "POST") {
    $name       = $_POST['name'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];

    if ( 
        (isset($name) && !empty($name)) &&
        (isset($username) && !empty($username)) &&
        (isset($password) && !empty($password))
    ) {
        // load classess
        require_once("../classes/Database.php");
        require_once("../classes/SignUp.php");

        $signup = new SignUp( $name, $username, $password );
        
        $signup->exec();
        
        header("Location: ../index.php?msg=Successfully signed up");
        
    }
    else {
        header("Location: ../index.php?error=All fields are required!");
    }
    
} else{
    header("Location: ../index.php");
}

