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
        echo $id;
        $stmt = $conn->query("SELECT * FROM items WHERE id LIKE '%$id%'");
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
      
    }

  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
?>

<table class="table table-light table-bordered table-hover table-responsive-xl">
    <thead class="thead-dark">
        <tr>
            <th scope="col" id="itemidhead">Item ID</th>
            <th scope="col" id="itemnamehead">Item Name</th>
            <th scope="col" id="itemtypehead">Item Type</th>
            <!--<th scope="col" id="itemmaterialhead">Item Material</th>
            <th scope="col" id="itemcolourhead">Item Colour</th>-->
            <th scope="col" id="itemquantityhead">Item Current Quantity</th>
            <th scope="col" id="itempricehead">Item Sell Price</th>
            <th scope="col" id="itempricehead">Item Purchase Price</th>
            <th scope="col" id="itemsupplierhead">Supplier</th>
        </tr>    
    </thead>
    <tbody>
    <?php foreach ($results as $row): ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['name']; ?></td>
            <td><?= $row['type']; ?></td>
            <td><?= $row['qty']; ?></td>
            <td><?= '$' . $row['sell_price']; ?></td>
            <td><?= '$' . $row['purchase_price']; ?></td>
            <td><?= $row['supplier']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    <tfoot>
    </tfoot>
</table> 