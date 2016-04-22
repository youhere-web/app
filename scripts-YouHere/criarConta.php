<?php
include "conecta.php";
if($_GET['acao'] == 'criarConta'){
     $nome = $_GET['nome'];
     $email = $_GET['email'];
     $senha = $_GET['senha'];
     $localizacao = $_GET['localizacao'];

     $SQL = "INSERT INTO usuarios (nome_user, email, senha, localizacao ) VALUES ('$nome', '$email', '$senha', '$localizacao')";

     $re = mysql_query($SQL, $serve);
}
?>