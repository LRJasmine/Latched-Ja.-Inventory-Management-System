<?php header('Access-Control-Allow-Origin: *'); 

require 'phpmysqlconnection.php';


try {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $name = $_POST['name'];
        $username = $_POST['username'];
        $role = $_POST['role'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $contact_num = $_POST['contact_num'];
        
        if ($_POST['context'] === 'newuser') {
          
            $sql = "INSERT INTO users (name, username, role, password, email, contact_num) 
            VALUES ()";
            
            $conn->exec($sql);        
      
        } else {
            echo "CANNOT PROCESS REQUEST";
        }
      
    }
    
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;

?>