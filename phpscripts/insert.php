<?php
    include("../Config/siteconfig.php");
    try {
        if($_POST['register']) {
            $stmt = $connection->prepare("INSERT INTO register (name, email, phone, password, confirmpassowrd) VALUES (:name, :email, :phone, :password, :confirmpassword)");
            $stmt->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
            $stmt->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
            $stmt->bindParam(":phone", $_POST['phone'], PDO::PARAM_STR);
            $stmt->bindParam(":password", $_POST['password'], PDO::PARAM_STR);
            $stmt->bindParam(":confirmpassword", $_POST['confirmpassword'], PDO::PARAM_STR);    
        }
    } catch (Exception $e) {
        echo "ERROR", $e;
    }
?>