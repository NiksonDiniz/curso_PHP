<div class="titulo">Tipo Inteiro</div>

<?php

  echo 11;
  echo '<br>';

  var_dump(11); # int(11)
  echo '<br>';

  # constantes (são escritas sempre em maiúscula)
  echo PHP_INT_MAX, '<br>'; # 9223372036854775807 - valor máximo inteiro
  echo PHP_INT_MIN, '<br>'; # -9223372036854775808 - valor mínimo inteiro
  echo 017, '<br>'; # 15 -  base octal
  echo 0b11000111001, '<br>'; # 1593 - base binária
  echo 0x117acf0, '<br>'; #  18328816 - base hexadecimal