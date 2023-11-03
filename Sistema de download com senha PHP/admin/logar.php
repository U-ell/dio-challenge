<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<head>
</html>
<?php
include("config.php");

$login = $_POST['login'];
$senha = $_POST['senha'];

/* Verifica se existe usuario, o segredo ta aqui quando ele procupa uma 
linha q contenha o login e a senha digitada */
$sql_logar = "SELECT * FROM user WHERE login = '$login' && senha = '$senha'";
$exe_logar = mysql_query($sql_logar) or die (mysql_error());
$fet_logar = mysql_fetch_assoc($exe_logar);
$num_logar = mysql_num_rows($exe_logar);

//Verifica se n existe uma linha com o login e a senha digitado
if ($num_logar == 0){
   echo "<script>alert('Login ou senha inválido.')</script><script>history.go(-1)</script>";
} 
elseif($fet_logar['activo'] == "N"){
   echo "<script>alert('Usuário não ativado, verifique seu e-mail para ativa a conta.')</script><script>history.go(-1)</script>";
}
else{
   //Cria a sessão e manda pra pagina principal.php
   session_start();
   $_SESSION['login'] = $login;
   $_SESSION['senha'] = $senha;
   header("Location:principal.php");
}
?>