<?php header('Access-Control-Allow-Origin: *'); 

require 'phpmysqlconnection.php';

try {

    if (isset($_GET['submit'])) {

        $id = (int) $_GET['id'];
        $qty = (int) $_GET['qty'];
        $status = $_GET['status'];
    }

    if ($status == 'Restocked') {
        
        $sql = "UPDATE items SET qty = (qty + $qty) WHERE id = $id";
        $conn->exec($sql);
    
    } else if ($status == 'Sold') {

        $sql = "UPDATE items SET qty = (qty - $qty)  WHERE id = $id";
        $conn->exec($sql);


    }
      

} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  

?>