<?php
function inserirPessoa($conexao,$nomePessoa,$cpfPessoa,$numeroSala){
    $query = "insert into codigostb(nomePessoa,cpfPessoa,numeroSala)values('{$nomePessoa}','{$cpfPessoa}','{$numeroSala}')";
    return mysqli_query($conexao,$query);
}

function buscarPessoanome($conexao,$nomePessoa){
    $query = "Select * from codigostb where nomePessoa like '%{$nomePessoa}%'";
    $result = mysqli_query($conexao,$query);
    return $result;
}

function buscarPessoaID($conexao, $idnomePessoa){
    $query = "Select * from codigostb where idnomePessoa = '{$idnomePessoa}'";
    $result = mysqli_query($conexao,$query);
    $result = mysqli_fetch_array($result);
    return $result;
    
}

function alterarPessoa($conexao,$idnomePessoa,$nomePessoa,$cpfPessoa,$numeroSala){
    $query = "update codigostb set nomePessoa='{$nomePessoa}',
    numeroSala='{$numeroSala}',cpfPessoa='{$cpfPessoa}' where idnomePessoa = '{$idnomePessoa}'";
    $result = mysqli_query($conexao,$query);
    return $result;

}

function deletarPessoa($conexao,$idnomePessoa){
    $query = "Delete from codigostb where idnomePessoa = '{$idnomePessoa}'";
    $result = mysqli_query($conexao,$query);
    return $result;
}