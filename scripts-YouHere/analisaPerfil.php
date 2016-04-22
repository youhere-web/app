<?php
include "conecta.php";


if($_GET['acao'] == 'analisaPerfil'){

$id = $_GET['id'];

$sql = "SELECT * FROM perfis WHERE id_user like '".$id."'";

$resultado = mysql_query($sql);

 


if (mysql_num_rows ($resultado) > 0) {
  

$var = Array(
   
    array(
        "situacao"=>"sim"
        
        
    ));

    echo json_encode($var);


  } 

else {
  
  $var = Array(
   
    array(
        "situacao"=>"nao"
        
        
    ));

    echo json_encode($var);
  
}


}



?>
