<?php
include './Classes/ClasseCrudMysqli.php';
/* Edição de dados */
if (isset($_GET['id'])) {
    $Acao = "Editar";

    $Crud = new ClasseCrudMysqli();
    $BFetch = $Crud->selectDB("*", "users", "where Id=?", "i", array($_GET['id']));
    $Fetch = $BFetch->fetch_all();
    foreach ($Fetch as $Fetchs) {
        $Id = $Fetchs[0];
        $Nome = $Fetchs[1];
        $Sobrenome = $Fetchs[2];
        $email = $Fetchs[3];
        $Senha = $Fetchs[4];
        $Sexo = $Fetchs[5];
        $Cidade = $Fetchs[6];
    }
} else {
    /* Cadastro novo */
    $Acao = "Cadastrar";
    $Id = 0;
    $Nome = "";
    $Sobrenome = "";
    $email = "";
    $Senha = "";
    $Sexo = "";
    $Cidade = "";
}
?>

<form id="FormCadastro" method="post" action="Controllers/CadastroControllerMysqli.php">   
    <div style="display: none;text-align: center;" id="Resultado" class="alert alert-success"></div>
    <h2 style="text-align: center;padding-bottom: 25px;">Formulário de cadastro de Usuário</h2>
    <div class="row">
        <input type="hidden" id="Acao" name="Acao"  value="<?php echo $Acao; ?>">
        <input type="hidden" id="Id" name="Id" value="<?php echo $Id; ?>">
        <div class="col-6">
            <label>Nome:</label>
            <input type="text" class="form-control" id="nome" placeholder="Entre com seu nome" name="Nome" value="<?php echo $Nome; ?>">
        </div>
        <div class="col-6">
            <label>Sobrenome:</label>
            <input type="text" class="form-control" id="sobrenome" placeholder="Entre com seu sobrenome" name="Sobrenome" value="<?php echo $Sobrenome; ?>">
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <label>E-mail:</label>
            <input type="text" class="form-control" id="user" placeholder="exemplo@exemplo.com.br" name="Email" value="<?php echo $email; ?>">
        </div>
        <div class="col-4">
            <label>Senha:</label>
            <input type="password" class="form-control" placeholder="digite um senha" name="Senha" value="<?php echo $Senha; ?>">
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <label>Sexo:</label>
            <select class="form-control" name="Sexo" id="Sexo" >
                <option value="<?php echo $Sexo; ?>"><?php echo $Sexo; ?></option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>
        </div>
        <div class="col-3"></div>
        <div class="col-5">
            <label>Cidade:</label>
            <input type="text" class="form-control" id="cidade" placeholder="Informe uma cidade" name="Cidade" value="<?php echo $Cidade; ?>">
        </div>
    </div>
    <div class="row">
        <div style="padding-top: 25px;" class="col-3">
            <input type="submit" class="btn btn-success" value="<?php echo $Acao; ?>">
        </div>
    </div>
</form>
