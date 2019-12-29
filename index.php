<?php 
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf8">
    <title>Formulário de Inscrição</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
  </head>
  <body>
    <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

    <form action="script.php" method="post">
      <?php

        $mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
        if(empty($mensagemDeSucesso)) {

        } else {
          print $mensagemDeSucesso;
          $_SESSION['mensagem-de-erro'] = '';
        }

        $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';

        if(empty($mensagemDeErro)) {

        } else {
          print $mensagemDeErro;
          $_SESSION['mensagem-de-sucesso'] = '';
        }
      ?>
      <p>Seu nome: <input type="text" name="nome" title='Entre com o nome meu'/></p>
      <p>Sua idade: <input type="text" name="idade"/></p>
      <p><button type="submit">Enviar</button>
    </form>
  </body>
</html>