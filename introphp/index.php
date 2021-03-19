<?php
    session_start();
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
    /*
        if(isset($_SESSION['mensagem-de-erro']))
        {
            $mensagemDeErro = $_SESSION['mensagem-de-erro'] = $_SESSION['mensagem-de-erro'];
        }
      
        if(isset($_SESSION['mensagem-de-erro']))
        {
            $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
            if(empty(!$mensagemDeErro))
            {
            echo $mensagemDeErro;
            }
        }
        else
        {
            $mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
            if(!empty($mensagemDeSucesso))
            {
                echo $mensagemDeSucesso;
            }
        }
    */ 
        obterMensagemErro();  
    ?>
    <p>Seu nome: <input type="text" name="nome"></p>
    <p>Sua idade: <input type="text" name="idade"></p>
    <p><input type="submit" value="Enviar dados"></p>
    </form>


</body>
</html>