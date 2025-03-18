<?php
// Conexão com o banco de dados
$host = "localhost";
$db   = "nome-database";
$user = "root";
$pass = "";
$con = mysql_connect($host,$user,$pass);
if(mysql_select_db($db, $con)){
  echo "conexao bem sucedida"; //Teste para garantir que há conexão
}
else {
  echo"conexao falhou";
}
?>
