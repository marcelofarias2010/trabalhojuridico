<?php

include '../Classes/ClasseCrudMysqli.php';

$Crud = new ClasseCrudMysqli();
$IdUser = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

$Crud->deleteDB("users", "Id=?", "i", array($IdUser));

echo "Dado deletado com sucesso!";
