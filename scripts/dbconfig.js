window.onload = function() {

    const itemSubmit = document.getElementById("");
    const categorySubmit = document.getElementById("");
    const userAdd = document.getElementById("");
    const updatebtn = document.getElementById("");
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

    categorySubmit.addEventListener('click', function(element) {
        element.preventDefault();
    
        httpRequest = new XMLHttpRequest();
        const category = document.querySelector('').value;
    
        var url = "http://localhost:8888/Latched-Ja.-Inventory-Management-System/scripts/categories.php?category=" + category;
        httpRequest.onreadystatechange = sendResult;
        httpRequest.open('GET', url);
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        httpRequest.send('category=' + encodeURIComponent(category));
    });

    updatebtn.addEventListener('click', function(element) {
        element.preventDefault();
    
        httpRequest = new XMLHttpRequest();
        const itemId = document.querySelector('').value;
        const qty = document.querySelector('').value;
        const status = document.querySelector('').value;
    
        var url = "http://localhost:8888/Latched-Ja.-Inventory-Management-System/scripts/categories.php?itemid=" + itemId + "&context=" + status.toLowerCase();
        httpRequest.onreadystatechange = sendResult;
        httpRequest.open('GET', url);
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        httpRequest.send('id=' + encodeURIComponent(itemId) + '&qty=' + encodeURIComponent(qty) + '&status=' + encodeURIComponent(status.toLowerCase()));
    });

    userAdd.addEventListener('click', function(element) {
        element.preventDefault();
    
        httpRequest = new XMLHttpRequest();
        const name = document.querySelector('').value;
        const username = document.querySelector('').value;
        const role = document.querySelector('').value;
        const password = document.querySelector('').value;
        const email = document.querySelector('').value;
        const contact_num = document.querySelector('').value;
    
        var url = "http://localhost:8888/Latched-Ja.-Inventory-Management-System/scripts/user.php?context=newuser";
        httpRequest.onreadystatechange = sendResult;
        httpRequest.open('POST', url);
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        httpRequest.send('name=' + encodeURIComponent(name) + '&username=' + encodeURIComponent(username) + '&role=' +
                        encodeURIComponent(role) + '&password=' + encodeURIComponent(password) + '&email=' + 
                        encodeURIComponent(email) + '&contactnum=' + encodeURIComponent(contact_num));
    });
  
    function sendResult() {
      if (httpRequest.readyState === XMLHttpRequest.DONE) {
        if (httpRequest.status === 200) {
          var response = httpRequest.responseText;
          document.getElementById("").innerHTML = response;
        } else {
          alert('There was a problem with the request.');
        }
      }
    }
  
};