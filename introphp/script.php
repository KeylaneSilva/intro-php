<?php
session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias); 

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(validaNome($nome) == false)
{
    obterMensagemErro();
    header('location: index.php');
    return;
}else if(validaIdade($idade) == false)
{
    obterMensagemErro();
}else{
        /*
    var_dump($nome); 
    var_dump($idade);
    return 0;
    */

    if($idade >= 6 && $idade <= 12)
    {
        for($i = 0; $i <= count($categorias); $i++)
        {
            if($categorias[$i] == 'infantil')
            {
                $_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome. " compete na categoria " .$categorias[$i];
                header('location: index.php');
                return;
            }
        }
    }else if($idade >= 13 && $idade <= 18)
    {
        for($i = 0; $i <= count($categorias); $i++)
        {
            if($categorias[$i] == 'adolescente')
            {
                $_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome. " compete na categoria " .$categorias[$i];
                header('location: index.php');
                return;
            }
        }
    }else if($idade >= 19 && $idade <= 50)
    {
        for($i = 0; $i <= count($categorias); $i++)
        {
            if($categorias[$i] == 'adulto')
            {
                $_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome. " compete na categoria " .$categorias[$i];
                header('location: index.php');
                return;
            }
        }
    }else if($idade >= 51 && $idade <= 100)
    {
        for($i = 0; $i <= count($categorias); $i++)
        {
            if($categorias[$i] == 'idoso')
            {
                $_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome. " compete na categoria " .$categorias[$i];
                header('location: index.php');
                return;
            }
        }
    }
}

?>