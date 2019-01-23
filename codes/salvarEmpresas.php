<?php
require_once("conexao.php");
	$nome      = $_POST ["nome"];
	$telefone  = $_POST ["telefone"];
	$endereco  = $_POST ["endereco"];
	$cep       = $_POST ["cep"];
	$cidade    = $_POST ["cidade"];
	$estado    = $_POST ["estado"];
	$descricao = $_POST ["descricao"];
	$categoria = $_POST ["selectbasic"];

$con = conexao();

	
   $link = mysqli_connect("localhost","root","","arca");
	mysqli_query($link, "INSERT INTO empresas (id, titulo, telefone, endereco, cep, cidade, estado, descricao, categoria)
		VALUES (NULL, '$nome', '$telefone', '$endereco', '$cep', '$cidade', '$estado', '$descricao', '$categoria')") or die(mysqli_error($link));


?>
<script>
 alert('Empresa cadastrada com sucesso!');
window.location.assign("http://localhost/ARCA/index.php");
 </script>