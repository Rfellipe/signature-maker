function getuser(str) { // Função para alterar valores na assinatura
  var xhttp;    
  if (str == "") {
    document.getElementById("signature").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("signature").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getuser.php?search="+str, true);
  xhttp.send();
}


// Função para fazer download da assinatura 
var element = $(".card");
      $("#download").on('click', function(){
        html2canvas(element, {
          onrendered: function(canvas){
            var imageData = canvas.toDataURL("image/png");
            var newData = imageData.replace(/^data:image\/png/, "data:application/octet-stream");
            $('#download').attr("download", "image.png").attr("href", newData);
          }
        });
      });