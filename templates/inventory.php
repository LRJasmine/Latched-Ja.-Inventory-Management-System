<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Latched Jamaica Inventory Management System</title>
    <!--<script src="http://localhost:8098"></script>-->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="stylesheet" href="../app/static/css/apps.css">
  </head>
  <body  class="jumbotron" id="jumbotron-body">
      <div class= "employeecard">
        <nav class="nav navbar nav-justified navbar-dark bg-dark">
            <a class="nav-link badge badge-dark" href="employee.html">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link badge badge-dark" href="salesreport.php">Generate Sales Report</a>
            <a class="nav-item nav-link badge badge-dark" href="orders.php">Orders</a>
            <a class="nav-item nav-link badge badge-dark" href="inventory.php">Inventory</a>
            <a class="nav-item nav-link badge badge-dark" href="suppliers.html">Suppliers</a>
        </nav>
      </div>
      <div id="inventoryview">
          <div class="inventoryoptions">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-info btn-sm" id="searchinventorybtn" type="button">Search Inventory</button>
                </div>
                <input type="text" class="form-control" id="searchinput" placeholder="Search inventory..." aria-label="" aria-describedby="basic-addon1">
            </div>
            <div class= "d-flex justify-content-around inventorydropdownmenus">
                <div class="input-group mb-3" >
                    <div class="dropdown" id="groupbydropdownmenu">
                        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Group Items By
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <button class="dropdown-item" id="idradiobtn" type="button">Item ID</button>
                          <button class="dropdown-item" type="button" id="nameradiobtn">Item Name</button>
                          <button class="dropdown-item" type="button" id="typeradiobtn">Item Type</button>
                          <button class="dropdown-item" type="button" id="materialradiobtn">Item Material</button>
                          <button class="dropdown-item" type="button" id="colourradiobtn">Item Colour</button>
                          <button class="dropdown-item" type="button" id="quantityradiobtn">Item Quantity</button>
                          <button class="dropdown-item" type="button" id="priceradiobtn">Item Price</button>
                        </div>
                    </div>
                    <!--<div class="input-group-prepend">
                      <button class="btn btn-info btn-sm" id="groupitemsbybtn" type="button">Group Items By</button>
                    </div>
                    <div class="form-group custom-control custom-radio custom-control-inline">
                        <input type="radio" id="idradiobtn" name="customRadioInline1" class="custom-control-input">
                        <label class="custom-control-label" for="idradiobtn">Item ID</label>
                    </div>
                    <div class="form-group custom-control custom-radio custom-control-inline">
                        <input type="radio" id="nameradiobtn" name="customRadioInline1" class="custom-control-input">
                        <label class="custom-control-label" for="nameradiobtn">Item Name</label>
                    </div>
                    <div class="form-group custom-control custom-radio custom-control-inline">
                        <input type="radio" id="typeradiobtn" name="customRadioInline1" class="custom-control-input">
                        <label class="custom-control-label" for="typeradiobtn">Item Type</label>
                    </div>
                    <div class="form-group custom-control custom-radio custom-control-inline">
                        <input type="radio" id="materialradiobtn" name="customRadioInline1" class="custom-control-input">
                        <label class="custom-control-label" for="materialradiobtn">Item Material</label>
                    </div>
                    <div class="form-group custom-control custom-radio custom-control-inline">
                        <input type="radio" id="colourradiobtn" name="customRadioInline1" class="custom-control-input">
                        <label class="custom-control-label" for="colourradiobtn">Item Colour</label>
                    </div>
                    <div class="form-group custom-control custom-radio custom-control-inline">
                        <input type="radio" id="quantityradiobtn" name="customRadioInline1" class="custom-control-input">
                        <label class="custom-control-label" for="quantityradiobtn">Item Quantity</label>
                    </div>
                    <div class="form-group custom-control custom-radio custom-control-inline">
                        <input type="radio" id="priceradiobtn" name="customRadioInline1" class="custom-control-input">
                        <label class="custom-control-label" for="priceradiobtn">Item Price</label>
                    </div>-->
                </div>
                <div class="dropdown" id="updatedropdownmenu">
                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Update Inventory
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <button class="dropdown-item" id="soldorrestockbtn" type="button">Sold or Restock Update</button>
                      <button class="dropdown-item" type="button" id="addnewiteminventorybtn">Add New Items to Inventory</button>
                      <button class="dropdown-item" type="button" id="deleteiteminventorybtn">Remove Items from Inventory</button>
                      <button class="dropdown-item" type="button" id="adjustprices">Adjust Price</button>
        
                    </div>
                </div>
            </div>
            
            
          </div>
        <div id="inventorytable">
            <?php include '../scripts/php/items.php'?>
        </div>
      </div>
      <div id="adjustprice">
      <iframe name="content" style="display:none"></iframe>
        <form id="adjustpriceform" action='../scripts/php/updatePrice.php' target="content">
            <div class="" id="adjustpricefieldset">
                <fieldset class="card adjustpricecard">
                    <div class ="card-header">
                        <legend type="button">Adjust Price</legend>
                    </div>
                    <div class="card-body itemscardbody">
                        <div class="form-group">
                            <label for="">Item ID</label>
                            <input type="" class="form-control" name="item-id" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Value to Adjust Price</label>
                            <input type="" class="form-control" name="value" placeholder="">
                        </div>
                        <div class="form-group custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" value="dollars"> 
                            <label class="custom-control-label" for="customRadioInline1">$ (Dollars)</label>
                        </div>
                        <div class="form-group custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input" value="percent">
                            <label class="custom-control-label" for="customRadioInline2">% (Percentage)</label>
                        </div>
                        <div>
                            <button class="btn btn-warning" name="discount" type="submit" onclick="myfunction()">Add Discount</button>
                            <button class="btn btn-success" name="increase" type="submit" onclick="myfunction()">Increase Price</button>
                        </div>

                        <div id="price-change"></div>
                    </div>
                </fieldset>

            </div>
        </form>
      </div>

      <div id="restockorsolditem">
          <form id="restockorsoldform">
              <div>
                  <fieldset class="card restockorsoldcard">
                  <iframe name="content" style="display:none"></iframe>

                    <form action='../scripts/php/updateInventory.php' target="content">
                      <div class="card-header">
                          <legend>Sold or Restock Update</legend>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                            <label for="">Item Identificaton Number</label>
                            <input type="text" name="id" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Item Quantity</label>
                            <input type="text" name="qty" class="form-control" placeholder="">
                        </div>
                        <div class="form-group custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline3" name="status" class="custom-control-input" value="Sold">
                            <label class="custom-control-label" for="customRadioInline3">Sold</label>
                        </div>
                        <div class="form-group custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline4" name="status" class="custom-control-input" value="Restocked">
                            <label class="custom-control-label" for="customRadioInline4">Restocked</label>
                        </div>
                        <div>
                            <button class="btn btn-success" name="submit" type="submit">Submit Inventory Update</button>
                        </div>

                        <div id="result"><?php include '../scripts/php/updateInventory.php'?></div>

                        </div>
                    </form>

                  </fieldset>
              </div>
          </form>
      </div>

      <div id="addnewiteminventory">
          <form id="addnewiteminventoryform">
            <div id="addnewiteminventoryfieldset">
                <fieldset class="card addnewiteminventorycard">
                    <div class="card-header">
                        <legend>Add New Items</legend>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                          <label for="">Item Name</label>
                          <input type="" class="form-control" placeholder="">
                      </div>
                      <div class="form-group">
                          <label for="">Item Type</label>
                          <input type="" class="form-control" placeholder="">
                      </div>
                      <div class="form-group">
                          <label for="">Item Colour</label>
                          <input type="" class="form-control" placeholder="">
                      </div>
                      <div class="form-group">
                          <label for="">Item Material</label>
                          <input type="" class="form-control" placeholder="">
                      </div>      
                      <div class="form-group">
                          <label for="">Item Quantity</label>
                          <input type="" class="form-control" placeholder="">
                      </div>
                      <div class="form-group">
                          <label for="">Item Price</label>
                          <input type="" class="form-control" placeholder="">
                      </div>
                      <div>
                        <button class="btn btn-success" type="submit">Add Item To Inventory</button>
                    </div>
                </fieldset>              
            </div>
          </form>
                
      </div>

      <div id="removeitemsinventory"></div>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="../app/static/js/app.js"></script>     
      <!-- <script src="../scripts/js/*.js"></script>     -->
      <script>
        function myfunction() {
            document.getElementById("price-change").innerHTML = "Price successfully changed";
        }
    </script>
  </body>
</html>
    
        

      


