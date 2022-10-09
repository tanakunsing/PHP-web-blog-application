<?php

class singup {


public  function setuser($first_name, $gender, $email, $pasword){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ooplogin";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO users (users_uid,users_pwd,users_emaill,gender)
    VALUES ('$first_name', '$pasword','$email','$gender')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    
         }
}
