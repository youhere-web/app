<?php
include "conecta.php";
session_start();

if($_GET['acao'] == 'analisaLogin'){
$loginEmail = $_GET['loginEmail'];
$loginSenha = $_GET['loginSenha'];

$sql = "SELECT * FROM usuarios WHERE email like '".$loginEmail."' AND senha like '".$loginSenha."'";

$resultado = mysql_query($sql);

 


if (mysql_num_rows ($resultado) > 0) {
    // session_start inicia a sessão
    session_start();


    $_SESSION["login"] = $loginEmail;
    $_SESSION["senha"] = $loginSenha;
    
    while ($item = mysql_fetch_array($resultado))
{
    $id = $item["id_user"];
    $nome = $item["nome_user"];

}

$var = Array(
   
    array(
        "situacao"=>"logado",
        "id"=>"$id"
        
    ));

    echo json_encode($var);


  } 

else {
    //Destrói
    session_destroy();
    //Limpa
    unset ($_SESSION["login"]);
    unset ($_SESSION["senha"]);
   echo "Usuario nao encontrado";
}


}



?>
