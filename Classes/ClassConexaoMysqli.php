<?php

abstract class ClassConexaoMysqli {

    protected function conectaDB() {
        try {
            $conn = new mysqli("localhost", "root", "", "db_crud");
            return $conn;            
        } catch (Exception $erro) {
            return $erro->getMessage();
        }
    }    
}
