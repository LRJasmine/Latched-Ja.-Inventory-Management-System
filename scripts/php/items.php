<?php header('Access-Control-Allow-Origin: *'); 

require_once 'phpmysqlconnection.php';

try {
 
  $stmt = $conn->query("SELECT * FROM items");
  $results = $stmt->fetchAll(PDO::FETCH_ASSOC); 

  } catch(PDOException $e) {
    echo $stmt . "<br>" . $e->getMessage();
  }

  
?>

<table class="table table-light table-bordered table-hover table-responsive-xl">
    <thead class="thead-dark">
        <tr>
            <th scope="col" id="itemidhead">Item ID</th>
            <th scope="col" id="itemnamehead">Item Name</th>
            <th scope="col" id="itemtypehead">Item Type</th>
            <th scope="col" id="itemcolourhead">Item Colour</th>
            <th scope="col" id="itemmaterialhead">Item Material</th>
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
            <td><?= $row['item_colour']; ?></td>
            <td><?= $row['item_material']; ?></td>
            <td><?= $row['qty']; ?></td>
            <td><?= '$' . $row['sell_price']; ?></td>
            <td><?= '$' . $row['purchase_price']; ?></td>
            <td><?= $row['supplier']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 


