<?php

//busca do o código que conecta no SGBD

require_once '../bancoDeDados/conecta.php'

//dados provenientes do form HTML
$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];


var_dump($_POST);

objSmt = $bd->prepare (' INSERT INTO alunos
							(nome, turno, inicio)
						VALUES 
							(:nome, :turno, :inicio) ');
/* 
A função $bd->prepare() retorna outra variavél (objeto), essa outra variável consegue juntar os dados do usuário com a consulta SQL
*/

$consulta->bindParam('nome',$nome);
$consulta->bindParam('turno',$turno);
$consulta->bindParam('inicio',$inicio)

/*
A função $consulta->bindParam() substitui os rótulos (ex: ":nome")
pelos dados inseguranços
*/ 

if($consulta->execute()){
	echo "Gravou com sucesso!";
}else{
	echo "Erro ao gravar no banco de dados";
}