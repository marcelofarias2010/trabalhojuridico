<?php

if(isset($_POST['Acao'])){
    $Acao = filter_input(INPUT_POST, 'Acao', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['Acao'])){
    $Acao = filter_input(INPUT_GET, 'Acao', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $Acao="";
}

if(isset($_POST['Id'])){
    $Id = filter_input(INPUT_POST, 'Id', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['Id'])){
    $Id = filter_input(INPUT_GET, 'Id', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $Id=0;
}

if(isset($_POST['Nome'])){
    $Nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['Nome'])){
    $Nome = filter_input(INPUT_GET, 'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $Nome="";
}

if(isset($_POST['Sobrenome'])){
    $Sobrenome = filter_input(INPUT_POST, 'Sobrenome', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['Nome'])){
    $Sobrenome = filter_input(INPUT_GET, 'Sobrenome', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $Sobrenome="";
}

if(isset($_POST['Email'])){
    $email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['Email'])){
    $email = filter_input(INPUT_GET, 'Email', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $email="";
}

if(isset($_POST['Senha'])){
    $Senha = filter_input(INPUT_POST, 'Senha', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['Senha'])){
    $Senha = filter_input(INPUT_GET, 'Senha', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $Senha="";
}

if(isset($_POST['Sexo'])){
    $Sexo = filter_input(INPUT_POST, 'Sexo', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['Sexo'])){
    $Sexo = filter_input(INPUT_GET, 'Sexo', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $Sexo="";
}

if(isset($_POST['Cidade'])){
    $Cidade = filter_input(INPUT_POST, 'Cidade', FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['Cidade'])){
    $Cidade = filter_input(INPUT_GET, 'Cidade', FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $Cidade="";
}