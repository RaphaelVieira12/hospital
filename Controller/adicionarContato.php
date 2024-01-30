<?php
require_once("../model/conexao.php");
require_once("../model/bancoContato.php");
include_once("../view/header.php");

extract($_REQUEST,EXTR_OVERWRITE);


if(inserirPessoa($conexao,$nomePessoa,$cpfPessoa,$numeroSala)){
echo("As informações do Contato foram salvas");

}else{
echo("Alerta!!! As informações do Contato Não foram salvas");
}

?>