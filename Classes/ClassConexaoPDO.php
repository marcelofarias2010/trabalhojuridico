<?php

abstract class ClassConexaoPDO {
    #Realizará a conexão com o banco de dados

    protected function conectaDB() {
        try {
            $Con = new PDO("mysql:host=localhost;dbname=db_crud", "root", "");
            return $Con;
        } catch (PDOException $Erro) {
            return $Erro->getMessage();
        }
    }

}
