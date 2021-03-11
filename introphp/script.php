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

/*
var_dump($nome);
var_dump($idade);
return 0;
*/

if(empty($nome))
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, preencha novamente';
    header('location: index.php');
    return;
}
else if(empty($idade))
{
    $_SESSION['mensagem-de-erro'] = 'A idade não pode ser vazia, preencha novamente';
    header('location: index.php');
    return;
}
else if(strlen($nome) < 3)
{
    $_SESSION['mensagem-de-erro'] = 'Nome muito curto, preencha novamente';
    header('location: index.php');
    return;
}
else if(strlen($nome) > 40)
{
    $_SESSION['mensagem-de-erro'] = 'Nome muito longo, preencha novamente';
    header('location: index.php');
    return;
}
else if(!is_numeric($idade))
{
    $_SESSION['mensagem-de-erro'] = 'A idade tem que ser um número, preencha novamente';
    header('location: index.php');
    return;
}


if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
        {
            echo "O nadador " .$nome. " compete na categoria " .$categorias[$i];
        }
    }
}else if($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
        {
            echo "O nadador " .$nome. " compete na categoria " .$categorias[$i];
        }
    }
}else if($idade >= 19 && $idade <= 50)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
        {
            echo "O nadador " .$nome. " compete na categoria " .$categorias[$i];
        }
    }
}else if($idade >= 51 && $idade <= 100)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'idoso')
        {
            echo "O nadador " .$nome. " compete na categoria " .$categorias[$i];
        }
    }
}
?>