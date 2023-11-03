<?php 
include("config.php"); 
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href='../css/font.css' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<title><?php echo $title ?> - Administração - Login</title>
</head>
<body>
<form id="form" name="form1" method="post" action="logar.php">
  <table class="main">
    <tr>
      <th class="label">Login</th>
    </tr>
    <tr>
      <td><input name="login" type="text" id="login" placeholder="Nome de usuário" autofocus required /></td>
    </tr>
    <tr>
      <td><input name="senha" type="password" id="senha" placeholder="Senha" required /></td>
    </tr>
    <tr>
      <td class="input"><input type="submit" value="Entrar" /></td>
    </tr>
  </table>
</form>
<div id="form" class="back"><a href="../index.php" class="button back">Voltar</a></div>
<div id="footer">
<a target="_blank" href="http://wc-designer.blogspot.com"><div class="wc" title="WC Design"></div></a>
</div>
</body>
</html>