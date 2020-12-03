<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Latched Jamaica Inventory Management System</title>
        <script src="http://localhost:8098"></script>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script type="text/javascript" src="../app/static/js/app.js"></script>
        <link rel="stylesheet" href="../app/static/css/apps.css">
    </head>
  <body  class="jumbotron" id="jumbotron-body">
    <div class= "employeecard">
        <nav class="nav navbar nav-justified navbar-dark bg-dark">
            <a class="nav-link badge badge-dark" href="employee.html">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link badge badge-dark" href="salesreport.html">Generate Sales Report</a>
            <a class="nav-item nav-link badge badge-dark" href="orders.html">Order</a>
=======
<?php

$currentdate = date('Y-m-d');
include('phpmysqlconnection.php');

$stmt = $conn->query("SELECT b.type,a.id as identifi_num,b.name,a.item_qty,b.sell_price,a.order_date FROM orders a inner
join items b on a.item_id = b.id where a.order_date = '$currentdate'");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$overalltotalsales = 0;

if(isset($_POST['submitdate'])){

    $filterdate = $_POST['currentdate'];
   $stmt = $conn->query("SELECT b.type,a.id as identifi_num,b.name,a.item_qty,b.sell_price,a.order_date FROM orders a inner
    join items b on a.item_id = b.id where a.order_date = '$filterdate'");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    $currentdate = $filterdate;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Latched Jamaica Inventory Management System</title>
    <script src="http://localhost:8098"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="text/javascript" src="../app/static/js/app.js"></script>
    <link rel="stylesheet" href="../app/static/css/apps.css">
</head>

<body class="jumbotron" id="jumbotron-body">
    <div class="employeecard">
        <nav class="nav navbar nav-justified navbar-dark bg-dark">
            <a class="nav-link badge badge-dark" href="employee.html">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link badge badge-dark" href="salesreport.php">Generate Sales Report</a>
            <a class="nav-item nav-link badge badge-dark" href="orders.php">Order</a>
>>>>>>> 0ad174a8cf5125b24b1b107846a32ba1550846fe
            <a class="nav-item nav-link badge badge-dark" href="inventory.html">Inventory</a>
            <a class="nav-item nav-link badge badge-dark" href="suppliers">Suppliers</a>
        </nav>
    </div>
<<<<<<< HEAD
    
    <div>
        <div class = "jumbotron employeewelcome">
=======

    <div>
        <div class="jumbotron employeewelcome">
>>>>>>> 0ad174a8cf5125b24b1b107846a32ba1550846fe
            <h1>Sales Report</h1>
            <h2>Latched Jamaica</h2>
        </div>
        <div>
            <h3>Date</h3>
<<<<<<< HEAD
        </div>
        <div>
            <?php include '../scripts/php/items.php'?>
            <!--<table class="table table-light table-bordered table-hover table-responsive-xl">
=======
            <form action="" method="post">
                Order Date Filter: <input type="date" name="currentdate" value="<?= $currentdate ?>" />
                <input type="submit" class="btn btn-primary" name="submitdate">
            </form>

            <br>
            <div>
                <a class="btn btn-danger" href="salesreport.php">Overall Total Daily Sales</a>
                <a class="btn btn-primary" href="salesprofitreport.php">Overall Total Daily Profit</a>

            </div>

            <br>
        </div>
        <div>
            <table class="table table-light table-bordered table-hover table-responsive-xl">
>>>>>>> 0ad174a8cf5125b24b1b107846a32ba1550846fe
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Product Type</th>
                        <th scope="col">Product Identification Number</th>
                        <th scope="col">Product Decription</th>
                        <th scope="col">Quantity Sold</th>
                        <th scope="col">Unit Sale Price</th>
                        <th scope="col"> Total Cost</th>
<<<<<<< HEAD
                        <th scope="col">Product Profit</th>
                    </tr>    
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                    <tr>
                        <th class="table-secondary" scope="row">Overall Total Daily Sales</th>
                    </tr>
                    <tr>
                        <th class="table-secondary" scope="row">Overall Total Daily Profit</th>
                    </tr>
                    <tr>
                        <th class="table-secondary" scope="row">Most Popular Type</th>
                    </tr>
                    <tr>
                        <th class="table-secondary" scope="row">Most Popular Item</th>
                    </tr>
                    <tr>
                        <th class="table-secondary" scope="row">Least Popular Type</th>
                    </tr>
                    <tr>
                        <th class="table-secondary" scope="row">Least Popular Item</th>
                    </tr>
                   
                </tfoot>
                
            </table>-->
        </div>
        
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../scripts/dbconfig.js"></script>   
    
  </body>
</html>

=======
                        <th scope="col"> Order Date</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($results as $row): ?>

                    <?php 
                        $totalprice = $row['sell_price'] * $row['item_qty'];
                        $overalltotalsales = $overalltotalsales + $totalprice;
                        ?>
                    <tr>
                        <th scope="col"><?= $row['type']; ?></th>
                        <th scope="col"><?= $row['identifi_num']; ?></th>
                        <th scope="col"><?= $row['name']; ?></th>
                        <th scope="col"><?= $row['item_qty']; ?></th>
                        <th scope="col"><?= $row['sell_price']; ?></th>
                        <th scope="col"><?= $totalprice; ?></th>
                        <th scope="col"><?= $row['order_date']; ?></th>

                    </tr>
                    <?php  endforeach; ?>

                </tbody>


            </table>

            <label for="">Overall Total of Sales: <?= $overalltotalsales;?> </label>

        </div>

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
    <script>

    </script>
</body>

</html>
>>>>>>> 0ad174a8cf5125b24b1b107846a32ba1550846fe
