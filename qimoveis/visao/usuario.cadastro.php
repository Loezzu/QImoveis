<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="sortcut icon" href="../img/icon.png" type="image/x-icon">
    <link href="../css/view.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light static-top">
        <div class="container">
            <a class="navbar-brand" href="../index.html">QIMÓVEIS</a>
            <div id="navzinha">
                <a class="btn btn-outline-dark" id="consultar" href="../controle/usuario.controle.php?op=consultar">Consultar</a>
                <a class="btn btn-outline-dark" id="deletar" href="../visao/usuario.deletar.php">Deletar</a>
                <a class="btn btn-outline-dark" href="../visao/usuario.cadastro.php">Cadastrar</a>
            </div>
        </div>  
    </nav>
    <section class="pb-5">
        <h1 class="h2 pt-5">Preencha os dados abaixo</h1>
        <div id="main-div">
            <form action="../controle/usuario.controle.php?op=cadastrar" method="post">
                <fieldset class="mt-5 p-4">
                    <legend>Faça seu cadastro!</legend>
                    <div class="row justify-content-around">
                        <div class="col">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" placeholder="Nome Completo" name="txtnome">
                        </div>
                        <div class="col">
                            <label for="email">E-mail</label>
                            <input type="email" placeholder="exemplo@gmail.com" class="form-control" id="email" name="txtemail">
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-around">
                        <div class="col">
                            <label for="telefone">Telefone</label>
                            <input type="text" placeholder="Nº de Telefone" class="form-control" id="telefone" name="txttelefone">
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="tipodeimovel">Tipo de Imóvel</label>
                                <select class="form-control" name="txttipodeimovel" id="tipodeimovel">
                                    <option value="casa">Casa</option>
                                    <option value="apartamento">Apartamento</option>
                                    <option value="outro">Outro</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-around">
                        <div class="col">
                            <div class="form-group">
                                <label for="formadeadquirimento">Forma de Adquirimento</label>
                                <select class="form-control" name="txtformadeadquirimento" id="formadeadquirimento">
                                    <option value="comprar">Comprar</option>
                                    <option value="alugar">Alugar</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <label for="valor">Valor Pretendido</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" id="valor" name="txtvalor" placeholder="Máximo a pagar" class="form-control">
                            </div>
                        </div>                            
                    </div>
                    <div class="form-row mt-2">
                        <label for="mensagem">Mensagem</label>
                        <textarea class="form-control" placeholder="Informações adicionais - Ex.: Nº de quartos, banheiros, etc... " name="txtmensagem" id="mensagem" rows="3"></textarea>
                    </div>
                    <input type="submit" class="btn mt-4" id="submit">
                </fieldset>
            </form>
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