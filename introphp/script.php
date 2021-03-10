<?php

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
    echo "Campo nome vazio";
    return;
}

if(empty($idade))
{
    echo "Campo idade vazio";
    return;
}

if(strlen($nome) < 3)
{
    echo "Nome muito pequeno";
    return;
}

if(strlen($nome) > 40)
{
    echo "Nome muito extenso";
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