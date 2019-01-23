<?php 
session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

$con = mysqli_connect("localhost","root","","arca") or die ("Sem conexão com o servidor");
$select = mysqli_select_db($con,"arca") or die("Sem acesso");


$result = mysqli_query("SELECT * FROM usuario WHERE nome = '$login' AND senha = '$senha'");

if(mysqli_num_rows ($result) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:login.php');
}
else{
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	header('location:cadastro.php');
	
	}

?>