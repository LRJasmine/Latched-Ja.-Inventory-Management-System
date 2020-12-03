var itemradiobtn;

window.onload =  function (){
  console.log("hello");
  var itemradiobtn = document.getElementById("itemradiobtn");
  itemradiobtn.addEventListener("click", function(){
    console.log("hello");
  });

  var nameradiobtn = document.getElementById("nameradiobtn");
  nameradiobtn.addEventListener("click", sortTable(1));

  var typeradiobtn = document.getElementById("typeradiobtn");
  typeradiobtn.addEventListener("click", sortTable(2));

  var materialradiobtn = document.getElementById("materialradiobtn");
  materialradiobtn.addEventListener("click", sortTable(3));

  var colourradiobtn = document.getElementById("colourradiobtn");
  colourradiobtn.addEventListener("click", sortTable(4));

  var quantityradiobtn = document.getElementById("quantityradiobtn");
  quantityradiobtn.addEventListener("click", sortTable(5));

  var priceradiobtn = document.getElementById("priceradiobtn");
  priceradiobtn.addEventListener("click", sortTable(6));

  function sortTable(n) {
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = document.getElementById("inventorytable");
    switching = true;
    //Set the sorting direction to ascending:
    dir = "asc"; 
    /*Make a loop that will continue until
    no switching has been done:*/
    while (switching) {
      //start by saying: no switching is done:
      switching = false;
      rows = table.rows;
      /*Loop through all table rows (except the
      first, which contains table headers):*/
      for (i = 1; i < (rows.length - 1); i++) {
        //start by saying there should be no switching:
        shouldSwitch = false;
        /*Get the two elements you want to compare,
        one from current row and one from the next:*/
        x = rows[i].getElementsByTagName("TD")[n];
        y = rows[i + 1].getElementsByTagName("TD")[n];
        /*check if the two rows should switch place,
        based on the direction, asc or desc:*/
        if (dir == "asc") {
          if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
            //if so, mark as a switch and break the loop:
            shouldSwitch= true;
            break;
          }
        } else if (dir == "desc") {
          if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
            //if so, mark as a switch and break the loop:
            shouldSwitch = true;
            break;
          }
        }
      }
      if (shouldSwitch) {
        /*If a switch has been marked, make the switch
        and mark that a switch has been done:*/
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
        //Each time a switch is done, increase this count by 1:
        switchcount ++;      
      } else {
        /*If no switching has been done AND the direction is "asc",
        set the direction to "desc" and run the while loop again.*/
        if (switchcount == 0 && dir == "asc") {
          dir = "desc";
          switching = true;
        }
      }
    }
  }
}
/*$('#itemradiobtn').click(function(){
    sortTable(0);
});
$('#nameradiobtn').click(function(){ 
    sortTable(1);
});
$('#typeradiobtn').click(function(){ 
    sortTable(2);
});
$('#materialradiobtn').click(function(){ 
    sortTable(3);
});
$('#colourradiobtn').click(function(){ 
    sortTable(4);
});
$('#quantityradiobtn').click(function(){ 
    sortTable(5);
});
$('#priceradiobtn').click(function(){ 
    sortTable(6);
});*/

