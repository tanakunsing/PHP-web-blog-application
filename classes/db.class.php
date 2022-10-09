<?php 

class dbh {
  
 
  public function connecting(){
    
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "ooplogin";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    return $con;
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 
  }
 
  
   
    
   
  

}

