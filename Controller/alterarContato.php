<?php 
require_once("../model/conexao.php");
require_once("../model/bancoContato.php");
include_once("../view/header.php");

extract($_REQUEST, EXTR_OVERWRITE);


if (alterarPessoa($conexao,$idnomePessoa,$nomePessoa,$cpfPessoa,$numeroSala)) {
    echo ("As informações do Contato foram alteradas com sucesso.");
} else {
    echo ("Alerta!!! As informações do Contato Não foram Alteradas");
}

?>