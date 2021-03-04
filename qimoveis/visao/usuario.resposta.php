<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="sortcut icon" href="../img/icon.png" type="image/x-icon">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/view.css" rel="stylesheet">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Resposta</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light static-top">
        <div class="container">
            <a class="navbar-brand" href="../index.html">QIMÓVEIS</a>
            <div id="navzinha">
                <a class="btn btn-outline-dark" id="consultar" href="../controle/usuario.controle.php?op=consultar">Consultar</a>
                <a class="btn btn-outline-dark" id="deletar" href="../controle/usuario.controle.php?op=deletar">Deletar</a>
                <a class="btn btn-outline-dark" href="../visao/usuario.cadastro.php">Cadastrar</a>
            </div>
        </div>  
    </nav>
    <section class="pb-5">
        <h1 class="h2 pt-5">Seu cadastro foi efetuado com sucesso!</h1>

         
        <div id="divresposta">
       
       
  
                    <?php
                  //verificando se nas variáveis há algum registro
                  if(isset($_SESSION['usuario']) ){
                  
                      include '../modelo/usuario.class.php';
                      $user = new Usuario();
                  
                  //descriptografa a variável contato e armazena no $cont
                      $user = unserialize( $_SESSION['usuario'] );
                  
                  //mostrando o resultado da variável tele e da variável de sessão cont
                      echo '<h4/><h4/><h4/>'.$user;// toString();
                  }
                ?>

       
        
        </div>
    </section>
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