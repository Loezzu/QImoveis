<?php

    session_start();

    include '../modelo/usuario.class.php';
    include '../dao/usuariodao.class.php';

    include '../util/usuario.validacao.php';

    switch ($_GET['op']) {
        case 'cadastrar':
           
                    
            if(isset($_POST['txtnome']) && 
            isset($_POST['txtemail']) && 
            isset($_POST['txttelefone']) && 
            isset($_POST['txttipodeimovel']) && 
            isset($_POST['txtformadeadquirimento']) && 
            isset($_POST['txtvalor']) && 
            isset($_POST['txtmensagem'])){
            $errors = array();	

            if(!Validacao::validarNome($_POST['txtnome'])){
                $errors[] = 'Nome inválido.';
            }

            if(count($errors) == 0){	

            $user = new Usuario();

            $user->nome = $_POST['txtnome'];
            $user->email = $_POST['txtemail'];
            $user->telefone = $_POST['txttelefone'];
            $user->tipoDeImovel = $_POST['txttipodeimovel'];
            $user->opcaoDeNegocio = $_POST['txtformadeadquirimento'];
            $user->valor = $_POST['txtvalor'];
            $user->mensagem = $_POST['txtmensagem'];

            $cDAO = new UsuarioDAO();
            $cDAO->cadastrarUsuario($user);

            $_SESSION['usuario'] = serialize($user);

           header("location:../visao/usuario.resposta.php");

            }else{
		    $_SESSION['errors'] = serialize($errors);
		
		    header("location:../visao/usuario.request.php");		
	        }
            }else{
	            echo 'Algo não está preenchido';
            }
           
            break;    
    
           case 'consultar':

            $cDAO = new UsuarioDAO();
            
            $array = array();
            $array = $cDAO->buscarUsuarios();

            $_SESSION['usuarios'] = serialize($array);

            header("location:../visao/usuario.consulta.php");

        break;

        case 'deletar':
         if(isset($_REQUEST['id'])){
                  
             $cDAO = new UsuarioDAO();
             $cDAO->deletarUsuario($_REQUEST['id']);
             header('location:../controle/usuario.controle.php?op=consultar');
         }else{  
             $_SESSION['msg'] = 'Não existe esse código na base de dados.'; 
            
         }

        default:
        
        break;
    
    
    
    
    
    
    }



?>