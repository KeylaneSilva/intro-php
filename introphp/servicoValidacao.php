<?php

function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, preencha novamente';
        return false;
    }
    else if(strlen($nome) < 3)
    {
        $_SESSION['mensagem-de-erro'] = 'Nome muito curto, preencha novamente';
        header('location: index.php');
        return false;
    }
    else if(strlen($nome) > 40)
    {
        $_SESSION['mensagem-de-erro'] = 'Nome muito longo, preencha novamente';
        header('location: index.php');
        return false;
    }
    return true;
}

function validaIdade(string $idade)
{
    else if(empty($idade))
    {
        $_SESSION['mensagem-de-erro'] = 'A idade não pode ser vazia, preencha novamente';
        header('location: index.php');
        return;
    }
    
    else if(!is_numeric($idade))
    {
        $_SESSION['mensagem-de-erro'] = 'A idade tem que ser um número, preencha novamente';
        header('location: index.php');
        return;
    }

}
