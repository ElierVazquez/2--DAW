function loadDoc() {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("res").innerHTML =
        this.responseText;
      } else {
        document.getElementById("res").innerHTML = "Petición resolviéndose";
      }
    };
    xhttp.open("GET", "ajax_info.txt");
    xhttp.send();
}