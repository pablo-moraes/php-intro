<?php
  $categorias = ['infantil', 'adolescente', 'adulto', 'idoso'];

  $nome = 'Eduardo';
  $idade = 28;

  if($idade == 6 && $idade <= 12) {
    for($i = 0; $i <= count($categorias); $i++) {
      if($categorias[$i] == 'infantil')
        echo "O nadador " . $nome . " compete na categoria " . $categorias[$i];
    }
  } else if ($idade >= 13 && $idade <= 18) {
    for($i = 0; $i <= count($categorias); $i++) {
      if($categorias[$i] == 'adolescente')
        echo "O nadador " . $nome . " compete na categoria " . $categorias[$i];
    }
  } else {
    for($i = 0; $i <= count($categorias); $i++) {
      if($categorias[$i] == 'adulto')
        echo "O nadador " . $nome . " compete na categoria " . $categorias[$i];
    }
  }
?>