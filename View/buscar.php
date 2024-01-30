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
        <label for="inputpessoa" class="col-form-label">Digite o Nome</label>
    </div>
    <div class="col-auto">
        <input type="text" id="inputpessoa" name="nomePessoa" class="form-control" aria-describedby="passwordHelpInline">
    </div>
    <div class="col-auto">
         <button type="submit" class="btn btn-outline-primary">Buscar</button>
    </div>
</form>
</div>
<hr>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">Sala</th>
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
    <td><?= $contatos["nomePessoa"] ?></td>
    <td><?= $contatos["cpfPessoa"] ?></td>
    <td><?= $contatos["numeroSala"] ?></td>
   

     </td>
     </a>
    </tr>
       <?php
       endforeach;
      }
       ?>
  </tbody>
</table>
  </tbody>
</table>
</div>

<div class="card mb-3">
  <img src="../imagens/17963_Rede_DOr_BR_ENXOVAL_Clinivac_-_23-12_Banner_site_v4.jpg" class="card-img-top" alt="">
  <div class="card-body">
    <h5 class="card-title">Hospital Brasil</h5>
    <p class="card-text">O Hospital e Maternidade Brasil foi inaugurado em 1970 em Santo André, por um grupo de médicos cujo objetivo foi oferecer, às famílias da região do ABC Paulista, serviços de saúde de alto padrão. </p>
    <p class="card-text"><small class="text-body-secondary">Atualizado a poucos minutos atras</small></p>
  </div>
</div>

<?php
include_once("footer.php");
?>