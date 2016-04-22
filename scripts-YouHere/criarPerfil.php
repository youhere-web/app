<?php
include "conecta.php";
if($_GET['acao'] == 'criarPerfil'){
	 $id = $_GET['id'];
     $imagem = $_GET['imagem'];
     $talento = $_GET['talento'];
     $descricao = $_GET['descricao'];
     $palavras = $_GET['palavras'];

     /*$SQL = "INSERT INTO usuarios (nome_user, email, senha, localizacao ) VALUES ('$nome', '$email', '$senha', '$localizacao')";

     $re = mysql_query($SQL, $serve);*/
     echo $id;
}
?>