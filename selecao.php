<?php
include './include/header.php';
include './Classes/ClasseCrudMysqli.php';
?>
<div class="container">
    <h2 style="text-align: center;padding: 25px;">Lista de Usuários cadastrado</h2>
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>
    <table class="table table-striped text-center">
        <thead class="thead-dark">
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody id="myTable">
            <!-- Estrutura de loop -->
            <?php
            $Crud = new ClasseCrudMysqli();
            $BFetch = $Crud->selectDB(
                    "*", "users", "", "", array()
            );

            while ($Result = $BFetch->fetch_all()) {
                foreach ($Result as $Fetch) {
                    ?>
                    <tr>
                        <td><?php echo $Fetch[1]; ?></td>
                        <td><?php echo $Fetch[2]; ?></td>
                        <td><?php echo $Fetch[3]; ?></td>
                        <td>
                            <a href="<?php echo "visualizar.php?id={$Fetch[0]}"; ?>"><img src="img/Visualizar.png" width="32px" alt="Visualizar"></a>
                            |<a href="<?php echo "cadastrar.php?id={$Fetch[0]}"; ?>"><img src="img/Edite.png" width="32px" alt="Editar"></a>
                            |<a class="Deletar" href="<?php echo "Controllers/ControllerDeletarMysqli.php?id={$Fetch[0]}"; ?>"><img src="img/Lixeira.png" width="32px" alt="Deletar"></a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>

        </tbody>
    </table>

</div>
<script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script>
    /* Confirmar antes de deletar os dados */
    $('.Deletar').on('click', function (event) {
        event.preventDefault();

        var Link = $(this).attr('href');

        if (confirm("Deseja mesmo apagar esse dado?")) {
            window.location.href = Link;
        } else {
            return false;
        }
    });
</script>
<?php include './include/footer.php'; ?>