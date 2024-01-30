<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoContato.php");

extract($_REQUEST, EXTR_OVERWRITE);

$idnomePessoa = isset($idnomePessoa) ? $idnomePessoa : "";

if ($idnomePessoa) {

    $contatos = buscarPessoaID($conexao, $idnomePessoa);
?>

    <div class="container">
        <form class="row g-3" method="Post" action="../Controller/alterarContato.php">
        <input type="hidden" value="<?php echo ($contatos["idnomePessoa"]); ?>"  name="idnomePessoa">   
        
        <div class="col-md-8">
                <label for="inputPessoa" class="form-label">Nome</label>
                <input type="text" class="form-control" value="<?php echo ($contatos["nomePessoa"]); ?>" name="nomePessoa" id="inputPessoa">
            </div>

            <div class="col-md-4">
                <label for="inputcpf" class="form-label">CPF</label>
                <input type="text" class="form-control" value="<?php echo ($contatos["cpfPessoa"]); ?>" name="cpfPessoa" id="inputcpf">
            </div>

            <div class="col-md-4">
                <label for="inputSala" class="form-label">Sala</label>
                <input type="text" class="form-control" value="<?php echo ($contatos["numeroSala"]); ?>" name="numeroSala" id="inputSala">
            </div>

            <div class="col-12">
                <!-- Button trigger modal -->
                
                <button type="submit" class="btn btn-primary">Alterar</button>
            </div>
        </form>
    </div>
    
<?php
} else {
    echo ("Dados não encontrados");
};
include_once("footer.php");
?>