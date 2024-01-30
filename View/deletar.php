<?php
include_once("header.php");
include_once("../model/conexao.php");
include_once("../model/bancoContato.php");
?>
<!-- inicio formulario -->
<div class="container m-4">
<form class="row g-3" method="POST" action="#">
<div class="row g-3 align-items-center">
    <div class="col-auto">
        <label for="inputPessoa" class="col-form-label">Digite seu Nome</label>
    </div>
    <div class="col-auto">
        <input type="text" id="inputPessoa" name="nomePessoa"class="form-control" aria-describedby="passwordHelpInline">
    </div>
    <div class="col-auto">
         <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
</div>
</form>
<!--fim formulario -->

<!--inicio tabela-->
<hr>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">Sala</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
  <?php
     extract($_REQUEST,EXTR_OVERWRITE);

     $nomePessoa = isset($nomePessoa)?$nomePessoa : "";
     
     if($nomePessoa){
       
       $dados = buscarPessoanome($conexao,$nomePessoa);

     foreach($dados as $contatos) :
     ?>
    <tr>
    <th scope="row"> <?php echo($contatos["idnomePessoa"]);?> </th>
    <td> <?php echo($contatos["nomePessoa"])?> </td>
      <td> <?=$contatos["cpfPessoa"]?> </td>
      <td> <?=$contatos["numeroSala"]?> </td>
      <td>
     <!-- Button trigger modal -->
<button type="button" idnomePessoa="<?=$contatos["idnomePessoa"]?>" nomePessoa="<?=$contatos["nomePessoa"]?>" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletarModal">
  Deletar
</button>
      </td>
    </tr>
       <?php
       endforeach;
      }
       ?>
  </tbody>
</table>
<!--fim tabela-->
</div>

<!-- Modal -->
<div class="modal fade" id="deletarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cuidado!!!!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <form action="../Controller/deletarContato.php" method="post">
          <input type="hidden" value="" class="idnomePessoa from-control" name="idnomePessoa">
          <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
  
      </div>
    </div>
  </div>
</div>
<script>
    let deletarContatoModal = document.getElementById('deletarModal');
        deletarContatoModal.addEventListener('show.bs.modal', function(event) {
    let button = event.relatedTarget;
    let idnomePessoa = button.getAttribute('idnomepessoa');
    let nomePessoa = button.getAttribute('nomepessoa');

    let modalBody = deletarContatoModal.querySelector('.modal-body');
    modalBody.textContent = 'Deseja realmente excluir o CPF? ' + nomePessoa +'?'

    let IdnomePessoa = deletarContatoModal.querySelector('.modal-footer .idnomePessoa');
    IdnomePessoa.value = idnomePessoa;
  })
</script>

<div class="card-group">
  <div class="card">
    <img src="../imagens/20223129638.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Sobre Nós</h5>
      <p class="card-text">O Hospital e Maternidade Brasil foi inaugurado em 1970 em Santo André, por um grupo de médicos cujo objetivo foi oferecer, às famílias da região do ABC Paulista, serviços de saúde de alto padrão.</p>
    </div>
  </div>
  <div class="card">
    <img src="../imagens/HBrasil_Servicos_OncologiaDor_3-min.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Hospital Brasil</h5>
      <p class="card-text">Procure pelo nome ou especialidade de atendimento. Aqui, você é sempre bem tratado.</p>
      <p class="card-text"><small class="text-body-secondary">Detalhes no nosso site.</small></p>
    </div>
  </div>
  <div class="card">
    <img src="../imagens/mg-4699.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Melhor Atendimento do Brasil.</h5>
      <p class="card-text">O Hospital e Maternidade Brasil, pioneiro na região do grande ABC na realização de cirurgias robóticas como parte do Programa de Cirurgia Robótica da Rede D’Or São Luiz, possui agora uma nova versão do robô, o da Vinci X, a quarta geração dos robôs da Vinci. </p>

    </div>
  </div>
</div>

<?php
include_once("footer.php");
?>