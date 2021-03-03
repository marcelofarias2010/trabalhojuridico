<?php
include '../Classes/ClasseCrudPDO.php';
$Crud=new ClasseCrudPDO();
$IdUser=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);

$Crud->deleteDB("users","Id=?",array($IdUser));

echo "Dado deletado com sucesso!";
