<?php
session_start();
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'CI_db');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$sobrenome = mysqli_real_escape_string($conexao, trim($_POST['sobrenome']));
$datanasc = mysqli_real_escape_string($conexao, trim($_POST['datanasc']));

$sql = "select * FROM `doiscarac_nomes_validos` WHERE 1"; //selecionar array nome validos
$result = mysqli_query($conexao, $sql);
$count_nomes = mysqli_num_rows($result);
$doiscarac_nomes_validos = mysqli_fetch_all($result);
$sql = "select * FROM `doiscarac_sobrenomes_validos` WHERE 1"; //selecionar array sobrenome validos
$result =  mysqli_query($conexao, $sql);
$count_sobrenomes = mysqli_num_rows($result);
$doiscarac_sobrenomes_validos = mysqli_fetch_all($result);

$check = 0;
for ($index = 0; $index < $count_nomes; $index++){
	if (in_array(strtolower($nome),$doiscarac_nomes_validos[$index]) == TRUE) $check = 1;
}

if(strlen($nome) == 2 && $check==0) {
	header('Location: nome2char.php');
	exit;
}

$check = 0;
for ($index = 0; $index < $count_sobrenomes; $index++){
	if (in_array(strtolower($sobrenome),$doiscarac_sobrenomes_validos[$index]) == TRUE) $check = 1;
}

if(strlen($sobrenome) == 2 && $check==0) {
	header('Location: sobrenome2char.php');
	exit;
}


$sql = "INSERT INTO `usuarios`(`Nome`, `Sobrenome`, `DataNasc`) VALUES ('$nome', '$sobrenome', '$datanasc')";
$result = mysqli_query($conexao, $sql);

$conexao->close();

header('Location: cadastro.php');

exit;
?>