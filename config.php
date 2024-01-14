<?php
// Conecta-se ao banco de dados
$mysqli = new mysqli('localhost', 'root', '', 'congresso');

// Verifica se houve algum erro
if ($mysqli->connect_errno) {
  echo "Erro ao conectar-se ao banco de dados: " . $mysqli->connect_error;
  exit();
}

// Define o charset como utf8
$mysqli->set_charset('utf8');
?>
