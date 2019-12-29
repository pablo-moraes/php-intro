<?php
  session_start();
  $categorias = ['infantil', 'adolescente', 'adulto'];

  $nome = $_POST['nome'];
  $idade = $_POST['idade'];

  if(empty($nome)){
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio';
    header('location: index.php');
    return;
}
  else if(strlen($nome) < 3){
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter mais de 3 caracteres';
    header('location: index.php');
    return;
  }
  
  else if(strlen($nome) > 20) {
    $_SESSION['mensagem-de-erro'] = 'O nome é muito extenso';
    header('location: index.php');
    return;
  }

  else if(!is_numeric($idade)) {
    $_SESSION['mensagem-de-erro'] = 'Insira um valor numérico válido';
    header('location: index.php');
    return;
  }

    if($idade == 6 && $idade <= 12) {
      for($i = 0; $i <= count($categorias); $i++) {
        if($categorias[$i] == 'infantil')
          $_SESSION['mensagem-de-sucesso'] = "O nadador  $nome  compete na categoria " . $categorias[$i];
          header('location: index.php');
      }
    } else if ($idade >= 13 && $idade <= 18) {
      for($i = 0; $i <= count($categorias); $i++) {
        if($categorias[$i] == 'adolescente')
          $_SESSION['mensagem-de-sucesso'] = "O nadador  $nome  compete na categoria " . $categorias[$i];
          header('location: index.php');
      }
    } else{
        for($i = 0; $i <= count($categorias); $i++) {
          if($categorias[$i] == 'adulto')
            $_SESSION['mensagem-de-sucesso'] = "O nadador  $nome  compete na categoria " . $categorias[$i];
            header('location: index.php');
        }
      }
?> 