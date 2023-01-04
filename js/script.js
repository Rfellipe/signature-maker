function enviar(){
    var name = document.getElementById("inputName").value;
    document.getElementById("name").innerHTML = name; 

    var tittleC = document.getElementById("inputTitle").value;
    document.getElementById("title").innerHTML = tittleC;

    var ramalC = document.getElementById("inputTel").value;
    document.getElementById("tel").innerHTML = ramalC;

/*     var cel = document.getElementById("inputCel").value;
    document.getElementById("Celular").innerHTML = cel; */

    var creci = document.getElementById("inputCreci").value;
    document.getElementById("creci").innerHTML = creci;

    var addressC = document.getElementById("inputAddress").value;
    document.getElementById("address").innerHTML = addressC;
}

$(document).ready(function() {
          
    // Global variable
    var element = $("#signature-div"); 
  
    // Global variable
    var getCanvas; 

    $("#btn-Preview-Image").on('click', function() {
        html2canvas(element, {
            onrendered: function(canvas) {
                $("#previewImage").append(canvas);
                getCanvas = canvas;
            }
        });
    });

    $("#btn-Convert-Html2Image").on('click', function() {
        var imgageData = 
            getCanvas.toDataURL("image/png");
      
        // Now browser starts downloading 
        // it instead of just showing it
        var newData = imgageData.replace(
        /^data:image\/png/, "data:application/octet-stream");
      
        $("#btn-Convert-Html2Image").attr(
        "download", "GeeksForGeeks.png").attr(
        "href", newData);
    });
});