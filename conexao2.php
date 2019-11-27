<?php

$host = "192.168.0.55";// Geralmente Localhost
$usuario = "alex";//usuário do seu banco de dados
$password = "123456";// senha do banco de dados
$banco = "sistema";// tabela do banco de dadosa

$con=mysql_connect($host,$usuario,$password) or die ('Conexão não realizada');
mysql_select_db($banco, $con) or die ('Banco não encontrado');
?>