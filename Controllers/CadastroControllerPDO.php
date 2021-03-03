<?php

include '../Classes/ClasseCrudPDO.php';
include '../include/Variaveis.php';

$crud = new ClasseCrudPDO();
$crud->insertDB("users", "?,?,?,?,?,?,?", array(
    $Id,
    $Nome,
    $Sobrenome,
    $email,
    $Senha,
    $Sexo,
    $Cidade));
echo "Cadastro realizado com sucesso!";