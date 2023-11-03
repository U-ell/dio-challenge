<?php 
include("config.php"); 
include("restrito.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href='../css/font.css' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<title><?php echo $title ?> - Administração - Excluir senha existente</title>
</head>
<body>
<form id="form" method="post" action="_excluir.php">
<table class="main">
<tr>
<th class="label">Excluir senha existente:</th>
</tr>
<tr>
<td><input type="text" name="senha" required autofocus /></td>
</tr>
<tr>
<td class="input"><input type="submit" value="Excluir" /></td>
</tr>
</table>
</form>
<div id="form" class="back"><a class="button back" href="principal.php">Voltar</a></div>
<div id="footer">
<a target="_blank" href="http://wc-designer.blogspot.com"><div class="wc" title="WC Design"></div></a>
</div>
</body>
</html>
<?php 
$link = mysql_connect("$host","$user","$senha");
$conexao = mysql_select_db("$db",$link); if($conexao){
$sql = "SELECT senha FROM senhas WHERE ativo='1'";
$sql1 = "SELECT senha FROM senhas WHERE ativo='0'";
$consulta = mysql_query($sql); 
$consulta1 = mysql_query($sql1);

echo '<div id="form">';
echo '<table class="oth">';
echo '<tr>';
echo '<th scope="col" colspan="1" class="label">Senhas disponíveis:</th>';
echo '</tr>';

while($registro = mysql_fetch_assoc($consulta)){
echo '<tr>';
echo '<td scope="col" colspan="1"><p class="pass1">'.$registro["senha"].'</p></td>';
echo '</tr>';
}

echo '</table>'; 
echo '</div>';

echo '<div id="form">';
echo '<table class="oth">';
echo '<tr>';
echo '<th scope="col" colspan="1" class="label">Senhas usadas:</th>';
echo '</tr>';

while($registro1 = mysql_fetch_assoc($consulta1)){
echo '<tr>';
echo '<td scope="col" colspan="1"><p class="pass2">'.$registro1["senha"].'</p></td>';
echo '</tr>';
}

echo '</table>'; 
echo '</div>';
}
?>