<?php
$host = "localhost"; //Servidor do mysql
$user = "root"; //Usuario do banco de dados
$senha = "vertrigo"; //senha do banco de dados
$db = "download"; //banco de dados
$title = "Tabela"; //Nome do site
$nome_site = $title;
$email = "welersson"; //E-mail do administrador
$site = "localhost"; //Seu site n se esuqece de bota o http://

mysql_connect($host, $user, $senha) or die (mysql_error());
mysql_select_db($db) or die (mysql_error()); 
?>
