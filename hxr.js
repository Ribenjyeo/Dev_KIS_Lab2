




function loadDoc() {
  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function () {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("allnews").innerHTML = this.responseText;
    }

  };

  xhttp.open("GET", "Outputmessage.php", true);
  xhttp.send();

}

$(document).ready(function(){
  $("#form").submit(function(e){
    e.preventDefault();
    $.ajax({
      url: "message.php",
      type: "GET",
      data: $('#form').serialize(),
      success: function(response) {
        console.log("выполнено успешно");

        setTimeout('update()', 10000)
        document.getElementById("newmessage").value = "hello";
        
      },
      error: function(response) {
        console.log("выполнено не успешно");
     }
    });
  });
});

function update(){

    var xhr = new XMLHttpRequest();


    xhr.onreadystatechange = function() {

      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("nmsg").innerHTML = this.responseText;
      }

    };

    xhr.open("GET", "lastmessage.php", true);
    xhr.send();


    console.log("выполненно");

}
