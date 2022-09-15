<?php

$recebe = $_POST['nomeUsuario'];

echo "Olá $recebe seu merda <br>";
echo  "Você tem {$_POST['idadeUsuario']}, Cpf: {$_POST['cpfUsuario']}<br><br>";
echo "E o período escolhido foi o {$_POST['periodoUsuario']}";

$nome = $_POST['nomeUsuario'];
$idade = $_POST['idadeUsuario'];
$cpf = $_POST['cpfUsuario'];
$periodo = $_POST['periodoUsuario'];

//abre o arquivo para apendice
$arquivo = fopen('alunos.cvs', 'a');

//Agora escreve os dados no arquivo
fwrite($arquivo, "$nome, $idade, $cpf , $periodo\r\n");
fclose($arquivo);
?>