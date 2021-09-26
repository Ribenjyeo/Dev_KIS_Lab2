

function loadDoc() {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {

      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo").innerHTML = this.responseText;
      }

    };

    xhttp.open("GET", "Outputmessage.php", true);
    xhttp.send();
  }



function update(){

    // setTimeout('loadDoc()', 10);
    var xhr = new XMLHttpRequest();
    

    xhr.onreadystatechange = function() {

      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo2").innerHTML = this.responseText;
      }

    };

    xhr.open("GET", "lastmessage.php", true);
    xhr.send();
  
    // setTimeout('loadDoc()', 10);

    console.log("выполненно");

}
