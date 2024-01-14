<?php
// Inclui o arquivo de conexão
require('config.php');

// Recebe os dados do formulário
$nome = $_POST['nome'];
$fone = $_POST['fone'];
$pastor = $_POST['pastor'];
$igreja = $_POST['igreja'];
$cidade = $_POST['cidade'];
$camisa = $_POST['camisa'];
$observacao = $_POST['observacao'];

// Valida os dados (aqui você pode fazer as validações que quiser)
if (empty($nome) || empty($fone) || empty($pastor) || empty($igreja) || empty($cidade) || empty($camisa)) {
  echo "Por favor, preencha todos os campos obrigatórios.";
  exit();
}

// Prepara a consulta SQL
$sql = "INSERT INTO inscritos (nome, fone, pastor, igreja, cidade, camisa, observacao) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);

// Associa os valores aos parâmetros
$stmt->bind_param('sssssss', $nome, $fone, $pastor, $igreja, $cidade, $camisa, $observacao);

// Executa a consulta
if ($stmt->execute()) {
  echo "Cadastro realizado com sucesso!";
} else {
  echo "Erro ao cadastrar: " . $stmt->error;
}

// Fecha a consulta e a conexão
$stmt->close();
$mysqli->close();
?>
