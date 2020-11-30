window.onload = function() {

    var itemSubmit = document.getElementById("");
    var categorySubmit = document.getElementById("");
    var httpRequest;
  
    itemSubmit.addEventListener('click', function(element) {
      element.preventDefault();
  
      httpRequest = new XMLHttpRequest();
      var itemName = document.querySelector('').value;
  
      var url = "http://localhost:8888/Latched-Ja.-Inventory-Management-System/scripts/items.php?item=" + itemName;
      httpRequest.onreadystatechange = sendResult;
      httpRequest.open('GET', url);
      httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      httpRequest.send('itemName=' + encodeURIComponent(itemName));
    });

    searchBtnCities.addEventListener('click', function(element) {
        element.preventDefault();
    
        httpRequest = new XMLHttpRequest();
        var category = document.querySelector('').value;
    
        var url = "http://localhost:8888/Latched-Ja.-Inventory-Management-System/scripts/categories.php?category=" + category;
        httpRequest.onreadystatechange = sendResult;
        httpRequest.open('GET', url);
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        httpRequest.send('category=' + encodeURIComponent(category));
      });
  
    function sendResult() {
      if (httpRequest.readyState === XMLHttpRequest.DONE) {
        if (httpRequest.status === 200) {
          var response = httpRequest.responseText;
          document.getElementById("result").innerHTML = response;
        } else {
          alert('There was a problem with the request.');
        }
      }
    }
  
};