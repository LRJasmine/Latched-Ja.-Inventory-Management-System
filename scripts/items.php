<?php header('Access-Control-Allow-Origin: *'); 

require 'phpmysqlconnection.php';

try {

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {

        $searchstring = $_GET['searchstring'];
        
        if ($_GET['context'] === 'item') {
          
          $stmt = $conn->query("SELECT * FROM items WHERE name LIKE '%$searchstring%'");
          $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
      
        } else {
            echo "CANNOT PROCESS REQUEST";
        }
      
    }

  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
?>


