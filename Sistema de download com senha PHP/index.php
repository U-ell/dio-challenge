<?php 
include("admin/config.php"); 
?>
<html lang="pt-br">
<head>
<link href="css/font.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title><?php echo $title ?> - Inserir Senha</title>
</head>
<body>
<form id="form" method="post" action="">
<table class="main">
<tr>
<th scope="col" class="label">Insira sua senha:</th>
</tr>
<tr>
<td><input type="text" name="senha" placeholder="* * * * * * * * * * * * * * * " autofocus required="Digite uma senha" /></td>
</tr>
<tr>
<td class="input"><input type="submit" value="Baixar" /></td>
</tr>
</table>
</form>
<div id="form" class="back"><a href="admin" class="button back">Administração</a></div>
<div id="form" class="back site"><a href="/" class="button back">Voltar</a></div>
<div id="footer">
<a target="_blank" href="http://wc-designer.blogspot.com"><div class="wc" title="WC Design"></div></a>
</div>
</body>
</html>
<?php
include("admin/config.php"); 
	$senha=$_POST["senha"];
	mysql_connect("$host", "$user", "vertrigo");
	mysql_select_db("$db");
	$logar = mysql_query("SELECT * FROM senhas WHERE senha='$senha'") or die("erro ao selecionar");

if (mysql_num_rows($logar)>0 ){

	$sql=mysql_query("SELECT ativo FROM senhas WHERE senha='$senha'");

	$result=mysql_fetch_assoc($sql);

	if($result['ativo'] == 0 ){

		echo"<script>alert('Esta senha já foi utilizada!')</script>";

		mysql_close();
		
	} if($result['ativo'] == 1 ){

	   $file = 'admin/download/a.xlsx';
	   if (file_exists($file)) {
       header('Content-Description: File Transfer');
       header('Content-Type: application/octet-stream');
       header('Content-Disposition: attachment; filename='.basename($file));
       header('Content-Transfer-Encoding: binary');
       header('Expires: 0');
       header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
       header('Pragma: public');
       header('Content-Length: ' . filesize($file));
       ob_clean();
       flush();
       readfile($file);
    }
		mysql_query("UPDATE senhas SET ativo='0' WHERE senha='$senha'");
	
	}

	} else {

	echo "<script>alert('Senha inválida.')</script>";

}

?>