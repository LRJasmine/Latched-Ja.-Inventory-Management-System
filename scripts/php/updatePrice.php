<?php header('Access-Control-Allow-Origin: *'); 

require 'phpmysqlconnection.php';

try {

    if (isset($_GET['discount'])) {

        $id = (int) $_GET['item-id'];
        $value = (float) $_GET['value'];
        $action = $_GET['customRadioInline1'];

        if ($action == 'dollars') {
            $sql = "UPDATE items SET sell_price = (sell_price - $value) WHERE id = $id";
            $conn->exec($sql);
        } else if ($action == 'percent') {
            $sql = "UPDATE items SET sell_price = (sell_price - (sell_price * $value / 100)) WHERE id = $id";
            $conn->exec($sql);
        }
    }

    if (isset($_GET['increase'])) {

        $id = (int) $_GET['item-id'];
        $value = (float) $_GET['value'];
        $action = $_GET['customRadioInline1'];

        if ($action == 'dollars') {
            $sql = "UPDATE items SET sell_price = (sell_price + $value) WHERE id = $id";
            $conn->exec($sql);
        } else if ($action == 'percent') {
            $sql = "UPDATE items SET sell_price = (sell_price + (sell_price * $value / 100)) WHERE id = $id";
            $conn->exec($sql);
        }
    }
      

} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  

?>