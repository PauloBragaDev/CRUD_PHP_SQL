<!DOCTYPE html>
<html>
  <head>
    <title>Cadastro de Empresas</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Slab:400,700|Pacifico' rel='stylesheet' type='text/css'>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/normalize.css">
  </head>

<body>
<form action="resultadoFinalBusca.php" method='POST'>
<?php

$link = mysqli_connect("localhost","root","","arca");
	$pesquisa = $_POST ["pesquisa"];

;
	$sql = "SELECT id, titulo, descricao FROM empresas WHERE titulo like '$pesquisa%' ORDER BY titulo ";

	$resultado = $link->query($sql) OR trigger_error($link->error, E_USER_ERROR);


print "
<div class='container'>
	<div class='table-responsive'>
		<table class='table table-striped table table-hover table table-condensed table-bordered'>
		<thead>
			<tr><td colspan='4'>Você pesquisou por: $pesquisa</td></tr>
        	<tr>
        	<th>#</td>
			<th>NOME</th>
			<th>DESCRIÇÃO</th>
			<th><input type='submit' value='ABRIR' align='center'</th>					
			</tr>
		</thead> ";

	while ($exibe = $resultado->fetch_assoc()){
		$id   = $exibe ["id"];
		$nome = $exibe ["titulo"];
		$desc = $exibe ["descricao"];
print "
<tbody>
	<tr>
		<td align='center'> $id </td>
		<td align='center'> $nome </td>
		<td align='center'> $desc </td>
		<td align='center'> <input type='radio' name='item' value='$id'></td>
	</tr>
";
	}

?>
<tr><td colspan="4">
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-primary" onClick="history.go(-1)">Voltar</button>
  </div>
</div>
</td></tr>
</tbody>	
</table>
</div>
</div>
</form>
</body>
</html>