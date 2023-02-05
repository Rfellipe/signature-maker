<?php

// Parâmetros conexão com banco de dados ("link", "usuario", "senha", "db") 
$mysqli = new mysqli("localhost", "root", "", "assinaturas");
if($mysqli->connect_error) {
  exit('Could not connect');
}

// Condição para pegar o input do usuario
if(isset($_GET['search'])):
  $search = $_GET["search"];
endif;

// SQL Query
$sql = "SELECT nome, cargo, creci, tel, ende FROM info_final WHERE nome = ?"; 

$stmt = $mysqli->prepare($sql);
$stmt->bind_param('s', $search);  
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($nome, $cargo, $creci, $tel, $ende);
$stmt->fetch();
$stmt->close();

echo "<table id=signature>";
echo "<tbody id=signature-body>";
echo "<tr valign=top>";
echo "<td id=logo-td class=logo-td>";
echo "<img class=logo src=img/banner.png alt=photo >";
echo "</td>";

echo "<td id=signature-info class=signature-info>";
echo "<div id=upper-signature class=upper-signature>";
echo "<b id=name class=name>" . $nome ."</b>";
echo "<br>";
echo "<span id=title class=title>". $cargo ."</span>";
echo "<br>";
if($creci != NULL) {
  echo "<span id=creci class=creci>CRECI: ". $creci ."</span>";
}
else {
  echo "<span id=creci class=creci>". $creci ."</span>";
}

echo "</div>";

echo "<table id=down-signature class=down-signature cellspacing=0 cellpadding=0>";
echo "<tbody>";
echo "<tr>";
echo "<td>";
echo "<p id=tel-p class=tel-p>";
echo "<a id=tel class=tel>Tel.: ". $tel ."</a>";
echo "<span display:inline-block;>";
echo "</p>";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "<span id=address class=address>". $ende ."</span>";
echo "</td>";
echo "</tr>";

echo "<tr>";
echo "<td>";
echo "<p id=site-p class=site-p>";
echo "<span id=site-span class=site-span>";
echo "<a>www.imobiliariafortesguimaraes.com.br</a>";
echo "</span>";
echo "</p>";
echo "</td>";
echo "</tr>";

echo "</tbody>";
echo "</table>";
echo "</td>";
echo "</tr>";
echo "</tbody>";
echo "</table>";

?>