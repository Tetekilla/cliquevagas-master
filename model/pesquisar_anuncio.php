<?php
require('persistency/db.php');

if (!isset($_POST['busca']) || $_POST['busca'] == "") {
  // Se não tem busca, retorna todos os anuncios
  $sql = "SELECT * FROM anuncios";
} else {
  // Se tiver busca, faz a pesquisa
  $sql = "SELECT * FROM anuncios WHERE precisase ILIKE '%" . $_POST["busca"] . "%'";
}

$resultado = banco($sql);

$vagas = pg_num_rows($resultado);

/*
while ($row = pg_fetch_row($resultado)) {
  echo "Author: $row[0]  E-mail: $row[1]";
  echo "<br />\n";
}
*/
//header("Location: ../index.php");
?>