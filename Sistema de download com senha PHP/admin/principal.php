<?php
include("config.php");
include("restrito.php");

$sql_busca = "SELECT * FROM user WHERE nome = '$login_usuario'";
$exe_busca = mysql_query($sql_busca) or die (mysql_error());
$fet_busca = mysql_fetch_assoc($exe_busca);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href='../css/font.css' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<title><?php echo $title ?> - Administração - Principal</title>
</head>
<body>
<p class="saudation">Bem-vindo, <?php echo $fet_busca['nome'];?>!</p>
<table class="main" id="form">
<tr>
<th class="label">Escolha uma tarefa:</th>
</tr>
<tr>
<td><a class="button" href="inserir.php">Inserir nova senha</a></td>
</tr>
<tr>
<td><a class="button" href="excluir.php">Excluir senha existente</a></td>
</tr>
</table>
<div id="form" class="back"><a href="logout.php" class="button back">Sair</a></div>
<div id="footer">
<a target="_blank" href="http://wc-designer.blogspot.com"><div class="wc" title="WC Design"></div></a>
</div>
</body>
</html>