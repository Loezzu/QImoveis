<?php


include "../persistencia/conexaobanco.class.php";

class UsuarioDAO {

    private $conexao = null; 

    public function __construct() {
        $this->conexao = ConexaoBanco::getInstancia();
    }

    // criando a função de inserção dos dados 
    public function cadastrarUsuario($user) 
    {
        // tentar inserir no BD 

        try
        {
           $stat =  $this->conexao->prepare("insert into usuario(id,nome,email,telefone,tipoDeImovel,opcaoDeNegocio,valor,mensagem)
           values(null,?,?,?,?,?,?,?)");

           $stat->bindValue(1,$user->nome);
           $stat->bindValue(2,$user->email);
           $stat->bindValue(3,$user->telefone);
           $stat->bindValue(4,$user->tipoDeImovel);
           $stat->bindValue(5,$user->opcaoDeNegocio);
           $stat->bindValue(6,$user->valor);
           $stat->bindValue(7,$user->mensagem);

           $stat->execute();

           $this->conexao = null;

        }catch(PDOException $user)
        {
            echo 'Erro ao cadastrar usuario!';
        }
    }


      // buscando os usuarios cadastrados

    public function buscarUsuarios()
    {
        try
        {
        // criando o select como se fosse no BD
        $stat = $this->conexao->query("select * from usuario");
        // criando uma variável array para armazenar todos os usuarios cadastrados
        $array = array();
        // buscar todos os registros cadastrados na classe Usuario
        $array = $stat->fetchAll(PDO::FETCH_CLASS,'Usuario');
        // finalizando a conexão novamente
        $this->conexao =  null;

        return $array;// retorna na tela os usuarios

        }catch(PDOException $e)
        {
        echo 'Erro ao buscar os usuarios..'.$e;
        }
    }//fecha o consultar


    public function deletarUsuario($id)
    {
		try
        {
			$stat = $this->conexao->prepare("delete from usuario where id=?");
			
			$stat->bindValue(1,$id);
			
			$stat->execute();
			
			$this->conexao = null;
		}catch(PDOException $e)
        {
			echo 'Erro ao deletar usuario';
		}//fecha catch
	}//fecha deletarUsuario


    


}//fecha a classe usuariodao



?>