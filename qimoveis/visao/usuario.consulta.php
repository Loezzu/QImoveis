<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br" style="background-color: white;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="sortcut icon" href="../img/icon.png" type="image/x-icon">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/view.css" rel="stylesheet">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Consulta</title>
</head>
<body>
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
    

    

<h1>Usuarios Cadastrados</h1>

    
        <?php
        //verificando se nas variáveis há algum registro
            if( isset($_SESSION['usuarios'])){

                include_once '../modelo/usuario.class.php';

                $usuario = array();

            //descriptografa a variável contato e imprimir todos os contatos na tela
                $usuario = unserialize( $_SESSION['usuarios'] );


                echo '<table class= "table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th style="padding: 0 100px 13px 100px">Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>TipoDeImovel</th>
                            <th>Opção de Negocio</th>
                            <th>Valor</th>
                            <th>Mensagem</th>
                        </tr>
                    </thead>
                    <tbody>';


                        
                foreach ($usuario as $user) {

                        echo "<tr>";
                        echo '<td>'.$user->id.'</td>';
                        echo "<td> <a href='../controle/usuario.controle.php?op=alterar&id=$user->id'>$user->nome</a></td>";
                        echo '<td>'.$user->email.'</td>';
                        echo '<td>'.$user->telefone.'</td>';
                        echo '<td>'.$user->tipoDeImovel.'</td>';
                        echo '<td>'.$user->opcaoDeNegocio.'</td>';
                        echo '<td>'.$user->valor.'</td>';
                        echo '<td>'.$user->mensagem.'</td>';
                        echo '</tr>';
                        
                }
                }else{
                        echo 'Não existe orçamentos cadastrados...';
                }
                ?>
                    </tbody>
                </table>





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