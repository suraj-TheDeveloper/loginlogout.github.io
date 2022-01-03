<?php
    include("../Config/siteconfig.php");
    try {   
        // print_r($_POST);
        if($_POST['name'] == "" && $_POST['email'] == "" && $_POST['phone'] == "" && $_POST['password'] == "" && $_POST['confirmpassword'] == "") {
            echo "Please fill all the fields";
        } else {
            if($_POST['password'] != $_POST['confirmpassword']) {
                echo "Password does not match";
            } else {
                $stmt = $connection->prepare("INSERT INTO register (name, email, phone, password, confirmpassword) VALUES (:name, :email, :phone, :password, :confirmpassword)");
                $stmt->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
                $stmt->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
                $stmt->bindParam(":phone", $_POST['phone'], PDO::PARAM_STR);
                $passwordhash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $stmt->bindParam(":password", $passwordhash, PDO::PARAM_STR);
                $stmt->bindParam(":confirmpassword", $passwordhash, PDO::PARAM_STR);   
                $stmt->execute();
            }
        } 
    } catch (Exception $e) {
        echo "ERROR", $e;
    }
?>