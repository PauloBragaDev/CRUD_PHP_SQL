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
<?php
$link = mysqli_connect("localhost","root","","arca");

    $id = $_POST ["item"];


    $sql = "SELECT empresas.id, empresas.titulo, empresas.descricao, empresas.endereco, empresas.cep, empresas.cidade, empresas.estado, empresas.categoria, empresas.telefone, categorias.id, categorias.nome FROM empresas INNER JOIN categorias ON empresas.categoria = categorias.id WHERE empresas.id like '$id'";
    $query = $link->query($sql);
    $resultado = $link->query($sql) OR trigger_error($link->error, E_USER_ERROR);

while ($exibe = $resultado->fetch_assoc()){
        $id       = $exibe ["id"];
        $nome     = $exibe ["titulo"];
        $desc     = $exibe ["descricao"];
        $endereco = $exibe ["endereco"];
        $cep      = $exibe ["cep"];
        $cidade   = $exibe ["cidade"];
        $estado   = $exibe ["estado"];
        $categoria= $exibe ["nome"];
        $telefone = $exibe ["telefone"];
    }
print "
<div class='container'>
    <div class='table-responsive'>
        <table class='table table-striped table table-hover table table-condensed table-bordered'>
        <thead>
            <tr>
            <th>#</th>
            <td>$id</td></tr><tr>
            <th>NOME</th>
            <td>$nome</td></tr><tr>
            <th>DESCRIÇÃO</th>
            <td>$desc</td></tr><tr>
            <th>CATEGORIA</th>
            <td>$categoria</td></tr><tr>
            <th>ENDEREÇO</th>
            <td>$endereco</td></tr><tr>
            <th>CIDADE</th>
            <td>$cidade</td></tr><tr>
            <th>ESTADO</th>
            <td>$estado</td></tr><tr>
            <th>CEP</th>
            <td>$cep</td></tr><tr>
            <th>TELEFONE</th>
            <td>$telefone</td>                  
            </tr>
        </thead> ";
?>
<tr><td colspan="2">
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-primary" onClick="history.go(-1)">Voltar</button>
  </div>
</div>
</td></tr>