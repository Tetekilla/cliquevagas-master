<?php
require('persistency/db.php');



echo "Salvar pesquisa";
echo $_POST['email'];
echo $_POST['pesquisa'];

header("Location: ../pesquisa_salva.html");
?>