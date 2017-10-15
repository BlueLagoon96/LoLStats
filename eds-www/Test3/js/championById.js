$filename = "championById.php";
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("result").innerHTML = this.responseText;
    }
  };
  $request = $filename + "?id=" + document.getElementById("championId").value;
  xhttp.open("GET", $request, true);
  xhttp.send();
}