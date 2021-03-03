<?php

include '../Classes/ClasseCrudMysqli.php';
include '../include/Variaveis.php';

$crud = new ClasseCrudMysqli();
if ($Acao == 'Cadastrar') {
    $crud->insertDB(
            "users", "?,?,?,?,?,?,?", 
            "issssss", 
            array($Id,$Nome,$Sobrenome,$email,$Senha,$Sexo,$Cidade)
    );

    echo "Cadastro Realizado com Sucesso!";
} else {
    $crud->updateDB("users", 
            "Nome=?,Sobrenome=?,email=?,senha=?,sexo=?,Cidade=?","Id=?","ssssssi", 
            array($Nome, $Sobrenome, $email, $Senha, $Sexo, $Cidade, $Id));
    echo "Cadastro editado com sucesso";
}