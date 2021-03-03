<?php
include './include/header.php';
include './Classes/ClasseCrudMysqli.php';
?>
<div class="container">
    <?php
        $Crud=new ClasseCrudMysqli();
        $IdUser=filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);

        $BFetch=$Crud->selectDB(
            "*",
            "users",
            "where Id=?",
            "i",
            array(
                $IdUser
            )
        );
        $Result=$BFetch->fetch_all();
        foreach($Result as $Fetch){
    ?>
    <h1>Dados do Usuário</h1>
    <hr>
    <strong>Nome:</strong> <?php echo $Fetch[1]; ?><br>
    <strong>Sobrenome:</strong> <?php echo $Fetch[2]; ?><br>
    <strong>E-mail:</strong> <?php echo $Fetch[3]; ?><br>
    <strong>Senha:</strong> <?php echo $Fetch[4]; ?><br>
    <strong>Sexo:</strong> <?php echo $Fetch[5]; ?><br>
    <strong>Cidade:</strong> <?php echo $Fetch[6]; ?><br>
    
    <?php } ?>
</div>

<?php include './include/footer.php'; ?>

