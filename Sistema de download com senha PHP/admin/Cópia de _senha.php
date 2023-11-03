<form method="post" action="">
<table>
<tr>
<td>Inserir nova senha de acesso</td>
<th scope="row" rowspan="2"><input type="submit" value="Inserir" /></th>
</tr>
<tr>
<td><input type="text" name="senha" /></td>
</tr>
</table>
</form>
<?php
include("config.php");
$senha=md5($_POST["senha"]);//recebemos a senha do formulario e ja criamos um hash
mysql_connect("localhost", "root", "vertrigo") or die(mysql_error());
mysql_select_db("db_test") or die(mysql_error());
$query=mysql_query("SELECT ativo FROM senhas WHERE ativo='0'");
if(mysql_num_rows($query)==1){
 echo"<script>alert('Esta senha ja foi utilizada!')</script>";
 
mysql_close();
}
else{
   //aqui iniciamos o download do arquivo....
  //apos o download terminar
 mysql_query("INSERT INTO senhas(senha, ativo) VALUES ($senha, 0) WHERE senha!='$senha'");
}
?>