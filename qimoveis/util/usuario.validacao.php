<?php


class Validacao
  {
    //Função para verificar se o e-mail esta no formato adequado:
    public function validarEmail($email)
    {
      return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    //Função para retornar se a variável está no padrão correto - expressão regular:
    public function testarExpressao($expressao, $variavel)
    {
    return preg_match($expressao,$variavel);
    }

    //Testando expressão - outras formas:
    //validando o campo nome

        public static function validarNome($valor){
            //  buscando no testador a sintaxe do nome
            $exp = '/^[^.!@#$%¨&*]{2,40}$/';
            //pega a expressão e o valor recebido para validar
            if(preg_match($exp,$valor)){
                return true;
            }else{
                return false;
            }//fecha else
        }//fecha nome

        public static function validar($opcao, $valor): bool
        {
            $expressaoNome = "/^[a-zA-Z]{2,30}$/";
            $expressaoSobrenome = "/^[a-zA-Z]{2,30}$/";
            $expressaoSexo = "/^(Masculino|Feminino)$/";
            $expressaoPeso = "/^-?[0-9]{1,3}.?[0-9]{1,3}$/";
            $expressaoCpf = "/^[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{2}$/";
            switch($opcao)
            {
              case "nome":
                return preg_match($expressaoNome, $valor);
              case "sobrenome":
                return preg_match($expressaoSobrenome, $valor);
              case "sexo":
                return preg_match($expressaoSexo, $valor);
              case "peso":
                return preg_match($expressaoPeso, $valor);
              case "cpf":
                return preg_match($expressaoCpf, $valor);
            }
        }
    
        //Função para converter tudo em maiusculo:
        public function converterMaiusculo($variavel)
        {
          return strtoupper($variavel);
        }
    
        //Função para converter letras para minúsculo:
        public function converterMinusculo($variavel)
        {
          return strtolower($variavel);
        }
    
        //Função para contar os caracteres:
        public function contarCaracteres($variavel)
        {
          return strlen($variavel);
        }
    
        //Função para converter palavras para primeira letra maiuscula e demais minuscula:
        public function converterPrimeiraLetra($variavel)
        {
          return ucwords($variavel);
        }
    
        //Função para retirar espaços do texto:
        public function retirarEspaco($variavel)
        {
          return trim($variavel);
        }
    


}


?>