<?php

include __DIR__ . '/ClassConexaoMysqli.php';

class ClasseCrudMysqli extends ClassConexaoMysqli {
    #atributos

    private $Crud;
    private $Contador;
    private $Resultado;

    #contador de parâmetros

    private function conteParametros($parametros) {
        $this->Contador = count($parametros);
    }

    #preparação das declarativas

    private function preparedStatements($Query, $Tipos, $Parametros) {
        $this->conteParametros($Parametros);
        $Con = $this->conectaDB();
        $this->Crud = $Con->prepare($Query);

        if ($this->Contador > 0) {
            $CallParametros = array();
            foreach ($Parametros as $Key => $Parametro) {
                $CallParametros[$Key] = &$Parametros[$Key];
            }
            //incluir na 1ª posição do array os tipos
            array_unshift($CallParametros, $Tipos);
            call_user_func_array(array($this->Crud, 'bind_param'), $CallParametros);
        }
        $this->Crud->execute();
        $this->Resultado = $this->Crud->get_result();
    }

    #Método de Inserção

    public function insertDB($Tabela, $Condicao, $Tipos, $Parametros) {
        $this->preparedStatements("insert into {$Tabela} values ({$Condicao})", $Tipos, $Parametros);
        return $this->Crud;
    }

    #Método de Seleção

    public function selectDB($Campos, $Tabela, $Condicao, $Tipos, $Parametros) {
        $this->preparedStatements("select {$Campos} from {$Tabela} {$Condicao}", $Tipos, $Parametros);
        return $this->Resultado;
    }

    #Método para apagar dados no DB

    public function deleteDB($Tabela, $Condicao, $Tipos, $Parametros) {
        $this->preparedStatements("delete from {$Tabela} where {$Condicao}", $Tipos, $Parametros);
        return $this->Crud;
    }

    #Método para atualizar DB

    public function updateDB($Tabela, $Set, $Condicao, $Tipos, $Parametros) {
        $this->preparedStatements("update {$Tabela} set {$Set} where {$Condicao}", $Tipos, $Parametros);
        return $this->Crud;
    }

}
