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
        <script src="js/menu.js"></script>
        <link rel="stylesheet" href="css/style.css">
  </head>

<body>

<figure>
    <div id="logo" align="center">
        <img src="img/logoFinal.png" alt="Search Engine" title="Arca Solutions" id="logo" width="200" height="200" />
    </div>
</figure>

<section id='busca'>
<form class="form-horizontal" action="resultadoBusca.php" method="POST">
<fieldset>
<div class="container">
    <div class="row">    
        <div class="col-xs-8 col-xs-offset-2">
		    <div class="input-group">
                <input type="hidden" name="search_param" value="all" id="search_param">         
                <input type="text" class="form-control" name="pesquisa" placeholder="Pesquisar..." required="">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>
	</div>
</div>
</fieldset>
</form>
</section>

<section id='login'>
<br><br>
<form class="form-horizontal" action='login.php'>
<fieldset>

<!-- Form Name -->
<legend align='center'>Area Administrativa</legend>

<!-- Button -->
<div class="form-group" align='center'>
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-primary">Faça Login</button>
  </div>
</div>

</fieldset>
</form>
</section>
</body>
</html>