<?php

function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        setarMensagemErro('O nome não pode ser vazio, preencha novamente');
        return false;
    }
    else if(strlen($nome) < 3)
    {
        setarMensagemErro('Nome muito curto, preencha novamente');
        return false;
    }
    else if(strlen($nome) > 40)
    {
        setarMensagemErro('Nome muito longo, preencha novamente');
        return false;
    }
    return true;
}

function validaIdade(string $idade)
{
    if(empty($idade))
    {
        setarMensagemErro('A idade não pode ser vazia, preencha novamente');
        return false;
    }
    else if(!is_numeric($idade))
    {
        setarMensagemErro('A idade tem que ser um número, preencha novamente');
        return false;
    }
    return true;
}
