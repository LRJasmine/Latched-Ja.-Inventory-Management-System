<?php header('Access-Control-Allow-Origin: *'); 
//work on this, add check to see if an item being added is new

require 'phpmysqlconnection.php';

try {

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {

        $id = (int) $_GET['id'];
        $qty = (int) $_GET['qty'];

        if ($_GET['context'] === 'restock') {
          
            $sql = "UPDATE items SET qty = (qty + $qty) WHERE id = '$id'";
            $conn->exec($sql);
      
        } else if ($_GET['context'] === 'sale') {

            $sql = "UPDATE items SET qty = (qty - $qty)  WHERE id = '$id'";
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