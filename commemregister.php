<?php

$host = 'localhost'; 
$db = 'data';
$user = 'root'; 
$pass = ''; 

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $phone_number = $conn->real_escape_string($_POST['phone_number']);
    $email_address = $conn->real_escape_string($_POST['email_address']);
    $password = $conn->real_escape_string($_POST['password']); 
    $date_of_birth = $conn->real_escape_string($_POST['date_of_birth']);
    $gender = $conn->real_escape_string($_POST['gender']);

    $sql = "INSERT INTO commem (first_name, last_name, phone_number, email_address, password, date_of_birth, gender) 
            VALUES ('$first_name', '$last_name', '$phone_number', '$email_address', '$password', '$date_of_birth', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully!";
        header('Location: dashboard.html'); 
        exit;
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>