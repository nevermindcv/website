function getData() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("response").innerHTML =
            this.responseText;
       }
    };
    xhttp.open("GET", "indexFree.php", true);
    xhttp.send(); }

    window.onload = getData;