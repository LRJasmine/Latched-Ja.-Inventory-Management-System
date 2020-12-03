<?php header('Access-Control-Allow-Origin: *'); 

require 'phpmysqlconnection.php';


try {

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {

        $name = $_GET['name'];
        $type = $_GET['type'];
        $qty = $_GET['qty'];
        $item_colour = $_GET['item_colour'];
        $item_material = $_GET['item_material'];
        $sell_price = $_GET['sell_price'];
        $purchase_price = $_GET['purchase_price'];
        $supplier = $_GET['supplier'];
        
        if ($_GET['context'] === 'newuser') {
          
            $sql = "INSERT INTO users (name, type, qty, item_colour, item_material, sell_price) 
            VALUES ('$name', '$type', '$qty', '$item_colour', '$item_material', '$sell_price', '$purchase_price', '$supplier')";
            
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