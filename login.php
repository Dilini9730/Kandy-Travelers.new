<?php
    $username = $_POST["username"];
    $password = $_POST["password"];

    $conn = new mysqli('localhost','root','','login');
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else {
        $stmt= $conn->prepare("INSERT INTO login(username, password)
         Values (?,?");
         $stmt->bind_param("ss",$username, $password);
         $stmt->execute();
        echo "Login Successfully";
        $stmt->close();
        $conn->close();
    }

?>
