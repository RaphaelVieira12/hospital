<?php
include_once("header.php");
?>

<div class="container">

<div class="card mb-3">
  <img src="../imagens/17963_Rede_DOr_BR_ENXOVAL_Clinivac_-_23-12_Banner_site_v4.jpg" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">Hospital Brasil</h5>
    <p class="card-text">O Hospital e Maternidade Brasil foi inaugurado em 1970 em Santo André, por um grupo de médicos cujo objetivo foi oferecer, às famílias da região do ABC Paulista, serviços de saúde de alto padrão. </p>
    <p class="card-text"><small class="text-body-secondary">Atualizado a poucos minutos atras</small></p>
  </div>
</div>

    <form class="row g-3" method="Post" action="../controller/adicionarContato.php">
        <div class="col-md-8">
            <label for="inputNome" class="form-label">Usuário</label>
            <input type="text" class="form-control" name="nomePessoa"id="inputNome">
        </div>

        <div class="col-md-4">
            <label for="inputcpf" class="form-label">CPF</label>
            <input type="text" class="form-control" name="cpfPessoa"id="inputcpf">
        </div>
    
        <div class="col-md-4">
            <label for="inputsala" class="form-label">Sala</label>
            <input type="text" class="form-control" name="numeroSala"id="inputsala">
        </div>
    
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>

<?php
include_once("footer.php");
?>