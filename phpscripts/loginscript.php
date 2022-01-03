<?php
session_start();
    include("../Config/siteconfig.php");
    try {
        if($_POST['email'] == "" && $_POST['password'] == "") {
            echo "Please fill all the fields";
        } else {
            $stmt = $connection->prepare("SELECT name, email, password FROM register");
            $stmt->execute();
            $credentials = $stmt->fetchAll();
            foreach($credentials as $details) {
                $email = $details['email'];
                $password = $details['password'];
                if($_POST['email'] == $email) {
                    if(password_verify($_POST['password'], $password)) {
                        $_SESSION['username'] = $details['name'];
                        echo $_SESSION['username']; 
                    } else {    
                        echo "Password does not match with our database";
                    }  
                } else {    
                    echo "Email does not match with our database";
                }
            }
        }
    } catch (Exception $e) {
        echo "ERROR", $e;
    }
?>