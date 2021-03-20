<?php
    include "servicos/servicoMensagemSessao.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulario de inscrição</title>
    <meta name ="autor" content="">
    <meta name ="descrição" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <p>FORMULÁRIO PARA A INSCRIÇÃO DE COMPETIDORES</p>

    <form action="script.php" method="POST">
    <?php
  
    if(isset($_SESSION['mensagem-de-erro']))
    {
        $mensagemDeErro = obterMensagemErro();
        if(empty(!$mensagemDeErro))
        {
        echo $mensagemDeErro;
        }
    }
    else
    {
        $mensagemDeSucesso = ObterMensagemSucesso();
        if(!empty($mensagemDeSucesso))
        {
            echo $mensagemDeSucesso;
        }
    }
      
    ?>
    <p>Seu nome: <input type="text" name="nome"></p>
    <p>Sua idade: <input type="text" name="idade"></p>
    <p><input type="submit" value="Enviar dados"></p>
    </form>
    
</body>
</html>