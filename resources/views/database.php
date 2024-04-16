<?php
    $servername = 'localhost';
    $username = 'root';
    $password = ''; // 
    $dbname = 'contactus';
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }
    echo 'Connected to the database successfully';
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name =  $_POST['name'];
        $email =  $_POST['email'];
        $phone =  $_POST['phone'];
        $subject =  $_POST['subject'];
        $message =  $_POST['message'];

        if (!empty($email)&& !empty($phone))
    
        $sql = "INSERT INTO contact_form_data (name, email , phone, subject, message)
                VALUES ('$name', '$email', '$phone', '$subject', '$message')";
    mysqli_query($conn, $sql);
       
    echo"<script type='text/javascript'> alert('successfully send')</script>";
    }
    else{
        echo"<script type='text/javascript'> alert('failed')</script>";
    }
    
    $conn->close();
