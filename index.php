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

  <body>
    <div>
      <form action="">
        <input id="search-input" name="search" type="text" placeholder="Type here" onkeyup="getuser(this.value)"> <!--  -->      </form>
    </div>

    <div class="card">
      <table id="signature">
        <tbody id="signature-body">
          <tr valign="top">
            <td id="logo-td" class="logo-td">
              <img class="logo" src="img/banner.png" alt="photo" >
            </td>

            <td id="signature-info" class="signature-info">
              <div id="upper-signature" class="upper-signature">
                <b id="name" class="name">Ana Carolina M. Fortes Guimarães</b>
                <br>
                <span id="title" class="title">Diretora de Vendas e Marketing</span>
                <br>
                <span id="creci" class="creci">CRECI: 192.955-F</span>
              </div>

              <table id="down-signature" class="down-signature" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                    <td>
                      <p id="tel-p" class="tel-p">

                        <a id="tel" class="tel">Tel.: (16) 3602-4414 (4414)</a>

                        <span display:inline-block;>
                      </p>
                    </td>
                  </tr>
              
                  <tr>
                    <td>

                      <span id="address" class="address">
                        Rua Campos Salles, 555 - Centro
                      </span>

                    </td>
                  </tr> 

                
                  <tr>
                    <td>

                      <p id="site-p" class="site-p">
                        <span id="site-span" class="site-span">
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

    <div class="download-button">
        <button type="button" name="button"> <a href="#" id = "download">Download</a> </button>
      </div>
    </div>

    <script src="js/script.js"></script>
  </body>
</html>
