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
        <label for="inputPessoa" class="col-form-label">Digite Seu Nome</label>
    </div>
    <div class="col-auto">
        <input type="text" id="inputPessoa" name="nomePessoa" class="form-control" aria-describedby="passwordHelpInline">
    </div>
    <div class="col-auto">
         <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
</div>

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
      <p class="card-text">O Hospital e Maternidade Brasil, pioneiro na região do grande ABC na realização de cirurgias robóticas como parte do Programa de Cirurgia Robótica da Rede DOr São Luiz, possui agora uma nova versão do robô, o da Vinci X, a quarta geração dos robôs da Vinci. </p>

    </div>
  </div>
</div>
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
      <th scope="col">Alterar</th>
    </tr>
  </thead>
  <tbody>
  <?php
     extract($_REQUEST,EXTR_OVERWRITE);

     $nomePessoa = isset($nomePessoa)?$nomePessoa : "";
     
     if($nomePessoa){
       
       $dados = buscarPessoaNome($conexao,$nomePessoa);

     foreach($dados as $contatos) :
     ?>
    <tr>
    <th scope="row"> <?php echo($contatos["idnomePessoa"]);?> </th>
      <td> <?php echo($contatos["nomePessoa"])?> </td>
      <td> <?=$contatos["cpfPessoa"]?> </td>
      <td> <?=$contatos["numeroSala"]?> </td>
      <td>
     <a class="btn btn-primary" href="alterarFormulario.php?idnomePessoa=<?=$contatos["idnomePessoa"]?>">
      Alterar
      </a>
      </td>
    </tr>
       <?php
       endforeach;
      }
       ?>
  </tbody>
</table>
    
  </tbody>
</table>
<!--fim tabela-->

</div>
<?php
include_once("footer.php");
?>