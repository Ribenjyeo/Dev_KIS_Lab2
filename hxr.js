
function loadDoc() { //загрузка всех сообщений из бд
  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function () {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("allnews").innerHTML = this.responseText;
    }

  };

  xhttp.open("GET", "Outputmessage.php", true);
  xhttp.send();

}

$(document).ready(function () { // отправка формы без перезагрузки страцы с помощью jquery
  $("#form").submit(function (e) {
    e.preventDefault();
    $.ajax({
      url: "message.php",
      type: "GET",
      data: $('#form').serialize(),
      success: function (response) {
        console.log("выполнено успешно");

        update(); //Вызываем фунцию для вывода последнего сообщнеия
        document.getElementById("newmessage").value = "";

      },

      error: function (response) {
        console.log("выполнено не успешно");
      }
    });
  });
});

function update() { //вывод последнего элемента в бд

  var xhr = new XMLHttpRequest();


  xhr.onreadystatechange = function () {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("nmsg").insertAdjacentHTML("afterend", this.responseText); //добавление нового элемента без его перезаписи   
    }

  };
  xhr.open("GET", "lastmessage.php", true);
  xhr.send();
  console.log("выполненно");

}

