<?php

    class ConexaoBanco extends PDO
    {

    private static $instancia = null;

    public function ConexaoBanco($dsn,$usuario,$senha)
    {
        parent::__construct($dsn,$usuario,$senha);

    }

    public static function getInstancia()
    {
        if (! isset(self::$instancia)) 
        {
            
            try{
                self::$instancia = new ConexaoBanco("mysql:dbname=bd_qimoveis;host=localhost","root","");

            }catch(Exception $e){
                echo 'erro ao conectar com o banco...';
                exit();
            }

        }
        return self::$instancia;
    }



    }




?>