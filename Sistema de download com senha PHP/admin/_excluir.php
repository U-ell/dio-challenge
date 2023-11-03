<?php
include("config.php");
?>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<title><?php echo $title ?> - Administração - Inserir nova senha</title>
<head>
</html>
<?php 
mysql_connect("$host", "$user", "$senha");
mysql_select_db("$db");
$senha1 = $_POST['senha'];
$sql_inclu = "DELETE FROM `$db`.`senhas` WHERE `senhas`.`senha` = '$senha1'";
$sql=mysql_query("SELECT ativo FROM senhas WHERE senha='$senha1'");
$result=mysql_fetch_assoc($sql);
if($result['ativo'] == 2 ){
		echo("<script>alert('Digite uma senha para excluir!')</script></script><script>history.go(-1)</script>");
		mysql_close();
} else {	
		$exe_inclu = mysql_query($sql_inclu) or die ("<script>alert('A senha a ser excluída não existe!')</script><script>history.go(-1)</script>");
		echo ("<script>alert('A senha foi excluída com sucesso!')</script><script>history.go(-1)</script>");
}
?>