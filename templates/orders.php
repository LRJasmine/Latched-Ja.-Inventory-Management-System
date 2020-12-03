<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
  <head>
=======
<?php

include('phpmysqlconnection.php');
$error="";
if(isset($_POST['insertodb'])){
$item_id = explode("price", $_POST['item_id']);
if(!$item_id ==0){
    if($item_id[2]>=$_POST['item_quantity']){
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO `orders`(`id`, `item_id`, `item_qty`, `order_date`, `delivery_date`, `delivery_status`) VALUES ('',:item_id,
  :item_quantity,:order_date,:order_delivery_date,:delivery_status)";

  $stmt = $conn->prepare($sql);

  $array = [
  'item_id'=>$item_id[0],
  'item_quantity'=>$_POST['item_quantity'],
  'order_date'=>$_POST['order_date'],
  'order_delivery_date'=>$_POST['delivery_date'],
  'delivery_status'=>$_POST['delivery_status']];
  
  $stmt->execute($array);
  $formqty = $_POST['item_quantity'];
  $newqty = intval($item_id[2]) - intval($formqty);
  $sqls = "UPDATE items SET qty='$newqty' WHERE id= '$item_id[0]'";

  $stmt1 = $conn->prepare($sqls);

  $stmt1->execute();
  
    }else{
        $error="There's not enought stocks";
    }
 
}else{
    $error="Please choose an item";
}


}
$stmt = $conn->query("SELECT * FROM `items`");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
>>>>>>> 0ad174a8cf5125b24b1b107846a32ba1550846fe
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Latched Jamaica Inventory Management System</title>
    <script src="http://localhost:8098"></script>
    <!-- Bootstrap -->
<<<<<<< HEAD
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="stylesheet" href="../app/static/css/apps.css">
  </head>
  <body  class="jumbotron" id="jumbotron-body">
    <div class= "employeecard" id="hello">
      <nav class="nav navbar nav-justified navbar-dark bg-dark">
        <a class="nav-link badge badge-dark" href="employee.html">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link badge badge-dark" href="salesreport.html">Generate Sales Report</a>
        <a class="nav-item nav-link badge badge-dark" href="orders.html">Orders</a>
        <a class="nav-item nav-link badge badge-dark" href="inventory.html">Inventory</a>
        <a class="nav-item nav-link badge badge-dark" href="suppliers.html">Suppliers</a>
      </nav>
    </div>

    <div id="neworders">
      <div>
        <h6>Order ID</h6>
        <h6>Date</h6>
        <h6>Order placed by: Employee</h6>
      </div>
      <form class="" id="placeorderform">
        <div class="placeorderformfieldset" id="placeorderformfieldset">
          <fieldset id="accordion" class="card itemscard">
            <div class ="card-header">
              <legend type="button">Item <span class="label-nbr">1</span></legend>
            </div>
            <div class="card-body itemscardbody">
              <div class="form-group">
                <label for="">Item Type</label>
                <input type="" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group">
                <label for="">Item Colour</label>
                <input type="" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group">
                <label for="">Item Details</label>
                <input type="" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group">
                <label for="">Item Quantity</label>
                <input type="" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group">
                <label for="">Current Available Quantity</label>
                <input type="" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group">
                <label for="">Item Total</label>
                <input type="" class="form-control" id="" placeholder="">
              </div>
              <div>
                <p>Order Total</p>
              </div>
            </div>
            
          </fieldset>
          
        </div>
      </form>
        <button type="submit" class="btn btn-primary" id="additemsorderfieldset">Add another item to order</button>
        <button type="submit" class="btn btn-primary">Submit Order</button>
      
    </div>

    <div id="orderslist">
      
      <div>
        <button type="submit" class="btn btn-primary" id="addneworders">Add New Order</button>
      </div>
      <div id="orders-section">
        <?php include '../scripts/php/orders.php'?>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../app/static/js/app.js"></script>      
    <script src="../scripts/dbconfig.js"></script>   
  </body>
=======
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="stylesheet" href="../app/static/css/apps.css">
</head>

<body class="jumbotron" id="jumbotron-body">
    <div class="employeecard" id="hello">
        <nav class="nav navbar nav-justified navbar-dark bg-dark">
            <a class="nav-link badge badge-dark" href="employee.html">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link badge badge-dark" href="salesreport.php">Generate Sales Report</a>
            <a class="nav-item nav-link badge badge-dark" href="orders.php">Orders</a>
            <a class="nav-item nav-link badge badge-dark" href="inventory.html">Inventory</a>
            <a class="nav-item nav-link badge badge-dark" href="suppliers.html">Suppliers</a>
        </nav>
    </div>
    <label for=""><?=$error;?></label>
    <div id="neworders">
        <div>
            <h6>Order ID</h6>
            <h6>Date</h6>
            <h6>Order placed by: Employee</h6>
        </div>
        <form id="placeorderform" action="" method="post">

            <div class="placeorderformfieldset" id="placeorderformfieldset">
                <fieldset id="accordion" class="card itemscard">
                    <div class="card-header">
                        <legend type="button">Item <span class="label-nbr">1</span></legend>
                    </div>
                    <div class="card-body itemscardbody">
                        <div class="form-group">
                            <label for="">Item Name</label>
                            <div class="input-group mb-3">

                                <select class="custom-select" id="item_id" name="item_id"
                                    aria-label="Example select with button addon">
                                    <option value='defaultprice0' selected>Choose...</option>
                                    <?php foreach ($results as $row): ?>

                            <option value="<?= $row['id'];?>price<?= $row['sell_price']; ?>price<?= $row['qty']; ?>"
                                        item-price="">
                                        <?= $row['name'];?></option>
                                    <?php  endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Item Price</label>
                            <input type="" class="form-control" id="item_price" name="item_price" readonly
                                placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Item Quantity</label>
                            <input type="" class="form-control" name="item_quantity" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Order Date</label>
                            <input type="date" class="form-control" name="order_date" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Delivery Date</label>
                            <input type="date" class="form-control" name="delivery_date" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Delivery Status</label>
                            <select class="custom-select" id="delivery_status" name="delivery_status"
                                aria-label="Example select with button addon">
                                <option value='Delivered' selected>Delivered</option>
                                <option value='Not Delivery' selected>Not Delivery</option>

                            </select>
                        </div>
                        <div>
                            <p>Order Total</p>
                        </div>
                    </div>

                </fieldset>

            </div>
            <button type="submit" class="btn btn-primary" id="additemsorderfieldset">Add another item to order</button>
            <input type="submit" name="insertodb" class="btn btn-primary" value="Submit Order">
        </form>


    </div>

    <div id="orderslist">

        <div>
            <button type="submit" class="btn btn-primary" id="addneworders">Add New Order</button>
        </div>
        <table class="table table-light table-bordered table-hover table-responsive-xl">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Order Placed by</th>
                    <th scope="col">Item Type</th>
                    <th scope="col">Item Colour Sold</th>
                    <th scope="col">Item Details</th>
                    <th scope="col">Item Quantity</th>
                    <th scope="col">Item Unit Price</th>
                    <th scope="col">Order Total</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
            </tfoot>

        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="../app/static/js/app.js"></script>
    <script>
    document.getElementById('item_id').addEventListener(
        'change',
        function() {
            var a = this.value.split('price');
            document.getElementById('item_price').value = a[1];
        },
        false
    );
    </script>
</body>

>>>>>>> 0ad174a8cf5125b24b1b107846a32ba1550846fe
</html>