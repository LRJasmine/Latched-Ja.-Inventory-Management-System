$(document).ready(function(){

    var orderslistDiv = $("#orderslist");
    var newordersDiv = $("#neworders");
    var inventorylistDiv = $("#inventoryview");
    var adjustPriceDiv = $("#adjustprice");
    var salesrestockDiv = $("#restockorsolditem");
    var newinventoryitem = $("#addnewiteminventory");
    var deleteinventoryitemDiv = $("#removeitemsinventory");
    var updateorderstatusDiv = $("#updateorderstatus");
    var inventorystatusreport = $("#inventorystatusreport");
    
    showDiv(inventorylistDiv);
    hideDiv(adjustPriceDiv);
    hideDiv(salesrestockDiv);
    hideDiv(newinventoryitem);
    hideDiv(newordersDiv);
    showDiv(orderslistDiv);
    hideDiv(deleteinventoryitemDiv);
    hideDiv(updateorderstatusDiv);
    hideDiv(inventorystatusreport);

    $("#generatesalesreportbtn").click(function(){
        $(location).attr('href','salesreport.html')
    });
    $("#orderspagebtn").click(function(){
        $(location).attr('href','orders.html')
    });
    $("#inventorypagebtn").click(function(){
        $(location).attr('href','inventory.html')
    });
    $("#supplierspagebtn").click(function(){
        $(location).attr('href','suppliers.html')
    });


    $("#addnewordersbtn").click(function(){
        showDiv(newordersDiv);
        hideDiv(orderslistDiv);
        hide(updateorderstatusDiv);

    });

    $("#adjustprices").click(function(){
        hideDiv(inventorylistDiv);
        showDiv(adjustPriceDiv);
        hideDiv(inventorylistDiv);
        hideDiv(salesrestockDiv);
        hideDiv(deleteinventoryitemDiv);
        hideDiv(newinventoryitem);
        hideDiv(inventorystatusreport);
    });

    $("#searchinventorybtn").click(function(){
        $.each($("#inventorytable tbody tr"), function() {

            if($(this).text().toLowerCase().indexOf($('#searchinput').val().toLowerCase()) === -1)
                $(this).hide();
            else
                $(this).show();                
        });
    }); 

    $("#soldorrestockbtn").click(function(){
        hideDiv(inventorylistDiv);
        hideDiv(adjustPriceDiv);
        hideDiv(newinventoryitem);
        hideDiv(deleteinventoryitemDiv);
        showDiv(salesrestockDiv);
    });

    $("#addnewinventoryitembtn").click(function(){
        hideDiv(inventorylistDiv);
        hideDiv(adjustPriceDiv);
        hideDiv(salesrestockDiv);
        hideDiv(deleteinventoryitemDiv);
        showDiv(newinventoryitem);
    });

    $("#deleteitembtn").click(function(){
        hideDiv(inventorylistDiv);
        hideDiv(adjustPriceDiv);
        hideDiv(newinventoryitem);
        showDiv(deleteinventoryitemDiv);
        hideDiv(salesrestockDiv);
    });

    $("#updateorderstatusbtn").click(function(){
        hideDiv(newordersDiv);
        hideDiv(orderslistDiv);
        showDiv(updateorderstatusDiv); 
    });

    $("#inventoryreportbtn").click(function(){
        showDiv(inventorystatusreport);
        hideDiv(deleteinventoryitemDiv);
        hideDiv(newinventoryitem);
        hideDiv(salesrestockDiv);
        hideDiv(inventorylistDiv);
        hideDiv(adjustPriceDiv);
    });
    /*$('#idradiobtn').click(function(){
        sortTable(0);
        //console.log("hello");
    });
    $('#nameradiobtn').click(function(){ 
        sortTable(1);        
        //console.log("hello");
    });
    $('#typeradiobtn').click(function(){ 
        sortTable(2);        
        //console.log("hello");
    });
    $('#materialradiobtn').click(function(){ 
        sortTable(3);        
        //console.log("hello");
    });
    $('#colourradiobtn').click(function(){ 
        sortTable(4);        
        //console.log("hello");
    });
    $('#quantityradiobtn').click(function(){ 
        sortTable(5);        
        //console.log("hello");
    });
    $('#priceradiobtn').click(function(){ 
        sortTable(6);        
        //console.log("hello");
    });*/


    /* Open and Close DropDown Menus*/
    $('#updatedropdownmenu, #groupbydropdownmenu').on({
        "shown.bs.dropdown": function() { this.closable = false; $('#inventorytable').css('margin-top', '250px'); },
        "click": function() { this.closable = true; $('#inventorytable').css('margin-top', '0px');},
        "hide.bs.dropdown": function() { this.closable = true; $('#inventorytable').css('margin-top', '0px');}
    });
            
    
    var additemsform = $("#placeorderformfieldset").clone();
    var sectionsCount = 1;
    $("#additemsorderfieldset").click(function(){
        sectionsCount++;
        var section = additemsform.clone().find(':input').each(function(){
            var newId = this.id + sectionsCount;
            $(this).prev().attr('for', newId);
            this.id = newId;
        }).end();
        $("#placeorderform").append(section);
        rearrange();
        return false;
    });
});

function rearrange() {
  var count = 1;
  var totalCount = $(".placeorderformfieldset").length;
  $(".placeorderformfieldset").each(function() {
    $(this).attr("id", "placeorderformfieldset" + count)
    .find(".label-nbr").text(count).end();
    count++;
  });
}

function showDiv(divname){
    divname.show();
}

function hideDiv(divname){
    divname.hide();
}

/*function sortTable (n){
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = $("#inventorytable");
    switching = true;
    dir = "asc"; 
    while (switching) {
        switching = false;
        rows = $("#inventorytablt tr");
        for (i = 1; i < (rows.length - 1); i++) {
            shouldSwitch = false;
            x = rows[i].$("td")[n];
            y = rows[i + 1].$("td")[n];
            if (dir == "asc") {
                if (x.html.toLowerCase() > y.html.toLowerCase()) {
                    shouldSwitch= true;
                    return false;
                }
            } else if (dir == "desc") {
                if (x.html.toLowerCase() < y.html.toLowerCase()) {
                    shouldSwitch = true;
                    return false;
                }
            }
        }
        if (shouldSwitch) {
            rows[i].after( rows[i + 1] );
            switching = true;
            switchcount ++;      
          } else {
            if (switchcount == 0 && dir == "asc") {
              dir = "desc";
              switching = true;
            }
        }
    }
}*/