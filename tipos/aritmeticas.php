<div class="titulo">Operações Aritméticas</div>

<?php
  echo 1 + 1, '<br>';
  var_dump(1 + 1);
  echo '<br>';

  echo 1 + 2.5, '<br>'; # inteiro com float resulta em float
  echo 10 + 2, '<br>';
  echo 10 * 2, '<br>';
  echo 7 / 4, '<br>'; # 1.75 - resultado em divisão no php é float
  echo intdiv(7, 4), '<br>'; # 1 - obriga a divisão por inteiro
  echo 7 % 4, '<br>'; # 3 - resto da divisão
  // echo 7 / 0, '<br>'; # qualquer dividido por 0 vai retornar infinito
  // echo intdiv(7, 0); # erro!
  echo 4 ** 2, '<br>'; # 16

  echo 'Precedência de operadores:';
  echo '<br>';
  echo '() => ** => / * % => + -';
  echo '<br>';
  echo 2 + 3 * 4, '<br>'; # 14
  echo (2 + 3) * 4, '<br>'; # 20