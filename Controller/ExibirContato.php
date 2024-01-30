<?php
include_once("../model/conexao.php");
include_once("../model/bancoContato.php");

extract($_REQUEST,EXTR_OVERWRITE);

buscarPessoanome($conexao,$nomePessoa);

header("Location: ../view/buscar.php");
?>