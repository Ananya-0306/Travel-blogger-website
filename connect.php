<?php
$Firstname = $_POST['Firstname'];
$Lastname = $_POST['Lastname'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
//database connection-----

$conn = new mysqli('localhost', 'root', '', 'travel');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(Firstname,Lastname,Gender,phone)
     values(?,?,?,?)");
     $stmt->bind_param("sssi", $Firstname, $Lastname, $gender, $phone);
     $stmt->execute();
     echo "registration sucessfully.........";
     $stmt->close();
     $conn->close();
}


?>



