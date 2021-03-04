<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="sortcut icon" href="../img/icon.png" type="image/x-icon">
    <link href="../css/delete.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Deletar</title>
</head>
<body style="background-color: #8BA6E9;">
    <nav class="navbar navbar-light bg-light static-top">
        <div class="container">
            <a class="navbar-brand" href="../index.html">QIMÓVEIS</a>
            <div id="navzinha">
                <a class="btn btn-outline-dark" id="consultar" href="../visao/usuario.consulta.php">Consultar</a>
                <a class="btn btn-outline-dark" id="deletar" href="../visao/usuario.deletar.php">Deletar</a>
                <a class="btn btn-outline-dark" href="../visao/usuario.cadastro.php">Cadastrar</a>
            </div>
        </div>  
    </nav>
    



   <div style="margin: 12px">
		<legend>Ocorreu um erro ao efetuar o cadastro</legend>
		<?php
			if( isset($_SESSION['errors']) ){
				$errors = array();
				$errors = unserialize($_SESSION['errors']);

				foreach($errors as $e){
					echo '<br />'.$e;
				}
            }
		?>		
	
  
    </div>





    <footer id="foo" style="background-color:#d9d9d9;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 my-auto">
                    <p class="text-muted small mb-4 mb-lg-0">&copy; Qimóveis Website. Todos Os Direitos Reservados.</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>