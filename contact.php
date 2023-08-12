<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone_number"];
    $city = $_POST["city"];
    $subject = $_POST["subject"];

    $conn = new mysqli('localhost','root','','contact');
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else {
        $stmt= $conn->prepare("INSERT INTO contact(name, email, phone, city, subject)
         Values (?,?,?,?,?)");
         $stmt->bind_param("ssiss",$name, $email, $phone, $city, $subject);
         $stmt->execute();
        echo "Successfully Submitted";
        $stmt->close();
        $conn->close();
    }

?>


