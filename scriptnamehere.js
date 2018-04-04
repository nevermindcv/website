function getData() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        	var obj = JSON.parse(this.responseText);
            document.getElementById("response").innerHTML = obj.title 
            
       }
    };
    xhttp.open("GET", "indexFree.php", true);
    xhttp.send(); }

    window.onload = getData;