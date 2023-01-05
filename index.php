<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>Signatures</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script 
      src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <script 
      src = "https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js">
    </script>

  </head>

  <style>
    @font-face {
    font-family: 'Gotham';
    src: url('./fonts/GothamBook.ttf') format('embedded-opentype'), /*IE*/
         url('./fonts/GothamBook.ttf') format('woff2'), /*Newwer modern browsers*/
         url('./fonts/GothamBook.ttf') format('woff'), /*modern browsers*/
         url('./fonts/GothamBook.ttf') format('truetype'), /*safari, android, ios*/
         url('./fonts/GothamBook.ttf') format('svg'), /*old ios*/
  }
  
  #inputBlock1 {
    width: 30%;
    display: flex;
    flex-direction: column;
  }
  
  a{
    text-decoration: none;
  }
  
  span, a {
    font-size: 11pt;
    color: #444;
  }

  </style>

  <body>
    <div class="card" style="width: 700px; height: 142px;">
      <table id="signature">
        <tbody id="signature-body" style="display: flex; position: absolute; left: 5; top: 5;">
          <tr valign="top">
            <td style="width:10px; padding-right:10px">
              <img class="logo" src="img/banner.png" alt="photo" ><!--logo-->
            </td>

            <td id="signature-info" class="signature-info" style="color: black;text-align:initial;;line-height:normal;font-size:13pt;font-family:Gotham;padding-top: 17px;padding-left: 11px;">
              <div id="uper-signature" class="upper-signature" style="margin-bottom: 7pt">
                <b id="name" class="name">Ana Carolina M. Fortes Guimarães</b><!--Nome-->
                <br>
                <span id="title" class="title">Diretora de Vendas e Marketing</span><!--Cargo-->
                <br>
                <span id="creci" class="creci">CRECI: 192.955-F</span>
              </div>

              <table id="down-signature" class="down-signature" style="width:470px" width="470" cellspacing="0" cellpadding="0"><!--infos-->
                <tbody>
                  <tr>
                    <td>
                      <p style="margin-right:0px; margin-left:0px; ">
                        <a id="tel" class="tel">Tel.: (16) 3602-4414 (4414)</a><!--telefone-->
                        <span display:inline-block">
                      </p>
                    </td>
                  </tr>
                            
                  <tr>
                    <td>
                      <span id="address" class="address" style="display:inline-block; ">Rua Campos Salles, 555 - Centro</span><!--endereço-->
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <p style="margin-right:0px; margin-left:0px; "> <!--site-->
                        <span style="white-space:nowrap; display:inline-block">
                          <a href="https://www.imobiliariafortesguimaraes.com.br/" target="_blank">www.imobiliariafortesguimaraes.com.br</a>
                        </span>
                      </p>
                    </td>
                  </tr>

                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </div>


    <button type="button" name="button"> <a href="#" id = "download">Download</a> </button>

    <script type="text/javascript">
      // Download card
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
    </script>

  </body>
</html>
